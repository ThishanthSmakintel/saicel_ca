<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Service;
use App\Models\Reply;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyNotification;

class ContactUsInquiryManagementController extends Controller
{
    /**
     * Display a listing of the inquiries.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            Log::info('Fetching all messages from the database.');

            // Fetch all messages from the messages table, ordered by created_at descending
            $messages = Message::orderBy('created_at', 'desc')->get();

            // Loop through messages to fetch related service names
            foreach ($messages as $message) {
                // Validate if message has a service_id (assuming it's service_id)
                if ($message->service) {
                    // Find the related service based on $message->service (assuming it's service_id)
                    $service = Service::findOrFail($message->service);
                    $message->serviceName = $service->service_name;
                } else {
                    $message->serviceName = 'Service not specified'; // Handle case where service_id is null or invalid
                }
            }

            Log::info('Messages fetched successfully.');

            // Return view with messages data
            return view('dashboard.pages.received-messages', ['messages' => $messages]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Failed to fetch inquiries: ' . $e->getMessage());

            // Handle error if any
            return view('error')->with('message', 'Failed to fetch inquiries');
        }
    }

    /**
     * Show replies for a specific message.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function showReplies($id)
    {
        try {
            // Attempt to find the message with its replies
            $message = Message::with('replies')->findOrFail($id);

            // Check if a service is associated with the message
            if ($message->service) {
                // Find the related service based on $message->service (assuming it's service_id)
                $service = Service::findOrFail($message->service);
                $message->serviceName = $service->service_name;
            } else {
                $message->serviceName = 'Service not specified'; // Handle case where service_id is null or invalid
            }

            // Prepare data to pass to the view
            $data = [
                'message' => $message,
                'info' => $message->replies->isEmpty() ? 'There are no replies for this message.' : null,
            ];

            // Load the view with the data
            return view('dashboard.pages.replies', $data);

        } catch (\Exception $e) {
            // Log the error and return an error view
            Log::error('Failed to fetch message and replies: ' . $e->getMessage());

            $data = [
                'error' => 'Failed to fetch message and replies',
            ];

            return view('dashboard.pages.replies', $data);
        }
    }

    /**
     * Store a reply for a specific message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeReply(Request $request)
    {
        $validated = $request->validate([
            'message_id' => 'required|exists:messages,id',
            'reply_message' => 'required|string',
            // Add additional validation rules as needed
        ]);

        try {
            // Find the message
            $message = Message::findOrFail($validated['message_id']);

            // Create a new reply
            $reply = $message->replies()->create([
                'message' => $validated['reply_message'],
                'status' => 'sent', // Assuming you set a default status or it's handled elsewhere
            ]);

            // Send email notification
            $emailSent = false;
            try {
                Mail::to($message->email)->send(new ReplyNotification($message, $reply));
                $emailSent = true;
            } catch (\Exception $e) {
                Log::error('Failed to send email notification for message ID ' . $message->id . ': ' . $e->getMessage());
            }

            // Update confirmation email sent status
            $reply->confirmation_email_sent = $emailSent;
            $reply->save();

            Log::info('Reply stored successfully and email sent for message ID: ' . $message->id);

            // Prepare JSON response
            return response()->json([
                'emailStatus' => $emailSent,
                'emailStatusMessage' => $emailSent ? 'Email sent successfully.' : 'Failed to send email notification.',
                'replyStatus' => $reply->status,
                'replyStatusMessage' => 'Reply stored successfully.',
            ], 200);

        } catch (\Exception $e) {
            // Log the error
            Log::error('Failed to store reply or send email notification: ' . $e->getMessage());

            // Return error JSON response
            return response()->json([
                'emailStatus' => false,
                'emailStatusMessage' => 'Failed to send email notification.',
                'replyStatus' => 'error',
                'replyStatusMessage' => 'Failed to store reply or send email notification.',
            ], 500);
        }
    }
}
