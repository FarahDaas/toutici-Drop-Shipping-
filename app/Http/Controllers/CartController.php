<?php

namespace App\Http\Controllers;

use App\cart;
use App\produit;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request){
        $prod_id =$request->input('product_id');
        $quantity =$request->input('product_qty');
        $nom=$request->input('prod_nom');
        $prod_check=produit::where('id',$prod_id)->first();
        // dd($prod_check);
        if($prod_check){
            // if (cart::wher('prod_id',$prod_id)->exist) {
            //     # code...
            // }
            $cartItem = new cart();
            $cartItem->prod_id=$prod_id;
            $cartItem->quantity=$quantity;
            $cartItem->save();
            // $test=$prod_check->prod_nom;
            // dd($test);
             return response()->json(['status'=>$nom." adeed"]);
        }

    }
}
