<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function SizeInfo()
    {
    	$sizeInfo = DB::table('pd_size_infos')->get();

    	$data['title'] = 'Production';
    	$data['sizeInfo'] = $sizeInfo;

    	return view('production.size_info',$data);
    }
}
