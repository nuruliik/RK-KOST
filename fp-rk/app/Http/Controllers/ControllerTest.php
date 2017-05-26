<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kategori;

class ControllerTest extends Controller
{
    public function Testview()
    {
    	return view('test');
    }	

    public function Testpost(Request $request)
    {
    	//$data = $request->data;
    	$a = new Kategori;
    	$a -> id_mapel = 'test';
		$a -> nama_mapel = $request->data;
		$a -> save();
    	//dd($this->data);

    	// this-> data masukin ke d

    }
}
