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
        // defire url where we dont pass the token
        'addStudent',
        'student',
        'deleteStudent',
        'updateStudent',
        'studentId',
        'studentName',
        'data',
    
    ];
}
