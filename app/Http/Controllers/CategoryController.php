<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\File;
class CategoryController extends Controller
{
    public function index($CatName){
    	$cat_id=Cat::where('name','=',$CatName)->firstOrFail();
    	$Files=File::where('gat_id','=',$cat_id->id)->get();
    	$cats=Cat::all();
        return view('Category',array(
        	'cats' =>$cats,
        	'Files'=>$Files
        ));

    }
}
