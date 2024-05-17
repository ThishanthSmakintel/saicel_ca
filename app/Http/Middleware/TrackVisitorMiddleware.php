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
        if ($ip !== '127.0.0.1' && $ip !== '::1') {

            $visitor = DB::table('visitors')->where('ip_address', $ip)->first();

            if (!$visitor) {

                $visitorId = DB::table('visitors')->insertGetId([
                    'ip_address' => $ip,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else {
                $visitorId = $visitor->id;
            }

            // Log the user activity
            DB::table('user_activities')->insert([
                'visitor_id' => $visitorId,
                'page_visited' => $request->path(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return $next($request);
    }
}
