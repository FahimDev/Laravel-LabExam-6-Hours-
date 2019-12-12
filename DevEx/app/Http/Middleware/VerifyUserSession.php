<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($req, Closure $next)
    {
        $admin=$req->session()->get('name');
        $type=$req->session()->get('type');
        if(empty($admin)){
            
            return redirect()->route('login');
        }
        else{
            if($type == 1)
            {
                return $next($req);
            }else{
                echo "You Are not System Admin";
            }
            
        }
       
    }
}
