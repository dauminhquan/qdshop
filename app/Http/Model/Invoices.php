<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 02/11/2017
 * Time: 8:41 CH
 */

namespace App\Http\Model;
use Illuminate\Support\Facades\DB;

class Invoices extends Database
{
    public function __construct()
    {
        $this->table = 'invoices';
        $this->db_table = DB::table('invoices');
    }
    // lay tat ca don hang

    function getAll($name_column = null,$toantu = null,$value = null,$array_column_get = null)
    {
        try{
            if($name_column == null)
            {

                if($array_column_get == null)
                {
                    return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id') ->join('orders','orders.id','=','invoices.order_id')
                        ->join('customers','orders.customer_id','=','customers.id')
                        ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name')->orderBy('invoice_date','DESC')->paginate(24);
                }
                return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id') ->join('orders','orders.id','=','invoices.order_id')
                    ->join('customers','orders.customer_id','=','customers.id')
                    ->select($array_column_get)->orderBy('invoice_date','DESC')->paginate(24);
            }
            if($array_column_get == null)
            {

                return $this->db_table->join('orders_status',function ($join) use ($name_column,$toantu,$value) {
                    $join->on('invoices.status_id', '=', 'orders_status.id');}) ->join('orders','orders.id','=','invoices.order_id')
                    ->join('customers','orders.customer_id','=','customers.id')
                    ->where(DB::raw($name_column), $toantu, $value)
                    ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name')
                    ->orderBy('invoice_date','DESC')
                    ->paginate(24);

            }



            return $this->db_table->join('orders_status',function ($join) use ($name_column,$toantu,$value) {
                $join
                    ->on('invoices.status_id', '=', 'orders_status.id')
                    ;
            })->join('orders','orders.id','=','invoices.order_id')
                ->join('customers','orders.customer_id','=','customers.id')->where($name_column, $toantu, $value)
                ->select($array_column_get)
                ->orderBy('invoice_date','DESC')
                ->paginate(24);
        }catch (Exception $exception)
        {
            return ['message' => $exception->getMessage(),'status' => 'false'];
        }
    }

