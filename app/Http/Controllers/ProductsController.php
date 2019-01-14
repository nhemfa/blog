<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    //
    function index(){
        return view('index');

    }
    function add(){
        return view('add');
    }
    function post(Request $request){
        //$product=Product::create(['pname'=>$pname, 'pprice'=>$pprice, 'pstocks'=>$pstocks]);
        $product = Product::create(['pname'=>$request->pname ,'pprice'=>(float)$request->pprice ,
            'pstocks'=>(int)$request->pstocks]);
        $product->save();
        $statement="The product has been saved.";
        return view('temp')->with(['statement'=>$statement]);
    }
}