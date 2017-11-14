<?php

namespace App\Http\Controllers\Admin\Invoices;

use App\Http\Model\Invoices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $invoice;
    public function __construct()
    {
        $this->invoice = new Invoices();
    }

    public function index(Request $request)
    {
        $page = $request->input('page',1);
        if($request->has('sort-date'))
        {
            if($request->has('date'))
            {
                $date_sort = $request->input('date','2000-01-01');

                $date_current = date('Y-m-d', strtotime(' +1 day'));

                $data = $this->invoice->getAll_multi_and([['invoice_date','>=',$date_sort],['invoice_date','<=',$date_current]]);
                return view('admin/invoices/index',['data'=>$data,'date' => $date_sort,'sort-date' => 1]);
            }
            if($request->has('daterangepicker_start') && $request->has('daterangepicker_end'))
            {
                $data = $this->invoice->getAll_multi_and([['invoice_date','>=',$request->input('daterangepicker_start')],['invoice_date','<=',$request->input('daterangepicker_end')]]);
                return view('admin/invoices/index',['data'=>$data,'daterangepicker_start' => $request->input('daterangepicker_start'),'daterangepicker_end' => $request->input('daterangepicker_end'),'sort-date' => 1]);
            }
            $data = $this->invoice->getAll();
            return view('admin/invoices/index',['data'=>$data]);

        }

        elseif($request->has('sort-price'))
        {
            if($request->has('type'))
            {
                $type = $request->input('type');
                $data ='';
                if($type =='1-9')
                {
                    $data = $this->invoice->getAll_price(null,null,'ASC');
                }
                else{
                    $data = $this->invoice->getAll_price(null,null,'DESC');
                }
                return view('admin/invoices/index',['data'=>$data,'sort_price' => 1,'type'=>$type]);
            }
            elseif($request->has('from') && $request->has('to'))
            {
                $from = (int)$request->input('from');
                $to = (int)$request->input('to');
                if($from >= $to)
                {
                    $data =  $data = $this->invoice->getAll_price($from,$to,'ASC');
                }
                else{
                    $data =  $data = $this->invoice->getAll_price($from,$to,'DESC');
                }
                return view('admin/invoices/index',['data'=>$data,'sort_price' => 1,'from'=>$from,'to' => $to]);
            }
        }

        elseif($request->has('sort-status'))
        {
            $status = $request->input('status');
            if($status == 'new')
            {
                $data = $this->invoice->getAll('invoices.status_id','=',0);
                return  view('admin/invoices/index',['data'=>$data,'sort_status' => 1,'status'=>$status]);
            }
            if($status == 'shipping')
            {
                $data = $this->invoice->getAll('invoices.status_id','=',1);
                return  view('admin/invoices/index',['data'=>$data,'sort_status' => 1,'status'=>$status]);
            }
            if($status == 'shipped')
            {
                $data = $this->invoice->getAll('invoices.status_id','=',2);
                return  view('admin/invoices/index',['data'=>$data,'sort_status' => 1,'status'=>$status]);
            }
            if($status == 'canceled')
            {
                $data = $this->invoice->getAll('invoices.status_id','=',3);
                return  view('admin/invoices/index',['data'=>$data,'sort_status' => 1,'status'=>$status]);
            }
        }
        if($request->has('sort-name'))
        {
            if($request->has('name'))
            {
                $name = $request->input('name');

                $data = $this->invoice->getAll("UPPER(CONCAT(first_name,' ',last_name))",'like','%'.mb_strtoupper($name).'%');
                return  view('admin/invoices/index',['data'=>$data,'sort_name' => 1,'name'=>$name]);

            }
            if($request->has('type-sort'))
            {
                $type_sort = $request->input('type-sort');
                if(strtoupper($type_sort) == 'ASC' || strtoupper($type_sort) == 'DESC')
                {
                    $data = $this->invoice->getAll_sort_name($type_sort);
                    return  view('admin/invoices/index',['data'=>$data,'sort_name' => 1,'type_sort'=>$type_sort]);
                }

            }

        }
        if(!$request->all() || $request->only('page'))
        {

            $data = $this->invoice->getAll();
            return view('admin/invoices/index',['data'=>$data]);
        }


//    	return view('admin/invoices/index');
    }
    
}