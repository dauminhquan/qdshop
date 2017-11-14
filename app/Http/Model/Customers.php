<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 02/11/2017
 * Time: 7:34 CH
 */

namespace App\Http\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class Customers extends Database
{
    public function __construct()
    {
        $this->table = 'customers';
        $this->db_table = DB::table('customers');
    }
    public function getAll_invoice(Request $request)
    {
        $id = (int)$request->input('id');
        // nguoi duyet,tinh trang,thoi gian,tên sản phẩm,id đơn hàng

        return DB::table('orders')->where('orders.customer_id',$id)
            ->join('invoices','invoices.order_id','=','orders.id')
            ->join('orders_status','orders_status.id','=','invoices.status_id')
            ->orderBy('invoices.invoice_date','DESC')
            ->select('invoices.*','orders_status.status_name')->paginate(50);

    }

}