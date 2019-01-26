<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cat;
use Auth;
use App\File;
class UploadFile extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Cat::all();
        return view('uploader',array('cats' =>$cats));

    }

 public function store(Request $request){
$MainPath='Storage/';

$File=$request->file('file');
$cat=$request->input('cat');

$hats=Cat::findOrFail($cat);
$name=$request->input('name');
$discribtion=$request->input('discribtion');

$NName=$hats->name."20180000-000000".$name.'.'.$File->getClientOriginalExtension();
$File->move($MainPath.$hats->name,$NName);
File::Create([
 'name'       =>$name,
 'path'       =>$NName,
 'gat_id'     =>$cat,
 'uploader_id'=>Auth::user()->name,
 'DIR'        =>$MainPath.$hats->name,     
 'size'       =>$File->getClientSize()
]);

return back();
}
}
