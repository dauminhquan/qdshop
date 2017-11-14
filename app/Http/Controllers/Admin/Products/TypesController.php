<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Model\Types;
use App\Http\Model\Groups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TypesController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $types;
    private $groups;
    public function __construct()
    {
    	$this->types = new Types();
    	$this->groups = new Groups();
    }

    public function index(Request $request)
    {
    	$data_types = $this->types->getAll();
    	$data_groups = $this->groups->getAll();
    	$data_count = $this->types->getCountProduct();
    	return view('admin/products/types',['data_types' => $data_types,'data_groups' => $data_groups,'data_count' => $data_count]);

    }
    
}