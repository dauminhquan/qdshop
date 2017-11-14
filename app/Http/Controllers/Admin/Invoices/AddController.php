<?php

namespace App\Http\Controllers\Admin\Invoices;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AddController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    
    public function index()
    {
    	return view('admin/invoices/add');
    }
    
}