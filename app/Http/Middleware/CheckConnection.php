<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class CheckConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->dbConnected()) {
            Log::error('Database connection error: Database is not connected.');
            return response()->view('errors.database_connection_error', [], 503);
        } elseif (!$this->isConnected()) {
            Log::error('Internet connection error: Internet connection is not available.');
            return response()->view('errors.internet_connection_error', [], 503);
        }

        return $next($request);
    }

    /**
     * Check if there is an active internet connection.
     *
     * @return bool
     */
    protected function isConnected()
    {
        try {
            $connected = @fsockopen("8.8.8.8", 53); // Check connection to Google DNS

            if ($connected) {
                fclose($connected);
                return true;
            }

            return false;
        } catch (Exception $e) {
            Log::error('Internet connection check failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Check if the database connection is active.
     *
     * @return bool
     */
    protected function dbConnected()
    {
        try {
            DB::connection()->getPdo();
            return true;
        } catch (Exception $e) {
            Log::error('Database connection error: ' . $e->getMessage());
            return false;
        }
    }
}