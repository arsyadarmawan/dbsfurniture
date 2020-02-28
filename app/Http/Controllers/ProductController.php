<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Product::orderBy('id', 'desc')->paginate(10);
        $categories = Category::all();
        return view('products.index', compact('data','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Product;
        $data->title = $request->get('title');
        $data->slug =  str_slug($data->title, '-');
        $data->price = $request->get('price');
        $data->description = $request->get('desc');
        $data->specification = $request->get('specs');
        $data->category_id = $request->get('category');
        if ($request->hasFile('image') && $request->hasFile('cover') ) {
            $cover = $request->file('cover')->store('products','public');
            $new_image = $cover;
            $items = [];
            foreach ($request->file('image') as $img) {
                $image = $img->store('products','public');
                array_push($items, $image);
            }
        }
        $data->cover = $cover;
        $data->image = \json_encode($items);
        $data->save();
        return redirect()->route('product.index')->with('status','produk berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Product::findOrFail($id);
        // var_dump(\json_decode($item->image,true));
        $categories = Category::all();
        $image = json_decode($item->image);
        return view('products.edit', compact('item','categories','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Product::findOrFail($id);
        $item->title = $request->get('title');
        $item->slug =  str_slug($item->title, '-');
        $item->price = $request->get('price');
        $item->description = $request->get('desc');
        $item->specification = $request->get('specs');
        $item->category_id = $request->get('category');

        if($request->file('image') && $request->file('cover')){
            $item->cover = $this->storeCoverImage($item->cover, $request->file('cover'));
            $item->image = \json_encode($this->storeImages($item->image, $request->file('image')));
        }
        elseif($request->file('cover')){
            $item->cover = $this->storeCoverImage($item->cover, $request->file('cover'));
           
        }elseif($request->file('image')){
            
            $item->image = \json_encode($this->storeImages($item->image, $request->file('image')));
        }

        $item->save();
        return redirect()->route('product.index')->with('status','produk berhasil diupdate');
    }

    public function storeCoverImage($img, $request){
        if($img &&  file_exists(storage_path('app/public/' . $img))){
                \Storage::delete('public/'.$img);
        }
            $temp = $request->store('products','public');
            return $temp;
    }

    public function storeImages($image, $request){
        $data = [];
         foreach(\json_decode($image) as $key=>$img){
                if($image &&  file_exists(storage_path('app/public/' . $img))){
                   \Storage::delete('public/'.$img);
               }
            }
            
        foreach ($request as $img) {
            $file = $img->store('products','public');
            array_push($data, $file);
        }
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('product.index')->with('delete','product di hapus');
    }
}
