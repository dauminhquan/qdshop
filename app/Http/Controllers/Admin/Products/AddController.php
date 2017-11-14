<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Model\Colors;
use App\Http\Model\Groups;
use App\Http\Model\Sizes;
use App\Http\Model\Suppliers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AddController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $colors;
    private $sizes;
    private $group;
    private $suppliers;
    public function __construct()
    {
        $this->colors = new Colors();
        $this->sizes = new Sizes();
        $this->group = new Groups();
        $this->suppliers = new Suppliers();
        $this->colors = $this->colors->getAll();
        $this->sizes = $this->sizes->getAll();
        $this->group = $this->group->getAll_group_type();
        $this->suppliers = $this->suppliers->getAll();
    }

    public function index()
    {
    	return view('admin/products/add',['colors' => $this->colors,'sizes' => $this->sizes,'groups'=>$this->group,'suppliers' => $this->suppliers]);
    }
    public function post_index(Request $request)
    {
        $rs = new \App\Http\Controllers\Api\Products\IndexController();
        $rs = $rs->add_new_product($request);
        return view('admin/products/add',['check' => $rs,'colors' => $this->colors,'sizes' => $this->sizes,'groups'=>$this->group,'suppliers' => $this->suppliers]);
    }
    
}