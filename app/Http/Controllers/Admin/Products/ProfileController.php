<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Model\Colors;
use App\Http\Model\Groups;
use App\Http\Model\Products;
use App\Http\Model\Sizes;
use App\Http\Model\Suppliers;
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
    private $colors;
    private $sizes;
    private $group;
    private $suppliers;
    private $products;
    public function __construct()
    {
        $this->colors = new Colors();
        $this->sizes = new Sizes();
        $this->group = new Groups();
        $this->products = new Products();
        $this->suppliers = new Suppliers();
        $this->colors = $this->colors->getAll();
        $this->sizes = $this->sizes->getAll();
        $this->group = $this->group->getAll_group_type();
        $this->suppliers = $this->suppliers->getAll();
    }

    public function index(Request $request)
    {
        if($this->products->find((int)$request->input('id'))) {
            $id = (int)$request->input('id');

            $data = $this->products->getAll('products.id', '=', $id)[0];
            return view('admin/products/profile', ['data' => $data, 'colors' => $this->colors, 'sizes' => $this->sizes, 'groups' => $this->group, 'suppliers' => $this->suppliers, 'all_colors' => $this->products->getAllColors($id), 'all_sizes' => $this->products->getAllSize($id),
                'all_images' => $this->products->getAllImages($id)]);
        }
        return response()->redirectTo(route('admin/products'));
    }
    public function post_index(Request $request)
    {
        if($this->products->find((int)$request->input('id'))) {
            $rs = new \App\Http\Controllers\Api\Products\IndexController();
            $rs = $rs->update_product($request);
            $id = (int)$request->input('id');
            $data = $this->products->getAll('products.id', '=', $id)[0];
            return view('admin/products/profile', ['check' => $rs, 'data' => $data, 'colors' => $this->colors, 'sizes' => $this->sizes, 'groups' => $this->group, 'suppliers' => $this->suppliers, 'all_colors' => $this->products->getAllColors($id), 'all_sizes' => $this->products->getAllSize($id),
                'all_images' => $this->products->getAllImages($id)]);
        }
        return ['sc' => false];
    }
    
}