<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 02/11/2017
 * Time: 8:45 CH
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Exception\Exception;

class Database extends Model
{
    protected $db_table;
    // lay tat du lieu
    function getAll($name_column = null,$toantu = null,$value = null,$array_column_get = null)
    {
        try{
            if($name_column == null || $value == null)
            {
                if($array_column_get == null)
                {
                    return $this->db_table->get();
                }
                return $this->db_table->select($array_column_get)->get();
            }
            if($array_column_get == null)
            {
                return $this->db_table->where($name_column,$toantu,$value)->get();
            }
            return $this->db_table->where($name_column,$toantu,$value)->select($array_column_get)->get();
        }catch (Exception $exception)
        {
            return ['message' => $exception->getMessage(),'status' => 'false'];
        }
    }
    //chon du lieu theo cac cot
    function getOne_column($name_column,$toantu,$value,$array_column_get = null)
    {
        try{
            if($array_column_get == null)
            {
                return $this->db_table->select()->where($name_column,$value)->get();
            }
            return $this->db_table->select($array_column_get)->where($name_column,$toantu,$value)->get();
        }catch (Exception $exception)
        {
            return ['messenger' => $exception->getMessage(),'status' => 'false'];
        }

    }
    //update du lieu theo id
    function update_id($id,$array_data_update)
    {
        try{
            $this->db_table->where('id',(int)$id)->update($array_data_update);
            return true;
        }catch (Exception $exception)
        {
            return ['messenger' => $exception->getMessage(),'status' => 'false'];
        }

    }
    function update_where($cot,$toantu,$giatri,$array_data_update)
    {
        try{
            $this->db_table->where($cot,$toantu,$giatri)->update($array_data_update);
            return true;
        }catch (Exception $exception)
        {
            return ['messenger' => $exception->getMessage(),'status' => 'false'];
        }

    }
    function delete_where($cot,$toantu,$giatri)
    {
        try{
            $this->db_table->where($cot,$toantu,$giatri)->delete();
            return true;
        }catch (Exception $exception)
        {
            return ['messenger' => $exception->getMessage(),'status' => 'false'];
        }
    }

   // them moi du lieu
    function insert($array_data)
    {
        try {
            $this->db_table->insert($array_data);

            return true;
        } catch (Exception $exception) {
            return ['messenger' => $exception->getMessage(), 'status' => 'false'];
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
}