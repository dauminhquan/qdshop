<?php

namespace App\Http\Controllers\Admin\Invoices;

use App\Http\Model\Customers;
use App\Http\Model\Orders;
use App\Http\Model\Shippers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProfileController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $order;
    private $customer;
    private $shipper;
    public function __construct()
    {
        $this->order = new Orders();
        $this->customer = new Customers();
        $this->shipper = new  Shippers();
    }

    public function index(Request $request)
    {
        if($request->has('id'))
        {
            $id_order = (int)$request->input('id');
            if($this->order->find($id_order))
            {
                $data_orders = $this->order->get_profile_order($id_order);
                $data_order_details = $data_orders['data_order_details'];
                $data_orders = $data_orders['data_orders'];
                $data_shippers = $this->shipper->getAll();
                return view('admin/invoices/profile',['data_orders' => $data_orders,'data_order_details' => $data_order_details,'shippers'=>$data_shippers]);
            }
        }
    	return response()->redirectToRoute('admin/invoices');
    }
    public function print_invoice()
    {
        return view('admin/invoices/print_invoice');
    }
    
}