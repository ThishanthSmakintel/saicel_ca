<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.home', [
            'sseVisitorCountUrl' => route('sse.visitor-count'),
            'sseMostVisitedPagesUrl' => route('sse.most-visited-pages'),
            'sseMostVisitedProductsUrl' => route('sse.most-visited-products'),
        ]);
    }
}
