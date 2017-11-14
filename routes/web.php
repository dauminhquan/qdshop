<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){
	Route::get('/',['as' => 'admin/index','uses' => 'Index\IndexController@index']);


	Route::get('/invoices',['as' => 'admin/invoices','uses' => 'Invoices\IndexController@index']);
	Route::get('/invoices/profile',['as' => 'admin/invoices/profile','uses' => 'Invoices\ProfileController@index']);

    Route::get('/invoices/print-invoice',['as' => 'admin/invoices/print-invoice','uses' => 'Invoices\ProfileController@print_invoice']);

    Route::get('/invoices/add',['as' => 'admin/invoices/add','uses' => 'Invoices\AddController@index']);



    Route::get('/customers',['as' => 'admin/customers','uses' => 'Customers\IndexController@index']);
    Route::get('/customers/profile',['as' => 'admin/customers/profile','uses' => 'Customers\ProfileController@index']);
    Route::post('/customers/profile',['as' => 'admin/customers/profile','uses' => 'Customers\ProfileController@post_index']);
    Route::get('/customers/add',['as' => 'admin/customers/add','uses' => 'Customers\AddController@index']);
    Route::post('/customers/add',['as' => 'admin/customers/add','uses' => 'Customers\AddController@post_index']);



    Route::get('/employees',['as' => 'admin/employees','uses' => 'Employees\IndexController@index']);
    Route::get('/employees/profile',['as' => 'admin/employees/profile','uses' => 'Employees\ProfileController@index']);
    Route::post('/employees/profile',['as' => 'admin/employees/profile','uses' => 'Employees\ProfileController@post_index']);
    Route::get('/employees/add',['as' => 'admin/employees/add','uses' => 'Employees\AddController@index']);
    Route::match(['post'],'/employees/add',['as' => 'admin/employees/add','uses' => 'Employees\AddController@post_index']);
    Route::get('/employees/profile/download',['as' => 'admin/employees/profile/download','uses' => 'Employees\ProfileController@download']);



    Route::get('/products',['as' => 'admin/products','uses' => 'Products\IndexController@index']);
    Route::get('/products/profile',['as' => 'admin/products/profile','uses' => 'Products\ProfileController@index']);
    Route::post('/products/profile',['as' => 'admin/products/profile','uses' => 'Products\ProfileController@post_index']);
    Route::get('/products/add',['as' => 'admin/products/add','uses' => 'Products\AddController@index']);
    Route::post('/products/add',['as' => 'admin/products/add','uses' => 'Products\AddController@post_index']);

    Route::get('/products/groups',['as' => 'admin/products/groups','uses' => 'Products\GroupsController@index']);

    Route::get('/products/types',['as' => 'admin/products/types','uses' => 'Products\TypesController@index']);

    Route::get('/statistics',['as' => 'admin/statistics','uses' => 'Statistics\IndexController@index']);
});
Route::group(['namespace' =>'Home'],function(){
	Route::get('/',['as' =>'home/index','uses' => 'Index\IndexController@index']);
	Route::get('/mens',['as' =>'home/mens','uses' => 'Mens\IndexController@index']);
	Route::get('/san-pham',['as' =>'home/single','uses' => 'Single\IndexController@index']);

});

Route::group(['namespace' =>'Api','prefix' => 'api'],function(){
    Route::match(['post','get'],'/employees/upload-avatar',['as' =>'api/employees/upload_avatar','uses' => 'Employees\IndexController@upload_avatar']);


    Route::match(['post','get'],'/customers/get-all-customer',['as' =>'api/products/get-all-customer','uses' => 'Customers\IndexController@get_all_customer']);

    
    Route::match(['post','get'],'/customers/get-one-customer',['as' =>'api/products/get-one-customer','uses' => 'Customers\IndexController@get_one_customer']);

    Route::match(['post','get'],'/customers/upload-avatar',['as' =>'api/customers/upload_avatar','uses' => 'Customers\IndexController@upload_avatar']);
    


    Route::match(['post'],'/products/check-product-code',['as' =>'api/products/check_product_code','uses' => 'Products\IndexController@check_product_code']);
    Route::match(['post'],'/products/remove-image',['as' =>'api/products/remove-image','uses' => 'Products\IndexController@remove_image']);
    Route::match(['post'],'/products/get-all-products',['as' =>'api/products/get-all-products','uses' => 'Products\IndexController@get_all_products']);
    Route::match(['post'],'/products/get-size-product',['as' =>'api/products/get-size-product','uses' => 'Products\IndexController@get_size_product']);
    Route::match(['post'],'/products/get-color-product',['as' =>'api/products/get-color-product','uses' => 'Products\IndexController@get_color_product']);
    Route::match(['post'],'/products/get-image-product',['as' =>'api/products/get-image-product','uses' => 'Products\IndexController@get_image_product']);
    Route::match(['post'],'/products/get-infor-product',['as' =>'api/products/get-infor-product','uses' => 'Products\IndexController@get_infor_product']);

    Route::match(['post'],'/products/update-type',['as' =>'api/products/update-type','uses' => 'Products\IndexController@update_type']);
    Route::match(['post'],'/products/add-type',['as' =>'api/products/add-type','uses' => 'Products\IndexController@add_type']);
    Route::match(['post'],'/products/delete-type',['as' =>'api/products/delete-type','uses' => 'Products\IndexController@delete_type']);
     Route::match(['post'],'/products/get-all-groups',['as' =>'api/products/get-all-groups','uses' => 'Products\IndexController@get_all_groups']);


    Route::match(['post'],'/invoices/add-invoice',['as' =>'api/invoices/add-invoice','uses' => 'Invoices\IndexController@add_invoice']);
    Route::match(['post'],'/invoices/access-invoice',['as' =>'api/invoices/access-invoice','uses' => 'Invoices\IndexController@access_invoice']);

    Route::match(['post'],'/invoices/cancel-invoice',['as' =>'api/invoices/cancel-invoice','uses' => 'Invoices\IndexController@cancel_invoice']);
    Route::match(['post'],'/invoices/delete-invoice',['as' =>'api/invoices/delete-invoice','uses' => 'Invoices\IndexController@delete_invoice']);

});