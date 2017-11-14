<?php

namespace App\Http\Controllers\Home\Mens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    
    public function index()
    {
    	
    	return view('home/mens/index');
    }
    
    
}