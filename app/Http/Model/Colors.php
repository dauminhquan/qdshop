<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 07/11/2017
 * Time: 11:34 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Colors extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'colors';
        $this->db_table = DB::table('colors');
    }
}