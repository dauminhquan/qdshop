<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Model\Customers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $customers;
    public function __construct()
    {
        $this->customers = new Customers();
    }

    public function index(Request $request)
    {
        if($request->has('id')) {
            $id = (int)$request->input('id');
            $all_invoice = $this->customers->getAll_invoice($request);
            $leninvoice_new = DB::table('orders')->where('orders.customer_id','=',$id)
                ->join('invoices','invoices.order_id','=','orders.id')->where('invoices.status_id','=',0)->select(DB::raw('COUNT(invoices.id) as len'))->get();

            $data = $this->customers->getOne_column('id', '=', $id);
            return view('admin/customers/profile',['data' => $data[0],'all_invoice' => $all_invoice,'len' => $leninvoice_new[0]]);
        }
    }
    public function post_index(Request $request)
    {
        $id = (int)$request->input('id');
        $update = new \App\Http\Controllers\Api\Customers\IndexController();
        $check = $update->update_infor_customer($request);
        $leninvoice_new = DB::table('orders')->where('orders.customer_id','=',$id)
            ->join('invoices','invoices.order_id','=','orders.id')->where('invoices.status_id','=',0)->select(DB::raw('COUNT(invoices.id) as len'))->get();

        $all_invoice = $this->customers->getAll_invoice($request);

        $data = $this->customers->getOne_column('id', '=', $id);
        return view('admin/customers/profile',['data' => $data[0],'all_invoice' => $all_invoice,'check'=>$check,'len' => $leninvoice_new[0]]);
    }

}