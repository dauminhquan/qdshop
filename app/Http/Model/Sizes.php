<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 07/11/2017
 * Time: 11:35 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Sizes extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'sizes';
        $this->db_table = DB::table('sizes');
    }
}