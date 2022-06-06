<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class pageController extends Controller
{
    function home (){
        return view("Home");
    }

    function teams (){
        return view("Teams");
    }

    function aboutus (){
        return view("Aboutus");
    }

    function contact (){
        return view("Contactus");
    }

    function create (){
        return view("Create");
    }

    function productitem(){

            $productitem = Product::all();

            return $productitem;
           //return view('Productitem')->with('proitem',$productitem);
    }

    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:20",
                "id"=>"required",
                "price"=>"required"
            ]
           );

           $p = new Product();
           $p->Product_Name = $req->name;
           $p->Product_ID = $req->id;
           $p->Product_Price = $req->price;
           $p->save();

           $productitem = Product::all();

           return $productitem;


           return view('Productitem')->with('proitem',$productitem);


        return "Submitted with valid value";


    }
}
