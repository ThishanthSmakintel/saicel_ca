<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
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
            // Log the error
            Log::error('Error in showServices method: ' . $e->getMessage());

            // Handle the error gracefully, maybe return a view with an error message
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
                'subject' => 'required|string|max:255',
                'service' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            // Ensure data types are strings
            $name = (string) $validatedData['name'];
            $email = (string) $validatedData['email'];
            $subject = (string) $validatedData['subject'];
            $service = (string) $validatedData['service'];
            $messageContent = (string) $validatedData['message'];

            // Log validated data
            // Log::info('Validated data:', [
            //     'name' => $name,
            //     'email' => $email,
            //     'subject' => $subject,
            //     'service' => $service,
            //     'message' => $messageContent,
            // ]);

            // Send email using Mailable
            Mail::to($email)->send(new ContactFormSubmitted(
                $name,
                $email,
                $subject,
                $service,
                $messageContent
            ));

            // Log success message
            Log::info('Message submitted successfully.');

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
