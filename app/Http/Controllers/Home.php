<?php

namespace App\Http\Controllers;

use App\Http\Model\Test;

class Home extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index()
    {
        Test::create(
            ['username'=> 'wbz2', 'pwd'=> '123445']
        );
        return Test::get();
        return 'index';
    }
}
