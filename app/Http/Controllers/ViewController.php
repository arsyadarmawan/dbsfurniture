<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Description;
use App\Model\Order;
use App\Model\Feedback;
use App\Model\Category;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;


class ViewController extends Controller
{
    //

    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(3);
        return view('content.main.index',compact('products'));
    }

    public function about(){
        $desc = Description::findOrFail(1);
        return view('content.main.about', compact('desc'));
    }

    public function product(){
        $products = Product::orderBy('id', 'desc')->paginate(5);
         return view('content.main.product', compact('products'));
    }

    public function showProduct($id){
        $product = Product::findOrFail($id);
        return view('content.main.detail', compact('product'));
    }

    public function orderForm($id){
        $product = Product::findOrFail($id);
         return view('content.main.form', compact('product'));
    }

    public function orderStore(Request $request){
        $data = new Order;
        $data->name = $request->get('name');
        $data->telp = $request->get('number');
        $data->product_id = $request->get('product_id');
        $data->deliver = $request->get('date');
        $data->address = $request->get('address');
        $data->note = $request->get('message');
        $data->save();
        return redirect()->route('product');
    }

    public function orderCustom(){
        $categories = Category::all();
        $description = Description::all();
        return view('content.main.order', compact('categories','description'));
    }

    public function subscriber(Request $request)
    {
        //
        $products = Product::orderBy('id', 'desc')->paginate(3);
        $data = new Feedback;
        $data->email = $request->get('email');
        $data->save();
        return view('content.main.index',compact('products'));

    }
}
