<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 13/11/2017
 * Time: 1:08 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Shippers extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'shippers';
        $this->db_table = DB::table('shippers');
    }
}