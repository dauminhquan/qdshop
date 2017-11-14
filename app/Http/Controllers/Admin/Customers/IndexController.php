<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Model\Customers;
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
    private $customers;
    public function __construct()
    {
        $this->customers = new Customers();
    }

    public function index(Request $request)
    {
        $check = false;
        if($request->has('block'))
        {
            $id = (int)$request->input('block');

            if($this->customers->find($id))
            {
                $this->customers->update_id($id,['block'=>1]);
                $check = true;
            }
        }
        if($request->has('unblock'))
        {

            $id = (int)$request->input('unblock');

            if($this->customers->find($id))
            {
                $this->customers->update_id($id,['block'=>0]);
                $check = true;
            }
        }
        $this->customers = new Customers();
        $data = $this->customers->getAll(null,null,['id','avatar','first_name','last_name','address',
            'email_address','business_phone']);
    	return view('admin/customers/index',['data' => $data,'check' => $check]);
    }
    
}