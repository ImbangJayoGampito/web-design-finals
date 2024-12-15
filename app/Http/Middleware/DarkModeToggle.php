<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DarkModeToggle
{
    private static $darkModeCookie = 'dark_mode'; // Define your cookie name

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request has a toggle parameter
        if ($request->has('toggle_dark_mode')) {
            // Get the current value of the dark mode cookie
            $val = $request->cookie(self::$darkModeCookie);
            // Toggle the value between "light" and "dark"
            if (empty($val)) {

                // Set a default value if the cookie is empty

                $newVal = "dark"; // or "dark", depending on your preference

            } else {

                // Toggle the value between "light" and "dark"

                $newVal = $val === "light" ? "dark" : "light";
            }

            // Queue the cookie to be sent in the response
            Cookie::queue(Cookie::make(self::$darkModeCookie, $newVal, 600000));
        }

        return $next($request);
    }
}
