<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * Returns 200 OK for the Docker healthcheck (`/up`).
 *
 * Laravel 11 ships this endpoint via `->withRouting(health: '/up')` in
 * bootstrap/app.php; older Laravel versions don't, so we wire it manually.
 * Using an invokable controller (not a closure) keeps `route:cache` happy.
 */
class HealthController extends Controller
{
    public function __invoke(): Response
    {
        return response('OK', 200);
    }
}
