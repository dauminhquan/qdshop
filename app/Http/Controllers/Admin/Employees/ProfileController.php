<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Model\Privileges;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Employees;
class ProfileController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $employees;
    public function __construct(){
        $this->employees = new Employees();
    }
    public function index(Request $request)
    {
        $id = (int)$request->input('id');
        $privileges = $this->employees->getAllPrivileges($id);
        $update = new \App\Http\Controllers\Api\Employees\IndexController();
        $update->update_infor_employees($request);
        $Privileges = new Privileges();
        $allprivilege = $Privileges->getAll();

        $data = $this->employees->getAll('id','=',$id);
        return view('admin/employees/profile',['data' => $data[0],'allprivilege' => $allprivilege,'privileges' => $privileges]);
    }
    public function post_index(Request $request)
    {
        $id = (int)$request->input('id');
        $update = new \App\Http\Controllers\Api\Employees\IndexController();
        // print_r($request->toArray());
        // die();
        $check = $update->update_infor_employees($request);

        //lay ta ca cac quyen
        $Privileges = new Privileges();
        $allprivilege = $Privileges->getAll();
        $privileges = $this->employees->getAllPrivileges($id);
        $data = $this->employees->getAll('id','=',$id);
        return view('admin/employees/profile',['data' => $data[0],'allprivilege' => $allprivilege,'privileges' => $privileges,'check' => $check]);
    }
    public function download(Request $request)
    {
        $id = (int) $request->input('id');
        $tv = new \App\Http\Controllers\Api\Employees\IndexController();
        return $tv->getAttachments($id);
    }
    
}