    function getAll_price($min = null,$max = null,$type = 'DESC',$array_column_get = null)
    {
        try{
            if($min == null || $max == null)
            {
                if($type == 'DESC')
                {
                    if($array_column_get == null)
                    {
                        return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')->join('orders','orders.id','=','invoices.order_id')
                            ->join('customers','orders.customer_id','=','customers.id')
                            ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name',DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum'))
                            ->orderBy('price_sum','DESC')->paginate(24);
                    }
                    return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')->join('orders','orders.id','=','invoices.order_id')
                        ->join('customers','orders.customer_id','=','customers.id')->select($array_column_get,DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum'))->orderBy('price_sum','DESC')->paginate(24);
                }



                if($array_column_get == null)
                {
                    return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')->join('orders','orders.id','=','invoices.order_id')
                        ->join('customers','orders.customer_id','=','customers.id')


                        ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name',
                            DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum'))


                        ->orderBy('price_sum',$type)->paginate(24);
                }
                return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')->join('orders','orders.id','=','invoices.order_id')
                    ->join('customers','orders.customer_id','=','customers.id')->select(
                        $array_column_get,
                        DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum')
                    )->orderBy('price_sum',$type)->paginate(24);
            }
            // khong chon cot nao va co min va max
            if($min > $max)
            {
                $pt = $min;
                $min = $max;
                $max = $pt;
            }
            if($array_column_get == null)
            {
                return $this->db_table
                    ->join('orders_status',function ($join) use ($min,$max){
                    $join
                        ->on('invoices.status_id','=','orders_status.id')
                        ->whereBetween(DB::raw('invoices.tax + invoices.shipping + invoices.amount_due'),[$min,$max]);
                })->join('orders','orders.id','=','invoices.order_id')
                    ->join('customers','orders.customer_id','=','customers.id')
                    ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name',
                        DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum'))
                        ->orderBy('price_sum',$type)->paginate(24);
            }
            return $this->db_table
                ->join('orders_status',function ($join) use ($min,$max){
                $join
                    ->on('invoices.status_id','=','orders_status.id')
                    ->whereBetween(DB::raw('invoices.tax + invoices.shipping + invoices.amount_due'),[$min,$max]);
            })->join('orders','orders.id','=','invoices.order_id')
                ->join('customers','orders.customer_id','=','customers.id')
                ->select($array_column_get,DB::raw('(invoices.tax + invoices.shipping + invoices.amount_due) as price_sum'))->orderBy('price_sum',$type)->paginate(24);
        }catch (Exception $exception)
        {
            return ['message' => $exception->getMessage(),'status' => 'false'];
        }
    }

    /**
     * @param array|null $array_roler
     * @param $
     */


    public function getAll_multi_and(array $array_roler, $array_column_get = null)
    {
        if($array_column_get == null)
        {
            return $this->db_table->join('orders_status',function ($join) use ($array_roler) {
                $join
                    ->on('invoices.status_id', '=', 'orders_status.id')
                    ->where($array_roler);
            }) ->join('orders','orders.id','=','invoices.order_id')
                ->join('customers','orders.customer_id','=','customers.id')
                ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name')
                ->orderBy('invoice_date','DESC')
                ->paginate(24);
        }
        return $this->db_table->join('orders_status',function ($join) use ($array_roler) {
            $join
                ->on('invoices.status_id', '=', 'orders_status.id')
                ->where($array_roler);
        })
            ->select($array_column_get)
            ->orderBy('invoice_date','DESC')
            ->paginate(24);
    }


    public function getAll_sort_name($type='DESC')
    {
        if(strtoupper($type) !='DESC')
        {
            return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')
                ->join('orders','orders.id','=','invoices.order_id')
                ->join('customers','orders.customer_id','=','customers.id')
                ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name')->orderBy(DB::raw('CONCAT(first_name,\' \',last_name)'),'ASC')->paginate(24);

        }
        return $this->db_table->join('orders_status','invoices.status_id','=','orders_status.id')
            ->join('orders','orders.id','=','invoices.order_id')
            ->join('customers','orders.customer_id','=','customers.id')
            ->select('invoices.*','orders_status.status_name','customers.first_name','customers.last_name')->orderBy(DB::raw('CONCAT(first_name,\' \',last_name)'),$type)->paginate(24);

    }


    public function getAll_multi_or(array $array_roler, $array_column_get = null)
    {
        if($array_column_get == null)
        {
            return $this->db_table->join('orders_status',function ($join) use ($array_roler) {
            $join
                ->on('invoices.status_id', '=', 'orders_status.id')
                ->where(function ($query) use ($array_roler){
                    foreach ($array_roler as $item)
                    {
                        $query->orWhere($item[0],$item[1],$item[2]);
                    }
                });
        })
            ->select('invoices.*','orders_status.status_name')
            ->orderBy('invoice_date','DESC')
            ->paginate(24);
        }
        return $this->db_table->join('orders_status',function ($join) use ($array_roler) {
            $join
                ->on('invoices.status_id', '=', 'orders_status.id')
                ->where(function ($query) use ($array_roler){
                    foreach ($array_roler as $item)
                    {
                        $query->orWhere($item[0],$item[1],$item[2]);
                    }
                });
        })
            ->select($array_column_get)
            ->orderBy('invoice_date','DESC')
            ->paginate(24);
    }
    public function getOne_orders_profile($id)
    {
        $orders = $this->getOrders($id);
        $orders_status = $this->getOrders_status($id);
        return [
            'orders' => $orders,
            'orders_status' => $orders_status
        ];
    }




    protected function getOrders($id)
    {

        if($this->find($id))
        {
            return $this->find($id)->orders;
        }
        return null;
    }
    protected function getOrders_status($id)
    {
        if($this->find($id))
        {
            return $this->find($id)->orders_status;
        }
        return null;

    }
    protected function orders_status()
    {
        return $this->belongsTo('App\Http\Model\OrdersStatus','status_id');
    }
    protected function orders()
    {
        return $this->belongsTo('App\Http\Model\Orders','order_id');
    }
}