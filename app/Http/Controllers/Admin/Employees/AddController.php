<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Model\Privileges;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class AddController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $employees;
    public function __construct()
    {
        $this->employees = new \App\Http\Controllers\Api\Employees\IndexController();
    }

    public function index()
    {
        $all_quyen = new Privileges();
        $all_quyen = $all_quyen->getAll();
    	return view('admin/employees/add',['all_quyen' => $all_quyen]);
    }
    public function post_index(Request $request)
    {
        $all_quyen = new Privileges();
        $all_quyen = $all_quyen->getAll();
        try{
            $this->employees->insert_employees($request);
            return view('admin/employees/add',['all_quyen' => $all_quyen,'success' => true]);
        }catch (Exception $exception)
        {
            return view('admin/employees/add',['all_quyen' => $all_quyen,'success' => false]);
        }

    }

    
}