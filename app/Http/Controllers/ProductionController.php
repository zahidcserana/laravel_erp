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
    	$data['header'] = 'Size Information';
    	$data['sizeInfo'] = $sizeInfo;

    	return view('production.size_info',$data);
    }
    public function SizeForm()
    {
    	$data['title'] = 'Production';
    	$data['header'] = 'New Size Addition';

    	return view('production.size_form',$data);
    }
    public function SizeAdd(Request $request)
    {
    	$input = $request->except(['_token']);
    	DB::table('pd_size_infos')->insertGetId($input);
    	return redirect()->route('size_info');
    }
    // Unit set
    public function UnitInfo()
    {
    	$unitInfo = DB::table('ims_unit')->get();

    	$data['title'] = 'Production';
    	$data['header'] = 'Unit Information';
    	$data['unitInfo'] = $unitInfo;

    	return view('production.unit_info',$data);
    }
    public function UnitForm()
    {
    	$data['title'] = 'Production';
    	$data['header'] = 'New Unit Addition';

    	return view('production.unit_form',$data);
    }
    public function UnitAdd(Request $request)
    {
    	$input = $request->except(['_token']);
    	DB::table('ims_unit')->insertGetId($input);
    	return redirect()->route('unit_set');
    }
    // Raw Material set
    public function RawMaterial()
    {
    	$List = DB::table('raw_material_setup')->get();

    	$data['title'] = 'Production';
    	$data['header'] = 'Raw Material Information';
    	$data['List'] = $List;

    	return view('production.raw_material',$data);
    }
    public function RawMaterialForm()
    {
    	$data['title'] = 'Production';
    	$data['header'] = 'New Raw Material Addition';

    	return view('production.raw_material_form',$data);
    }
    public function RawMaterialAdd(Request $request)
    {
    	$input = $request->except(['_token']);
    	DB::table('raw_material_setup')->insertGetId($input);
    	return redirect()->route('raw_material');
    }
    // buyer set
    public function BuyerInfo()
    {
        $List = DB::table('pd_buyer_infos')->get();

        $data['title'] = 'Production';
        $data['header'] = 'Buyer Information';
        $data['List'] = $List;

        return view('production.buyer_info',$data);
    }
    public function BuyerForm()
    {
        $buyerCateg = DB::table('pd_buyer_categ')->get();
        $data['title'] = 'Production';
        $data['header'] = 'New Buyer Addition';
        $data['buyerCateg'] = $buyerCateg;

        return view('production.buyer_form',$data);
    }
    public function BuyerAdd(Request $request)
    {
        $input = $request->except(['_token']);
        DB::table('pd_buyer_infos')->insertGetId($input);
        return redirect()->route('buyer_info');
    } 
    // Merchandiser set
    public function Merchandiser()
    {
        $List = DB::table('pd_merchandiser_infos')->get();

        $data['title'] = 'Production';
        $data['header'] = 'Merchandiser Information';
        $data['List'] = $List;

        return view('production.merchandiser_info',$data);
    }
    public function MerchandiserForm()
    {
        $data['title'] = 'Production';
        $data['header'] = 'New Merchandiser Addition';

        return view('production.merchandiser_form',$data);
    }
    public function MerchandiserAdd(Request $request)
    {
        $input = $request->except(['_token']);
        DB::table('pd_merchandiser_infos')->insertGetId($input);
        return redirect()->route('merchandiser_info');
    }
     // Fabric set
    public function FabricInfo()
    {
    	$List = DB::table('pd_fabric_quality')->get();

    	$data['title'] = 'Production';
    	$data['header'] = 'Fabric Information';
    	$data['List'] = $List;

    	return view('production.fabric_info',$data);
    }
    public function FabricForm()
    {
        $colors = DB::table('pd_color_infos')->get();
        $data['colors'] = $colors;
    	$data['title'] = 'Production';
    	$data['header'] = 'New Fabric Addition';

    	return view('production.fabric_form',$data);
    }
    public function FabricAdd(Request $request)
    {
    	$input = $request->except(['_token']);
    	DB::table('pd_fabric_quality')->insertGetId($input);
    	return redirect()->route('fabric_info');
    }
}
