<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        
        $items = product::all();
        // return view('product.product_datils',compact('items'));
        return view('admin.dashboard',compact('items'));
    }

    public function getproduct($id)
    {
        $items = product::find($id);
        return view('product.product_details',compact('items'));
    }

    public function addproduct(Request $request)
    {
        $item = new product();
        $item->name = $request->name;
        $item->detail = $request->detail;
        $item->price = $request->price;
        if($request->hasFile('picture1'))
        {
            $file = $request->file('picture1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $item->picture1 = $filename;
        }
        if($request->hasFile('picture2'))
        {
            $file = $request->file('picture2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $item->picture2 = $filename;
        }
       
        $res = $item->save();

        if($res)
        {
            return back()->with('success','Added Successfuly');
        }
        else
        {
            return back()->with('fail','Somthing Wrong');
        }

    }

    public function delete($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect('products');
    }

    public function edit($id)
    {
        $data = product::find($id);
        return view('product.edit_product',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data = product::find($request->id);
        $data->name = $request->name;
        $data->detail = $request->detail;
        $data->price = $request->price;
        if($request->hasFile('picture1'))
        {
            $file = $request->file('picture1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $data->picture1 = $filename;
        }
        if($request->hasFile('picture2'))
        {
            $file = $request->file('picture2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/',$filename);
            $data->picture2 = $filename;
        }
        $res = $data->save();

        if($res)
        {
            return back()->with('success','Updated Successfuly');
        }
        else
        {
            return back()->with('fail','Somthing Wrong');
        }
    }
}
