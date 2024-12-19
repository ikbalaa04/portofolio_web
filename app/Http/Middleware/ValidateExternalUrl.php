<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateExternalUrl
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
        // Periksa semua input URL di request
        $inputs = $request->all();

        foreach ($inputs as $key => $value) {
            // Validasi hanya untuk URL
            if (filter_var($value, FILTER_VALIDATE_URL)) {
                // Pastikan URL eksternal tidak dimodifikasi menjadi lokal
                if (strpos($value, config('app.url')) === 0) {
                    return response()->json([
                        'error' => 'Invalid URL detected. External URLs cannot be modified.'
                    ], 400);
                }
            }
        }

        return $next($request);
    }
}
