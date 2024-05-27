<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackVisitorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();


        if ($ip !== '127.0.0.1' && $ip !== '::1') {

            $visitorId = DB::table('visitors')->where('ip_address', $ip)->value('id');
            if (!$visitorId) {
                $visitorId = DB::table('visitors')->insertGetId([
                    'ip_address' => $ip,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }


            if ($request->route() && $request->route()->getName() === 'showThisProduct') {
                $productId = $request->route('id');


                DB::table('product_visits')->insert([
                    'visitor_id' => $visitorId,
                    'product_id' => $productId,
                    'ip_address' => $ip,
                    'visited_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else {

                DB::table('user_activities')->insert([
                    'visitor_id' => $visitorId,
                    'page_visited' => $request->path(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        return $next($request);
    }
}
