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
        return response()->json([
            'products' => $products,
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
    public function categories(){
        $categories = DB::table('categories as c')
            ->select('c.id','c.name')
            ->get();
        return response()->json([
            'categories' => $categories
        ]);
    }


    //actual work
    public function getProductById($id){
        $product = DB::table('products as p')
                       ->join('categories as c','p.category_id','c.id')
                       ->select('p.id','p.name as product','p.details','p.price','p.status','c.name as category','c.id as cat_id')
                       ->where('p.id','=',$id)
                       ->first();
        return response()->json([
          'product' => $product,
          'msg' => 'data Retrieved'
        ]);
    }
    public function createproduct(Request $request){
        $obj = new product();
        $obj->name = $request->pname;
        $obj->price = $request->pprice;
        $obj->status = $request->status;
        $obj->category_id = $request->pcategory;
        if($obj->save()){
            return response()->json([
                'product' => $obj,
                'msg' => 'Successfully inserted'
            ]);
        }   
    }
    public function updateProduct(Request $request,$id){
        $obj = product::find($id);
        $obj->name = $request->name;
        $obj->details = $request->details;
        $obj->price = $request->price;
        $obj->status = $request->status;
        $obj->category_id = $request->category_id;
        if($obj->save()){
            return response()->json([
                'product' => $obj,
                'msg' => 'Successfully Updated'
            ]);
        }
    }
}
