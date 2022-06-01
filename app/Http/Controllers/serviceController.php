<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{

    function service(){
        $products = array();
        for($i=1;$i<=20;$i++){
            $product = array(
                "name"=>"Product $i",
                "code"=>$i,
                
            );
            $products[] = (object)$product;
        }

        return view('Service')
               ->with('products',$products);
    }
}
