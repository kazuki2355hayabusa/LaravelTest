<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    
    public function test1()
    {
        $data = ['value'=>"建物です"];
        return view('Building',$data);
    }

    public function test2(Request $request)
    {
        $data = ['value' => "部屋番号は".$request->room."です"];
        return view('Building',$data);
    }
    //
}
