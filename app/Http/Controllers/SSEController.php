<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SSEController extends Controller
{
    public function sendVisitorCount(Request $request)
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        try {
            $visitorCount = DB::table('visitors')->count();
            echo "data: " . json_encode(['visitorCount' => $visitorCount]) . "\n\n";
            ob_flush();
            flush();
        } catch (\Exception $e) {
            Log::error('Error occurred in sendVisitorCount:', ['exception' => $e]);
        }

        sleep(5); // Simulate delay for testing purposes
    }

    public function sendMostVisitedPages(Request $request)
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        try {
            $mostVisitedPages = DB::table('user_activities')
                ->select('page_visited', DB::raw('count(*) as visits'))
                ->groupBy('page_visited')
                ->orderBy('visits', 'desc')
                ->take(5)
                ->get();

            echo "data: " . json_encode(['mostVisitedPages' => $mostVisitedPages]) . "\n\n";
            ob_flush();
            flush();
        } catch (\Exception $e) {
            Log::error('Error occurred in sendMostVisitedPages:', ['exception' => $e]);
        }

        sleep(5); // Simulate delay for testing purposes
    }

    public function sendMostVisitedProducts(Request $request)
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        try {
            $mostVisitedProducts = DB::table('product_visits')
                ->select('product_id', DB::raw('count(*) as visits'))
                ->groupBy('product_id')
                ->orderBy('visits', 'desc')
                ->take(5)
                ->get();

            echo "data: " . json_encode(['mostVisitedProducts' => $mostVisitedProducts]) . "\n\n";
            ob_flush();
            flush();
        } catch (\Exception $e) {
            Log::error('Error occurred in sendMostVisitedProducts:', ['exception' => $e]);
        }

        sleep(5); // Simulate delay for testing purposes
    }
}
