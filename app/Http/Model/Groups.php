<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 07/11/2017
 * Time: 11:50 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Groups extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'groups';
        $this->db_table = DB::table('groups');
    }
    public function getAll_group_type()
    {
        return $this->db_table->join('types','groups.id','=','types.group_id')->select('groups.name_group','types.*')->get();
    }
}