<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 07/11/2017
 * Time: 11:48 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Types extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'types';
        $this->db_table = DB::table('types');
    }
    function getAll($name_column = null,$toantu = null,$value = null,$array_column_get = null)
    {
        try{
            if($name_column == null || $value == null)
            {
                if($array_column_get == null)
                {
                    return $this->db_table->join('groups','groups.id','=','types.group_id')->select('types.*','groups.name_group')->get();
                }
                return $this->db_table->join('groups','groups.id','=','types.group_id')->select($array_column_get)->get();
            }
            if($array_column_get == null)
            {
                return $this->db_table->where($name_column,$toantu,$value)->join('groups','groups.id','=','types.group_id')->select('types.*','groups.name_group')->get();
            }
            return $this->db_table->where($name_column,$toantu,$value)->join('groups','groups.id','=','types.group_id')->select($array_column_get)->get();
        }catch (Exception $exception)
        {
            return ['message' => $exception->getMessage(),'status' => 'false'];
        }
    }
    function getCountProduct($id = null)
    {
        if($id == null)
        {
            return $this->db_table->join('products','products.type_id','=','types.id')->groupBy('types.id')->select('types.id',DB::raw('count(products.id) as count'))->get();
        }
        return DB::table('products')->where('type_id','=',(int)$id)->count();
    }

}