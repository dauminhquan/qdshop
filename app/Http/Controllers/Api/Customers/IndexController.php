<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 06/11/2017
 * Time: 11:14 SA
 */

namespace App\Http\Controllers\Api\Customers;


use App\Http\Controllers\Controller;
use App\Http\Model\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    private $customers;
    public function __construct()
    {
        $this->customers = new Customers();
    }
    public function get_one_customer(Request $request)
    {
        if($request->has('id'))
        {
            $id =(int) $request->input('id');
            if($this->customers->find($id))
            {
               return $this->customers->getAll('id','=',$id,['first_name','last_name','email_address','business_phone',
            'state_province','wards','address']);
            }
        }
        return false;
        
    }
    public function get_all_customer()
    {
        return $this->customers->getAll(null,null,null,['first_name','last_name','id']);
    }
    public function upload_avatar(Request $request)
    {
        if($request->hasFile('avatar') && $request->has('id') && $this->customers->find((int)$request->id) &&
            ($request->file('avatar')->getClientOriginalExtension() == 'jpg' ||
                $request->file('avatar')->getClientOriginalExtension() == 'png' ||
                $request->file('avatar')->getClientOriginalExtension() =='jpeg'))
        {
            $id =(int) $request->input('id');
            $url = route('home/index').'/images/customers/avatar/'.'avatar_'.$request->input('id').'.'.$request->file('avatar')->getClientOriginalExtension();
            $name = 'avatar_'.$request->input('id').'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move('images/customers/avatar',$name );
            $this->customers->update_id($id,['avatar' => $url]);
            return $url;
        }
        return false;
    }
    public function update_infor_customer(Request $request)
    {
        $check = false;
        if ($request->has('first_name') && $request->has('last_name')
            && $request->has('business_phone')
            && $request->has('state_province')
            && $request->has('wards')
            && $request->has('address')
            && $request->has('notes')
            && $request->has('id')
            && $this->customers->find((int)$request->input('id'))
        ) {
            $id = (int)$request->input('id');
            $this->customers->update_id($id, [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'business_phone' => $request->input('business_phone'),
                'state_province' => $request->input('state_province'),
                'notes' => $request->input('notes'),
                'address' => $request->input('address'),
                'wards' => $request->input('wards')
            ]);
            if ($request->has('password') ) {
                $this->customers->update_id($id, ['password' => Hash::make($request->input('password'))]);
            }
            if ($request->has('block')) {

                $this->customers->update_id($id, ['block' => 1]);
                // lay tat ca ten cua cac quyen
            }
            else{
                $this->customers->update_id($id, ['block' => 0]);
            }
            return true;

        }
        return false;
    }
    public function insert_new_customer(Request $request)
    {
        $bat_buoc = ['first_name','last_name','business_phone','state_province','wards','address','email_address','password'];
        $data = $request->toArray();

        if(isset($data['_token']))
        {
            unset($data['_token']);

        }
        if( isset($data['passwordrepeat']))
        {
            unset($data['passwordrepeat']);
        }
        if($this->checkIn($request,$bat_buoc))
        {

            $this->customers->insert($data);
            return true;
        }
        return false;

    }
    private function checkIn(Request $request,array $array)
    {
        foreach ($array as $item)
        {
            if(!$request->has($item))
            {
                return false;
            }
        }
        return true;
    }

}