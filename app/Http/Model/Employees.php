<?php
/**
 *
 */
namespace App\Http\Model;
use Illuminate\Support\Facades\DB;

class Employees extends Database
{

    function __construct()
    {
        $this->table = 'employees';
        $this->db_table = DB::table('employees');
    }
    public function getAllPrivileges($id)
    {
        return  DB::table('employee_privileges')->where('employee_privileges.employee_id','=',(int)$id)->join('privileges','privileges.id','=',
            'employee_privileges.privilege_id')->select('privilege_id','privilege_name')->get();

    }
}