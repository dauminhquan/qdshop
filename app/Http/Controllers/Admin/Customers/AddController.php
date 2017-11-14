<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Model\Customers;
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
    private $customers;
    public function __construct()
    {
        $this->customers = new Customers();
    }

    public function index()
    {
    	return view('admin/customers/add');
    }
    public function post_index(Request $request)
    {
        $success = new \App\Http\Controllers\Api\Customers\IndexController();
        $success = $success->insert_new_customer($request);
        return view('admin/customers/add',['success' => $success]);
    }
    
}