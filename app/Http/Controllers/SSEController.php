<?Php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SSEController extends Controller
{
    public function sendVisitorCount(Request $request)
    {
        try {
            $visitorCount = DB::table('user_activities')->count();
            return response()->json(['visitorCount' => $visitorCount]);
        } catch (\Exception $e) {
            Log::error('Error occurred in sendVisitorCount:', ['exception' => $e]);
            return response()->json(['error' => 'Failed to fetch visitor count', 'exception' => $e->getMessage()], 500);
        }
    }

    public function readMostVisitedPages(Request $request)
    {
        try {
            $mostVisitedPages = DB::table('user_activities')
                ->select('page_visited', DB::raw('count(*) as visits'))
                ->groupBy('page_visited')
                ->orderByDesc('visits')
                ->take(5)
                ->get();

            return response()->json(['mostVisitedPages' => $mostVisitedPages]);
        } catch (\Exception $e) {
            Log::error('Error occurred in readMostVisitedPages:', ['exception' => $e]);
            return response()->json(['error' => 'Failed to fetch most visited pages', 'exception' => $e->getMessage()], 500);
        }
    }

    public function productVisitStatus(Request $request)
    {
        try {

            $productVisitStatus = DB::table('products')
                ->leftJoin('product_visits', 'products.id', '=', 'product_visits.product_id')
                ->select('products.id', 'products.name', DB::raw('COUNT(product_visits.id) AS visit_status'))
                ->groupBy('products.id', 'products.name')
                ->orderByDesc('visit_status')
                ->get();

            return response()->json(['productVisitStatus' => $productVisitStatus]);
        } catch (\Exception $e) {
            Log::error('Error occurred in productVisitStatus:', ['exception' => $e]);
            return response()->json(['error' => 'Failed to fetch product visit status', 'exception' => $e->getMessage()], 500);
        }
    }
}