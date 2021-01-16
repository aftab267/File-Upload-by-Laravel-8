<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    public function uploadforn(){
        return view('upload');
    }
    public function uploadfile(Request $request){
        $request->file->store('afrin');
        return "File has been uploaded Successfully!";

    }
}
