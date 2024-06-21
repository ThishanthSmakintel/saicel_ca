<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Service; // Import Service model
use Illuminate\Support\Facades\Log;

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
}
