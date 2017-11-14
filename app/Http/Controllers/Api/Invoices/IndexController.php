<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 12/11/2017
 * Time: 5:33 CH
 */
namespace App\Http\Controllers\Api\Invoices;
use App\Http\Controllers\Controller;
use App\Http\Model\Colors;
use App\Http\Model\Customers;
use App\Http\Model\Invoices;
use App\Http\Model\Products;
use App\Http\Model\Sizes;
use App\Http\Model\Shippers;
use App\Http\Model\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected $invoices;
    protected $customers;
    protected $colors;
    protected $sizes;
    protected $products;
    protected $shippers;
    protected $orders;
    public function __construct()
    {
        $this->orders = new Orders();
        $this->invoices = new Invoices();
        $this->customers = new Customers();
        $this->colors = new Colors();
        $this->sizes = new Sizes();
        $this->products = new Products();
        $this->shippers = new Shippers();
    }
    public function add_invoice(Request $request)
    {
        $bat_buoc = ['customer_id','ship_name', 'ship_state_province', 'ship_wards', 'email_address', 'ship_business_phone',
        'ship_address', 'invoice'];
        if($this->invoices->checkIn($request,$bat_buoc))
        {
            $customer_id = (int)$request->input('customer_id');
            if($this->customers->find($customer_id))
            {
                $ship_name = $request->input('ship_name');
                $ship_state_province = $request->input('ship_state_province');
                $ship_wards = $request->input('ship_wards');
                $email_address = $request->input('email_address');
                $ship_business_phone = $request->input('ship_business_phone');
                $ship_address = $request->input('ship_address');
                $payment_type = $request->input('payment_type');
                $invoice= $request->input('invoice');
                $invoice = json_decode($invoice);
                $shipping_fee = 0;
                $taxes = 0;
                if($this->check_one($invoice))
                {
                    // tinh tong tien cua hoa don
                    $tong = 0;
                    if(count($invoice) == 0)
                    {
                        return ['sc' => false];
                    }
                    foreach ($invoice as $item)
                    {

                        $id_product = (int)$item->id;

                        $list_price = DB::table('products')->where('id','=',$id_product)->select('list_price','tax','price_ship','discount')->get();
                        $tax = (int) $list_price[0]->tax;
                        $price_ship = (int)$list_price[0]->price_ship;
                        $item->discount = $list_price[0]->discount;
                        $list_price = (int) $list_price[0]->list_price;
                        $item->unit_price = $list_price;
                        $len = (int)$item->len;
                        $shipping_fee +=$price_ship;
                        $taxes+= $tax;
                        $tong += $list_price*$len + $tax + $price_ship;
                    }
//                    return $invoice;



                    // tao order truoc
                    // order_details
                    // shipping_fee-> phi ship
                    // tinh tong tien cua hoa don
                    // gom co tien co ban+ tien ship
                    // tat ca cho vao invoices

                    DB::transaction(function () use ($ship_name,$ship_state_province,$ship_wards,$customer_id,$ship_business_phone,
                        $ship_address,$shipping_fee,$taxes,$payment_type,$invoice,$tong) {
                        $id_order = DB::table('orders')->insertGetId(['employee_id' => 1,'ship_name' => $ship_name,'ship_address' => $ship_address
                            ,'ship_state_province' => $ship_state_province,'shipping_fee' => $shipping_fee,'taxes' => $taxes,'payment_type'=>$payment_type
                            ,'customer_id' => $customer_id,'ship_wards'=>$ship_wards,'ship_business_phone' => $ship_business_phone]);
                        // them vao order_detals

                        $data_insert_order_detals = [];
                        for($i=0;$i<count($invoice);$i++)
                        {
                            $colors = '';
                            if(count($invoice[$i]->color) > 0)
                            {
                                foreach ($invoice[$i]->color as $item)
                                {
                                    $colors = $colors.';'.$item;
                                }
                            }
                            $sizes = '';
                            if(count($invoice[$i]->size) > 0)
                            {
                                foreach ($invoice[$i]->size as $item)
                                {
                                    $sizes = $sizes.';'.$item;
                                }
                            }

                            $data = ['order_id' => $id_order,'product_id' => $invoice[$i]->id,'quantity'=> $invoice[$i]->len,'unit_price' => $invoice[$i]->unit_price,
                            'discount' => $invoice[$i]->discount,'status_id' => 0,'sizes' => $sizes,'colors' => $colors,'notes' => $invoice[$i]->note];
                            array_push($data_insert_order_detals,$data);

                        }

                        DB::table('order_details')->insert($data_insert_order_detals);

                        $invoice_date = date('Y-m-d H:i:s');

                        DB::table('invoices')->insert(['order_id' => $id_order,'invoice_date' => $invoice_date,'tax'=>$taxes,'shipping' => $shipping_fee
                            ,'amount_due' => $tong,'status_id'=> 0,'payment_type'=>$payment_type]);

                    });
                    return ['sc' => true];
                }
            }

        }
        return ['sc' => false];
    }
    public function access_invoice(Request $request)
    {
        if($request->has('orders_id'))
        {
        
            $id_order = (int)$request->input('orders_id');
            if($request->has('shipper_id'))
            {

                $id_shipper = (int) $request->input('shipper_id');
                if($this->orders->find($id_order) && $this->shippers->find($id_shipper))
                {
                    
                    DB::transaction(function() use ($id_order,$id_shipper,$request){

                        $this->orders->update_id($id_order,['shipper_id' => $id_shipper,'shipped_date' => date('Y-m-d'),
                            'notes' => $request->input('note')]);

                        $this->invoices->update_where('order_id','=',$id_order,['due_date' => $request->input('due_date'),'status_id' => 1]);
                    });
                   
                    return ['sc' => true];
                }
            }
        }
        return ['sc' => false];
    }
    public function cancel_invoice(Request $request)
    {

        if($request->has('orders_id'))
        {

            $id = (int)$request->input('orders_id');
            if($this->orders->find($id))
            {

                $this->invoices->update_where('order_id','=',$id,['status_id'=>3]);
                return ['sc' => true];
            }
        }
        return ['sc' => false];
    }
    public function delete_invoice(Request $request)
    {

        if($request->has('orders_id'))
        {

            $id = (int)$request->input('orders_id');
            if($this->orders->find($id))
            {
                $this->orders->delete_where('id','=',$id);
                return ['sc' => true];
            }
        }
        return ['sc' => false];
    }
    private function check_one($array)
    {
        //check color
        foreach ($array as $item)
        {
            $color = $item->color;
            if(!$this->check_color($color))
            {
                return false;
            }
            $size = $item->size;
            if(!$this->check_size($size))
            {

                return false;
            }
        }
        return true;
    }
    private  function check_color($array){
        if(count($array) > 0)
        {
            foreach ($array as $item)
            {
                if(!$this->colors->find((int)$item))
                {
                    return false;
                }

            }
        }

        return true;
    }
    private  function check_size($array){
        if(count($array) > 0)
        {
            foreach ($array as $item)
            {

                if(!$this->sizes->find((int)$item))
                {

                    return false;
                }

            }
        }

        return true;
    }

}