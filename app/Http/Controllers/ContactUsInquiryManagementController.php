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
                    $relatedService = Service::findOrFail($message->service);
                    $message->serviceName = $relatedService->service_name;
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
            $messageWithReplies = Message::with('replies')->findOrFail($id);

            // Check if a service is associated with the message
            if ($messageWithReplies->service) {
                // Find the related service based on $message->service (assuming it's service_id)
                $relatedService = Service::findOrFail($messageWithReplies->service);
                $messageWithReplies->serviceName = $relatedService->service_name;
            } else {
                $messageWithReplies->serviceName = 'Service not specified'; // Handle case where service_id is null or invalid
            }

            // Prepare data to pass to the view
            $data = [
                'message' => $messageWithReplies,
                'info' => $messageWithReplies->replies->isEmpty() ? 'There are no replies for this message.' : null,
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
        $validatedData = $request->validate([
            'message_id' => 'required|exists:messages,id',
            'reply_message' => 'required|string',
            'status' => 'required|string'
        ]);
    
        try {
            // Find the message
            $targetMessage = Message::findOrFail($validatedData['message_id']);
    
            // Create a new reply
            $newReply = $targetMessage->replies()->create([
                'message' => $validatedData['reply_message'],
                'status' => $validatedData['status'], // Ensure status is saved
            ]);
    
            // Send email notification
            $isEmailSent = false;
            try {
                Mail::to($targetMessage->email)->send(new ReplyNotification($targetMessage, $newReply));
                $isEmailSent = true;
            } catch (\Exception $e) {
                Log::error('Failed to send email notification for message ID ' . $targetMessage->id . ': ' . $e->getMessage());
            }
    
            // Update confirmation email sent status
            $newReply->confirmation_email_sent = $isEmailSent;
            $newReply->save();
    
            Log::info('Reply stored successfully and email sent for message ID: ' . $targetMessage->id);
    
            // Prepare JSON response
            return response()->json([
                'emailStatus' => $isEmailSent,
                'emailStatusMessage' => $isEmailSent ? 'Email sent successfully.' : 'Failed to send email notification.',
                'replyStatus' => true,
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
