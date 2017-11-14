<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Model\Groups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class GroupsController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    private $groups;
    public function __construct()
    {
    	$this->groups = new Groups();
    }

    public function index(Request $request)
    {
    	return view('admin/products/groups');

    }
    
}