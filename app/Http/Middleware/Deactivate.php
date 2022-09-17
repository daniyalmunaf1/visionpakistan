<?php

namespace App\Http\Middleware;

use App\Models\DeactivateDays;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Deactivate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $deactivate = Auth::user()->deactivate;
        $_status = DeactivateDays::where('id',1)->first();
        $status = $_status->status;
        // dd($status);

        if($status=='enabled')
        {
            if($deactivate==0)
            {
                return $next($request);
            }
            return redirect()->route('user.deactivate');
        }

        return $next($request);

    }
}
