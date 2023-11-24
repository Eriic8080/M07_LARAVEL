<?php
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Symfony\Component\HttpFoundation\Response;

    class AdminDatabaseMiddleware
    {   /*

        @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation)

        */
    
        public function handle(Request $request,Closure $next):Response
        {
            return $next($request);
        }
    
    }