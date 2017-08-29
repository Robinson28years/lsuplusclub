<?php namespace App\Http\Middleware;

use Closure;
use Request;

class CORS {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         * Get the response like normal.
         * When laravel cannot find the exact route it will try to find the same route for different methods
         * If the method is OPTION and there are other methods for the uri,
         * it will then return a 200 response with an Allow header
         *
         * Else it will throw an exception in which case the user is trying to do something it should not do.
         */
        $response = $next($request);

        // We only want the headers set for the api requests
        if ($request->segment(1) == 'api') {

            // Set the default headers for cors If you only want this for OPTION method put this in the if below
            $response->headers->set('Access-Control-Allow-Origin','*');
            $response->headers->set('Access-Control-Allow-Headers','Content-Type, X-Auth-Token, Origin, Authorization');

            // Set the allowed methods for the specific uri if the request method is OPTION
            if ($request->isMethod('options')) {

                $response->headers->set(
                    'Access-Control-Allow-Methods',
                    $response->headers->get('Allow')
                );
            }

        }

        return $response;
    }
}