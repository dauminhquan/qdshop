<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 07/11/2017
 * Time: 3:01 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Products extends Database
{
    public function __construct()
    {
        $this->table = 'products';
        $this->db_table = DB::table('products');
    }
    public function getAll($name_column = null, $toantu = null, $value = null, $array_column_get = null)
    {
        try{
            if($name_column == null || $value == null)
            {
                if($array_column_get == null)
                {
                    return $this->db_table->leftJoin('types','types.id','=','products.type_id')->leftJoin('groups','groups.id','=','types.group_id')->select('products.*','groups.name_group','types.name_type')->get();
                }
                return $this->db_table->leftJoin('types','types.id','=','products.type_id')->leftJoin('groups','groups.id','=','types.group_id')->select($array_column_get)->get();
            }
            if($array_column_get == null)
            {
                return $this->db_table->where($name_column,$toantu,$value)->leftJoin('types','types.id','=','products.type_id')->leftJoin('groups','groups.id','=','types.group_id')->select('products.*','groups.name_group','types.name_type')->get();
            }
            return $this->db_table->where($name_column,$toantu,$value)->leftJoin('types','types.id','=','products.type_id')->leftJoin('groups','groups.id','=','types.group_id')->select($array_column_get)->get();
        }catch (Exception $exception)
        {
            return ['message' => $exception->getMessage(),'status' => 'false'];
        }
    }
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
    public function getAllColors($id)
    {
        return DB::table('product_colors')->where('product_colors.product_id','=',$id)->join('colors','colors.id','=','product_colors.color_id')->select('colors.name_color')->get();
    }
    public function getAllSize($id)
    {
        return DB::table('product_sizes')->where('product_sizes.product_id','=',$id)->join('sizes','sizes.id','=','product_sizes.size_id')->select('sizes.name_size')->get();
    }
    public function getAllImages($id)
    {
        return DB::table('images')->where('images.product_id','=',$id)->select(['images.link','images.id'])->get();

    }
}