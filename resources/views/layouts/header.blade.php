<?php 
	//use Session;
	$company_infos = DB::table('company_infos')->first();
	/*echo "<pre>";
	var_dump();echo "<pre>";exit();*/
	$company_logo = $company_infos->company_logo;
	$company_name_english = $company_infos->company_name_english;
	//$sessionId = Session::get('sessionId');
	//$sessionName = Session::get('sessionName');
	$sessionId = 1;
	$sessionName = 'test';
?>
<div style="margin:0 auto; width:100%; height:70px;; overflow:hidden; background: black;">
	<div style=" width:60%; font-weight: 900; text-align:center; font-family:'Comic Sans MS';float:left;">
		<div style=" height:auto; width:35%; overflow:hidden; float:left; text-align:left; padding-left:10px;">
	    <img height="65" src="{{asset('images/'.$company_logo)}}" />
		</div>
		<div style=" height:auto; width:60%;padding-top:10px; overflow:hidden;color: #CC0000; font-size:25px; float:right; text-align:right;">
		 {{$company_name_english}}
		</div>
	</div>
	<div style="padding:10px; width:30%; float:right;"> 
		<div style="text-align:right; color: #CC0000;">
			@if ($sessionId)
			  Welcome, {{$sessionName}} 
				<a  href='#'  target='_top' style='text-decoration:none; color:black;'>
				<img src="{{asset('images/exit.png')}}" alt="Exit" /></a>
			 @endif
		</div>
	</div>
</div>