<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackVisitorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Get the IP address of the visitor
        $ip = $request->ip();

        // Check if the request is coming from localhost
        if ($ip !== '127.0.0.1' && $ip !== '::1') {
            // Extract product ID from the request parameters or payload
            $productId = $request->input('product_id');

            // Check if the visitor's IP address exists in the database
            $visitor = DB::table('visitors')->where('ip_address', $ip)->first();

            if (!$visitor) {
                // If the visitor's IP address does not exist, add it to the database
                $visitorId = DB::table('visitors')->insertGetId([
                    'ip_address' => $ip,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else {
                $visitorId = $visitor->id;
            }

            // Log the user interaction with the product
            DB::table('product_interactions')->insert([
                'visitor_id' => $visitorId,
                'product_id' => $productId,
                'action' => 'viewed', // Assuming the user viewed the product
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return $next($request);
    }
}
