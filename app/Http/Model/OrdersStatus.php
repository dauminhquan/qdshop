<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 03/11/2017
 * Time: 12:03 CH
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class OrdersStatus extends Model
{
    public function __construct()
    {
        $this->table = 'orders_status';
    }

}