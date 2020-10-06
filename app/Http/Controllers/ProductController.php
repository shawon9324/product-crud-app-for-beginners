<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $title = 'Index';
        $products = Product::paginate(3);
        return view('product.index')->with(compact('title', 'products'));
    }
    public function create()
    {
        $title = 'Create Product';
        // $products = Product::get();
        // $products = json_decode(json_encode($products),true);
        // echo "<pre>"; print_r($product);die;
        return view('product.create')->with(compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $product = new Product;
        $img_tmp = $request->file('logo');
        if ($img_tmp) {
            $image_name = date('dmy_H_s_i');
            $extention = strtolower($img_tmp->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $extention;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $img_tmp->move($upload_path, $image_full_name);
            $product->logo = $image_url;
        }
        $product->product_name = $data['product_name'];
        $product->product_code = $data['product_code'];
        $product->details = $data['details'];
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product Created Successfully');
    }
    public function Edit($id)
    {
        $title = "Edit Product";
        $product = Product::where('id', $id)->first();
        // $product = json_decode(json_encode($product),true);
        // echo "<pre>"; print_r($product);die;
        return view('product.edit')->with(compact('product', 'title'));
    }
    public function Update($id, Request $request)
    {
        $title = "Update Product";
        $data = $request->all();
        $product = Product::find($id);
        $img_tmp = $request->file('logo');

        if ($img_tmp) {
            if(file_exists($data['old_logo']))
            {
                unlink($data['old_logo']);
            }else{

            }
            $image_name = date('dmy_H_s_i');
            $extention = strtolower($img_tmp->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $extention;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $img_tmp->move($upload_path, $image_full_name);
            $product->logo = $image_url;
        }
        $product->product_name = $data['product_name'];
        $product->product_code = $data['product_code'];
        $product->details = $data['details'];
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
    }
    public function Delete($id){
        
        $data= Product::where('id',$id)->get()->first();

        $image = $data->logo;
        if(file_exists($image)){
            unlink($image);
        }
        else{
        }
        $data->delete();
        return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');

    }
    public function Show($id){
        $title= "Product Details";
        $productDetails = Product::where('id',$id)->first();
        return view('product.show')->with(compact('productDetails','title'));
    }
}
