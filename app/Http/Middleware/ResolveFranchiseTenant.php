<?php

namespace App\Http\Middleware;

use App\Models\Franchise;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Request;

class ResolveFranchiseTenant
{
    public function handle(Request $request, Closure $next)
    {
        // Example: assume tenant is passed in route like /franchise/{franchise}
        // OR resolve it however your app determines the current franchise
        $franchiseId = $request->route('franchise') ?? session('franchise_id');

        if ($franchiseId) {
            $franchise = Franchise::query()->find($franchiseId);

            if ($franchise) {
                Filament::setTenant($franchise);
            }
        }

        return $next($request);
    }
}
