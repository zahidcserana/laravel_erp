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
	$data['title'] = 'Dashboard';
	$data['header'] = 'Dashboard';
    return view('layouts/dashboard',$data);
});
Route::get('/login',['as'=>'login','uses'=>'LoginController@LoginForm']);

Route::get('/size_info',['as'=>'size_info','uses'=>'ProductionController@SizeInfo']);
Route::get('size_add', 'ProductionController@SizeForm')->name('size_add');
Route::post('size_add', 'ProductionController@SizeAdd')->name('size_add');

Route::get('unit_set', 'ProductionController@UnitInfo')->name('unit_set');
Route::get('unit_add', 'ProductionController@UnitForm')->name('unit_add');
Route::post('unit_add', 'ProductionController@UnitAdd')->name('unit_add');

Route::get('raw_material', 'ProductionController@RawMaterial')->name('raw_material');
Route::get('raw_material_add', 'ProductionController@RawMaterialForm')->name('raw_material_add');
Route::post('raw_material_add', 'ProductionController@RawMaterialAdd')->name('raw_material_add');

Route::get('buyer_info', 'ProductionController@BuyerInfo')->name('buyer_info');
Route::get('buyer_add', 'ProductionController@BuyerForm')->name('buyer_add');
Route::post('buyer_add', 'ProductionController@BuyerAdd')->name('buyer_add');

Route::get('merchandiser_info', 'ProductionController@Merchandiser')->name('merchandiser_info');
Route::get('merchandiser_add', 'ProductionController@MerchandiserForm')->name('merchandiser_add');
Route::post('merchandiser_add', 'ProductionController@MerchandiserAdd')->name('merchandiser_add');

Route::get('fabric_info', 'ProductionController@FabricInfo')->name('fabric_info');
Route::get('fabric_add', 'ProductionController@FabricForm')->name('fabric_add');
Route::post('fabric_add', 'ProductionController@FabricAdd')->name('fabric_add');

Route::get('style_color_size_wise_data_entry_form', 'ProductionController@showProfile')->name('style_color_size_wise_data_entry_form');
Route::get('production_pattern', 'UserController@showProfile')->name('production_pattern');
Route::get('style_information', 'UserController@showProfile')->name('style_information');
Route::get('cost_sheet', 'UserController@showProfile')->name('cost_sheet');
Route::get('print_document', 'UserController@showProfile')->name('print_document');
Route::get('production_report', 'UserController@showProfile')->name('production_report');
Route::get('style_report', 'UserController@showProfile')->name('style_report');
Route::get('category_set', 'UserController@showProfile')->name('category_set');
Route::get('sub_category_set', 'UserController@showProfile')->name('sub_category_set');
Route::get('sub_sub_category_set', 'UserController@showProfile')->name('sub_sub_category_set');
Route::get('item_set', 'UserController@showProfile')->name('item_set');
Route::get('raw_material_requirement', 'UserController@showProfile')->name('raw_material_requirement');
Route::get('receive_item', 'UserController@showProfile')->name('receive_item');
Route::get('yarn_issue_item', 'UserController@showProfile')->name('yarn_issue_item');
Route::get('active_production', 'UserController@showProfile')->name('active_production');
Route::get('store', 'UserController@showProfile')->name('store');
Route::get('finished_goods', 'UserController@showProfile')->name('finished_goods');
Route::get('report_window1', 'UserController@showProfile')->name('report_window1');
Route::get('receive_material_report', 'UserController@showProfile')->name('receive_material_report');
Route::get('acl', 'UserController@showProfile')->name('acl');

//Route::get('/profile',['as'=>'profile','uses'=>'HomeController@ViewProfile']);








