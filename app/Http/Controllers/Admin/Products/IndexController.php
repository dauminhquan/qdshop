<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Model\Products;
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
    private $products;
    public function __construct()
    {
        $this->products = new Products();
    }

    public function index(Request $request)
    {

            $check = new \App\Http\Controllers\Api\Products\IndexController();
            $check = $check->request_index($request);
            $data = $this->products->getAll(null,null,['product_name','products.id','discontinued','show']);
            return view('admin/products/index',['data' => $data,'check' => $check]);

    }
    
}