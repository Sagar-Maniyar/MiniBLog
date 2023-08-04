<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ProuctController extends Controller
{
    public function index(){
        return view('product',['product'=> Product::get()]);

    }
    function create(){
        return view('create');

    }
    function store(Request $req){

        $req->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        // uploade image 
        $imageName = time().'.'.$req->image->extension();
        $req->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $req->name;
        $product->description = $req->description;
        
        $product->save();
        return redirect()->route('product.home')->withSuccess('Product Ceated Successfully.');

    }
    function edit($id){
        $product = Product::where('id', $id)->first() ;
        return view('edit',['product'=> $product]);
    }


    function update(Request $req, $id){
        $req->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',]);
        $product = Product::where('id', $id)->first() ;  
        if(isset($req->image)){
            $imageName = time().'.'.$req->image->extension();
            $req->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
         
        }

        // uploade image 
        
            $product->name = $req->name;
            $product->description = $req->description;  
            $product->save();
            return redirect()->route('product.index')->withSuccess('Product Updated Successfully.');

        
    }
    function delete($id){
        $product = Product::where('id', $id)->first() ; 
        $product->delete();
        return redirect()->route('product.index')->withSuccess('Product deleted Successfully.');
        
    }
        function show($id){
            $product = Product::where('id', $id)->first() ; 
        return view('show',['product'=>$product]);
    }
}
