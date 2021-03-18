<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function products(){
        $products = DB::table('products as p')
                       ->join('categories as c','p.category_id','c.id')
                       ->select('p.id','p.name as product','p.price','c.name as category')
                       ->orderBy('p.id','asc')
                       ->get();
        if($products){
            $error = false;
            $msg = 'Data Retrieved';
        }
        else{
            $error = true;
            $msg = 'No data Found';
        }
        return response()->json([
            'data' => $products,
            'error' => $error,
            'message' => $msg
        ]);
    }
    public function insert(Request $req){
        $obj = new Product();
        $obj->name = $req->productname;
        $obj->details = $req->productdetails;
        $obj->price = $req->productprice;
        $obj->status = $req->productstatus;
        $obj->category_id = $req->category_id;
        if($obj->save()){
            return response()->json([
                'data' => $obj,
                'error' => false,
                'msg' => 'data inserted'
            ]);
        }
    }
    public function getProductById($id){
        $product = DB::table('products')
                      ->where('id','=',$id)
                      ->first();
        return response()->json([
          'data' => $product,
          'error' => false,
          'msg' => 'data Retrieved'
        ]);
    }

}
