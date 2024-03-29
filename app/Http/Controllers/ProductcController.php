<?php

namespace App\Http\Controllers;
use App\Models\Productc;


use Illuminate\Http\Request;

class ProductcController extends Controller
{
    public function index(){
        $product = Productc::latest()->get();
       return view('product.index',compact('product'));
    }
    public function create() {

        return view('product.create');
    }

    public function store(Request $request){
        $imagePath = $request->file('image')->store('product_images');

        $data = new Productc();
        $data->product_name  = $request->product_name;
        $data->product_price  = $request->product_price;
        $data->description = $request->description;
        $image   = $request->image;
        $imgName = $image->getClientOriginalName();
        $folder  = 'product-images/';

        $image->move($folder, $imgName);
        $data->image = $folder . $imgName;

        $data->save();

        $notification = array('messege' => 'Asset Group Save Successfully.', 'alert-type' => 'success');

        return redirect()->route('product.index')->with($notification);
    }

    public function edit($id)
    {
        $data = Productc::find($id);
        // dd($data);

        return view('product.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Productc::find($id);
        $data->product_name  = $request->product_name;
        $data->product_price  = $request->product_price;
        $data->description = $request->description;
        if ($request->image) {
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $image   = $request->image;
            $imgName = $image->getClientOriginalName();
            $folder  = 'product-images/';

            $image->move($folder, $imgName);
            $data->image = $folder . $imgName;
        }
        $data->save();

        $notification = array('messege' => 'Asset Group Save Successfully.', 'alert-type' => 'success');

        return redirect()->route('product.index')->with($notification);
    }
    public function destroy($x)
    {
        $product = Productc::find($x);
        if (file_exists($product->image)) {
            unlink($product->image);
        }
        $product->delete();
        return back()->with('msg', 'Product Deleted Succesfully!');
    }

}
