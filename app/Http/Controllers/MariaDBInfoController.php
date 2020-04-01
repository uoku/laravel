<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MariaDBInfoController extends Controller
{
	public function index(){
			$result = \DB::select('SELECT VERSION();');		
			return view('MariaDBInfo')->with('dbVersion', $result[0]->{'VERSION()'});
	}
}
