<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 03/11/2017
 * Time: 5:23 CH
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class Orders extends Database
{
    public function __construct(array $attributes = [])
    {
        $this->table = 'orders';
        $this->db_table = DB::table('orders');
    }
    public function get_profile_order($id)
    {

        $data_orders = $this->db_table->where('orders.id','=',$id)->join('customers','orders.customer_id','=','customers.id')->join('invoices','invoices.order_id','=','orders.id')->join('orders_status','orders_status.id','=','invoices.status_id')->select('orders.*','customers.first_name','orders_status.status_name','invoices.status_id',
            'customers.last_name','customers.business_phone','customers.email_address','customers.avatar','invoices.tax','invoices.shipping','invoices.amount_due','invoices.due_date')->get()[0];


        $data_order_detail = DB::table('order_details')->where('order_details.order_id','=',$id)->join('products','products.id','=','order_details.product_id')->select('order_details.*','products.product_name','products.tax','products.price_ship')->get();

        return ['data_orders' => $data_orders,'data_order_details' => $data_order_detail];
    }
}