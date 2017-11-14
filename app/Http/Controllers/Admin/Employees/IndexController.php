<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Model\Employees;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class IndexController extends Controller
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
        $this->employees = new Employees();
    }

    public function index(Request $request)
    {
        try{
            if($request->has('unblock'))
            {
                $id_ =(int) $request->input('unblock');
                $this->employees->update_id($id_,['block' => 0]);
                $success = true;
                $this->employees = new Employees();
            }
            else if($request->has('block')){
                $id_ =(int) $request->input('block');
                $this->employees->update_id($id_,['block' => 1]);
                $success = true;
                $this->employees = new Employees();
            }
        }
        catch (Exception $exception)
        {
            $success = false;
        }
        $data = $this->employees->getAll(null,null,null,['id','first_name','last_name','address','job_title','business_phone','avatar','block']);

        if(isset($success))
        {
            return view('admin/employees/index',['data' => $data,'success' => $success]);
        }
        return view('admin/employees/index',['data' => $data]);

    }
    
}