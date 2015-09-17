<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;

class ProfileFilter
{

    protected $guard; // to store injected guard

    public function __construct(Guard $guard){
        $this->guard = $guard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $profileID = $request->route('users');

        //(\Auth::user()->id != $profileID)    //using the facade we dont need the __construct function at the top
        if($this->guard->user()->id != $profileID){  //if login user is not the user in the route
            //kick them out
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
    }
}
