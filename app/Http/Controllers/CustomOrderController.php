<?php

namespace App\Http\Controllers;
use App\Model\Category;
use App\Model\OrderCustom;
use Illuminate\Http\Request;

class CustomOrderController extends Controller
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
        $customs = OrderCustom::orderBy('id', 'desc')->paginate(10);
        return view('customs.index',compact('customs'));
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
        //
        $data = new OrderCustom;
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->telepon = $request->get('number');
        $data->address = $request->get('address');
        $data->category_id = $request->get('category');
        $data->description = $request->get('message');
        if ($request->hasFile('file') ) {
            $imageStore = $request->file('file')->store('customs','public');
        }
        $data->images = $imageStore;
        $data->save();
        return redirect()->route('orderCustom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = OrderCustom::findOrFail($id);
        // $path = $dsf;
        $path = storage_path('app/public/'.$data->images);
        if (file_exists(storage_path('app/public/'.$data->images))) {
           return response()->download($path);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
