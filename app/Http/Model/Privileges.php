<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 05/11/2017
 * Time: 12:42 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Privileges extends Database
{
    public function __construct()
    {
      $this->table = 'privileges';
      $this->db_table = DB::table('privileges');
    }
}