<?php

namespace App\Http\Controllers\fornt;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    // this middleware on all controller is it diffrent of middleware on route
    public function __construct()
    {
        // if you went exccept any function of this 
        $this -> middleware('auth')->except('showname');
        // now this function is work without middleware 
        
    }
    public function showname(){
        echo "hossam harraz";
    }

    public function store(){
        echo "hossam harraz";
    }
    
    public function edit(){
        echo "hossam harraz";
    }
}
