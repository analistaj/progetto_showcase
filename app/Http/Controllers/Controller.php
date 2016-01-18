<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

{
	 
	function chisiamo()
	{
		return view('pages.chisiamo');
	}
	function progetti()
	{
		return view('pages.progetti');
	}
	 
	function servizi()
	{
		return view('pages.servizi');
	}
}