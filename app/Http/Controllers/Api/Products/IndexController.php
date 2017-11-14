<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 04/11/2017
 * Time: 10:34 CH
 */

namespace App\Http\Controllers\Api\Products;


use App\Http\Controllers\Controller;
use App\Http\Model\Colors;
use App\Http\Model\Products;
use App\Http\Model\Sizes;
use App\Http\Model\Types;
use App\Http\Model\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    private $products;
    private $colors;
    private $sizes;
    private $types;
    private $groups;
    public function __construct()
    {
        $this->products = new Products();
        $this->colors = new Colors();
        $this->sizes = new Sizes();
        $this->types = new Types();
        $this->groups = new Groups();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function check_product_code(Request $request)
    {
        if($request->has('product_code'))
        {
            if($request->has('id'))
            {
                $product_code = DB::table('products')->where('id','=',(int)$request->input('id'))->get()[0]->product_code;
                if($product_code == $request->input('product_code'))
                {
                    return ['sc' => true];
                }

            }

            if(!empty($this->products->getOne_column('product_code','=',$request->input('product_code'))[0]->id))
            {
                return ['sc' => false];
            }
            return ['sc' => true];
        }

        return ['sc' => false];
    }
    public function add_new_product(Request $request)
    {
        $bat_buoc = ['product_code','product_name','type_id','supplier_id','standard_cost',
        'list_price','tax','discontinued','show','description'];
        $data = $request->toArray();
        unset($data['_token']);
        if($this->products->checkIn($request,$bat_buoc))
        {

         if(isset($this->products->getOne_column('product_code','=',$request->input('product_code'),['id'])[0]->id))
         {
             return ['sc' => false,'ms'=> 'product_code'];
         }
         $data = $this->remove_request_data($data,['color_id','size_id','weight','image']);
         try{
             $this->products->insert($data);
             $id = $this->products->getOne_column('product_code','=',$data['product_code'],['id'])[0]->id;
             if($request->has('color_id'))
             {
                 foreach ($request->input('color_id') as $item)
                 {
                     DB::table('product_colors')->insert(['product_id' => $id,'color_id' => (int)$item]);
                 }
             }
             if($request->has('size_id'))
             {
                 foreach ($request->input('size_id') as $item)
                 {
                     DB::table('product_sizes')->insert(['product_id' => $id,'size_id' => (int)$item]);
                 }
             }
             if($request->hasFile('image'))
             {
                $index = 0;
                foreach ($request->file('image') as $item)
                {
                 if($item->getClientOriginalExtension() == 'jpg' ||
                     $item->getClientOriginalExtension() == 'png' ||
                     $item->getClientOriginalExtension() =='jpeg')
                 {

                    $date = time();
                    $name =$date . '_'.$index.'.' . $item->getClientOriginalExtension();
                    $url = $item->storeAs('public/image-products',$name);
                    DB::table('images')->insert(['product_id' => $id,'link' => $url]);
                }
                $index++;
            }
        }
        return true;
    }catch (Exception $exception)
    {
     return false;
 }
 return false;
}
}
public function update_product(Request $request)
{
    $bat_buoc = ['id','product_code', 'product_name', 'type_id', 'supplier_id', 'standard_cost',
    'list_price', 'tax', 'discontinued', 'show', 'description'];
    $data = $request->toArray();
    unset($data['_token']);
    if ($this->products->checkIn($request, $bat_buoc)) {
        $data = $this->remove_request_data($data, ['color_id', 'size_id', 'image']);
        try {
            $id = (int) $request->input('id');
            $this->products->update_id($id,$data);
            if ($request->has('color_id')) {
                DB::table('product_colors')->where('product_id','=',$id)->delete();
                foreach ($request->input('color_id') as $item) {
                    DB::table('product_colors')->insert(['product_id' => $id, 'color_id' => (int)$item]);
                }
            }
            if ($request->has('size_id')) {
                DB::table('product_sizes')->where('product_id','=',$id)->delete();
                foreach ($request->input('size_id') as $item) {
                    DB::table('product_sizes')->insert(['product_id' => $id, 'size_id' => (int)$item]);
                }
            }
            if ($request->hasFile('image')) {
                $index = 0;
                foreach ($request->file('image') as $item) {
                    if ($item->getClientOriginalExtension() == 'jpg' ||
                        $item->getClientOriginalExtension() == 'png' ||
                        $item->getClientOriginalExtension() == 'jpeg') {

                        $date = time();
                    $name =$date . '_'.$index.'.' . $item->getClientOriginalExtension();
                    $url = $item->storeAs('public/image-products',$name);
                    DB::table('images')->insert(['product_id' => $id, 'link' => $url]);
                    $index++;
                }
            }
        }
        return true;
    } catch (Exception $exception) {
        return false;
    }
    return false;
}
}
public function request_index(Request $request)
{
    $vl = false;
    if($request->has('show'))
    {
        $id = (int)$request->input('show');
        $this->products->update_id($id,['show'=>0]);
        $vl = true;
    }
    if($request->has('hide'))
    {
        $id = (int)$request->input('hide');
        $this->products->update_id($id,['show'=>1]);
        $vl = true;
    }
    if($request->has('discontinued'))
    {
        $id = (int)$request->input('discontinued');
        $this->products->update_id($id,['discontinued'=>1]);
        $vl = true;
    }
    if($request->has('continued'))
    {

        $id = (int)$request->input('continued');
        $this->products->update_id($id,['discontinued'=>0]);
        $vl = true;
    }
    return $vl;
}
public function remove_image(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');

        DB::table('images')->where('id','=',$id)->delete();
        Storage::delete($request->input('link'));

        return ['sc' => true];
    }
    return ['sc' => false];

}
public function get_all_products()
{
    try{
        $data = $this->products->getAll();

        return ['sc' => true,'data' => $data];

    }catch (Exception $exception)
    {
        return ['sc' => false];
    }
}
public function get_size_product(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');
        if($this->products->find($id))
        {
            $data = DB::table('product_sizes')->where('product_id','=',$id)->join('sizes','sizes.id','=','size_id')->get();
            return ['sc' => true,'data' => $data];
        }
    }
    return ['sc' => false];
}
public function get_color_product(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');
        if($this->products->find($id))
        {
            $data = DB::table('product_colors')->where('product_id','=',$id)->join('colors','colors.id','=','color_id')->get();
            return ['sc' => true,'data' => $data];
        }
    }
    return ['sc' => false];
}
public function get_image_product(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');
        if($this->products->find($id))
        {
            $data = DB::table('images')->where('product_id','=',$id)->get();
            return ['sc' => true,'data' => $data];
        }
    }
    return ['sc' => false];
}
public function get_infor_product(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');
        if($this->products->find($id))
        {
            $data = $this->products->getOne_column('id','=',$id)[0];
            return ['sc' => true,'data' => $data];
        }
    }
    return ['sc' => false];
}
public function update_type(Request $request)
{
    if($request->has('id') && $request->has('name_type') && $request->has('group_id'))
    {

        $id = (int) $request->input('id');
        if($this->types->find($id))
        {
            $this->types->update_id($id,$request->toArray());
            return ['sc' => true];
        }
    }
    return ['sc' => false];
}
public function delete_type(Request $request)
{
    if($request->has('id'))
    {
        $id = (int) $request->input('id');
        if($this->types->find($id))
        {

            if($this->types->getCountProduct($id) == 0)
            {
                $this->types->delete_where('id','=',$id);
                return ['sc' => true];
            }

        }
    }
    return ['sc' => false];
}

public function get_all_groups()
{
    return $this->groups->getAll();
}
private function remove_request_data($data,$array)
{
    foreach ($array as $item)
    {
        if(isset($data[$item]))
        {
            unset($data[$item]);
        }
    }
    return $data;
}

}