<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 04/11/2017
 * Time: 10:34 CH
 */

namespace App\Http\Controllers\Api\Employees;


use App\Http\Controllers\Controller;
use App\Http\Model\Employees;
use App\Http\Model\Privileges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    private $employees;
    public function __construct()
    {
        $this->employees = new Employees();
    }

    public function upload_avatar(Request $request)
    {
        if($request->hasFile('avatar') && $request->has('id') && $this->employees->find((int)$request->id) &&
            ($request->file('avatar')->getClientOriginalExtension() == 'jpg' ||
            $request->file('avatar')->getClientOriginalExtension() == 'png' ||
                $request->file('avatar')->getClientOriginalExtension() =='jpeg'))
        {
            $id =(int) $request->input('id');
            $url = route('home/index').'/images/employees/avatar/'.'avatar_'.$request->input('id').'.'.$request->file('avatar')->getClientOriginalExtension();
            $name = 'avatar_'.$request->input('id').'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move('images/employees/avatar',$name );
            $this->employees->update_id($id,['avatar' => $url]);
            return $url;
        }
        return false;
    }
    public function update_infor_employees(Request $request)
    {
        $check = false;
        if ($request->has('first_name') && $request->has('last_name')
            && $request->has('birth_day')
            && $request->has('CMT')
            && $request->has('email_address')
            && $request->has('business_phone')
            && $request->has('state_province')
            && $request->has('wards')
            && $request->has('address')
            && $request->has('permanent_address')
            && $request->has('notes')
            && $request->has('id')
            && $this->employees->find((int)$request->input('id'))
        ) {
            $id = (int)$request->input('id');
            $this->employees->update_id($id, [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'job_title' => $request->input('job_title'),
                'business_phone' => $request->input('business_phone'),
                'state_province' => $request->input('state_province'),
                'notes' => $request->input('notes'),
                'birth_day' => $request->input('birth_day'),
                'CMT' => $request->input('CMT'),
                'permanent_address' => $request->input('permanent_address'),
                'address' => $request->input('address'),
                'wards' => $request->input('wards')
            ]);
            if($request->hasFile('attachments'))
            {
                $url = 'file/attachments/'.'file_'.$request->input('email_address').'.'.$request->file('attachments')->getClientOriginalExtension();
                $name = 'file_'.$request->input('email_address').'.'.$request->file('attachments')->getClientOriginalExtension();
                $request->file('attachments')->move('file/attachments/',$name );
                $this->employees->update_id($id,['attachments'=>$url]);
            }
            return true;

        }
        if ($request->has('password') && $request->has('id') && $this->employees->find((int)$request->input('id'))) {
            $id = (int)$request->input('id');
            if ($request->input('password') == '' && $request->has('block')) {

                $this->employees->update_id((int)$request->input('id'), ['block' => 1]);
                // lay tat ca ten cua cac quyen
            } else {
                $this->employees->update_id((int)$request->input('id'), ['password' => Hash::make($request->input('password')), 'block' => 0]);
            }

            // xoa tat ca cac quyen ...
            DB::table('employee_privileges')->where('employee_id', '=', $id)->delete();
            //insert la
            if($request->has('privilege'))
            {
                foreach ($request->input('privilege') as $item) {
                    DB::table('employee_privileges')->insert(['employee_id' => $id, 'privilege_id' => (int)$item]);
                }
            }
            return true;
        }
        return false;
    }
    public function insert_employees(Request $request)
    {
        $bat_buoc = ['first_name','last_name','birth_day','CMT','business_phone','state_province','wards','address',
            'permanent_address','email_address','password'];
        $data = $request->toArray();
        unset($data['_token']);
        unset($data['passwordrepeat']);
        if(isset($data['block']))
        {

            $data['block'] = 1;
        }
        unset($data['attachments']);
        if($this->checkIn($request,$bat_buoc))
        {

            if($request->hasFile('attachments'))
            {

                $url = 'file/attachments/'.'file_'.$request->input('email_address').'.'.$request->file('attachments')->getClientOriginalExtension();

                $name = 'file_'.$request->input('email_address').'.'.$request->file('attachments')->getClientOriginalExtension();


                $request->file('attachments')->move('file/attachments/',$name );
                $data['attachments'] = $url;
            }
            $this->employees->insert($data);
        }
    }
    public function checkIn(Request $request,array $array)
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
    public function getAttachments($id)
    {
        $url = $this->employees->getOne_column('id','=',(int)$id)[0]->attachments;;

        return response()->download($url);
    }
}