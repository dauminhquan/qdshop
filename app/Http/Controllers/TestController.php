<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function __invoke()
    {
    	
    }
    public function index()
    {
    	echo 'xinchao';
    	die();
    }
    public function store(Request $request)
    {
        $name = $request->name;

        //
    }
}