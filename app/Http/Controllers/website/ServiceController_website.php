<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Message; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ServiceController_website extends Controller
{
    public function showServices()
    {
        try {
            Log::info('-------------------------------------------------------------------------');
            Log::info('Service Controller START: showServices');

            Log::info('Attempting to fetch services...');
            $services = Service::all();
            Log::info('Services fetched successfully.');

            Log::info('Service Controller END: showServices');
            Log::info('-------------------------------------------------------------------------');

            return view('contact-us.contact-us', ['services' => $services]);
        } catch (\Exception $e) {
            Log::error('Error in showServices method: ' . $e->getMessage());

            return view('error')->with('message', 'Failed to fetch services');
        }
    }

    public function submitMessage(Request $request)
    {
        try {
            Log::info('-------------------------------------------------------------------------');
            Log::info('Service Controller START: submitMessage');

            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'service' => 'required|exists:services,id',
                'message' => 'required|string',
            ]);

            // Extract validated data
            $name = $validatedData['name'];
            $email = $validatedData['email'];
            $subject = "Welcome to saicel.ca - Thank you for your inquiry";
            $serviceId = $validatedData['service'];
            $messageContent = $validatedData['message'];

            // Fetch the service based on ID
            
            $service = Service::findOrFail($serviceId);
            $serviceName = $service->service_name;

            // Send email using Mailable
            Mail::to($email)->send(new ContactFormSubmitted(
                $name,
                $email,
                $subject,
                $serviceName,
                $messageContent
            ));

            // Log success message
            Log::info('Message submitted successfully.');

            // Save message to messages table
            $message = new Message();
            $message->name = $name;
            $message->email = $email;
            $message->subject = $subject;
            $message->service = $serviceId;
            $message->message = $messageContent;
            $message->save();

            Log::info('Saved message to database.');

            Log::info('Service Controller END: submitMessage');
            Log::info('-------------------------------------------------------------------------');

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Message submitted successfully',
                'messageEmail' => $email,
            ]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in submitMessage method: ' . $e->getMessage());

            // Return a 500 Internal Server Error response
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit message',
            ]);
        }
    }
}
