<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 08/11/2017
 * Time: 12:51 SA
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Suppliers extends  Database
{
    public function __construct(array $attributes = [])
    {
        $this->db_table = DB::table('suppliers');
        $this->table = 'suppliers';
    }
}