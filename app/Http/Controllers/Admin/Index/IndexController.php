<?php

namespace App\Http\Controllers\Admin\Index;

use App\Http\Model\Employees;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Invoices;
use App\Http\Model\OrdersStatus;

//use Illuminate\Http\Response;
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
        return view('admin/index/index');
    }

}