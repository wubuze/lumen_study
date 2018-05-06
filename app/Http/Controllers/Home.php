<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\http\Request;

class Home extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'home']]);

    }

    //
    public function index()
    {
        
        return 'index';
    }


    public function home()
    {
       
        return 'home';
    }

    public function user(Request $req)
    {

        return $req->user();
    }
}
