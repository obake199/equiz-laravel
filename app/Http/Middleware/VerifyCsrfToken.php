<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];

    public function handle($request, \Closure $next) {
        if ($request->_token) return;
        $request->request->add(['_token'=>session()->token()]);
        return parent::handle($request, $next);
    }
}
