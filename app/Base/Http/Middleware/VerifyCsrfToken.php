<?php

namespace App\Base\Http\Middleware;

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
        'http://localhost:8000/job', //This is the url that I dont want Csrf for postman.
        'http://localhost:8000/job/store', //This is the url that I dont want Csrf for postman.
        'http://localhost:8000/job/update/1', //This is the url that I dont want Csrf for postman.
        'http://localhost:8000/job/delete/1' //This is the url that I dont want Csrf for postman.
    ];
}
