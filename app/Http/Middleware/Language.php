<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Language
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
        if (!in_array($request->locale, config('translatable.locales'))) {
            $base = url()->to('');
            $path = str_replace($base, '', $request->fullUrl());
            return redirect()->to($base . '/' . config('app.locale') . $path);
        }

        app()->setLocale($request->locale);

        URL::defaults(['locale' => $request->locale]);

        return $next($request);
    }
}
