<?php

namespace App\Http\Controllers\admin\setup;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Items;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){
        $data = Items::all();
        return view('admin.setup.items.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.setup.items.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    function store(Request $request){
        $v = Validator::make($request->all(), [
            'categories_id' => 'required|integer',
            'name' => 'required|string|unique:items',
            'price' => 'required|integer',
            'img' => 'required|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
        ]);

        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        try{
            $file = $request->file('img');
            $file_name = time().$file->getClientOriginalName();
            $file->move(public_path().'/items//', $file_name);

            $cat_id = filter_var($request->categories_id, FILTER_SANITIZE_NUMBER_INT);
            $name = filter_var($request->name, FILTER_SANITIZE_STRING);
            $price = filter_var($request->price, FILTER_SANITIZE_NUMBER_INT);
            $active = $request->has('active') ? '1' : '0';

            Items::create([
                'categories_id' => $cat_id,
                'name' => $name,
                'price' => $price,
                'active' => $active,
                'img' => $file_name,
            ]);
            return redirect()->route('admin.items.index')->with('msg','Item created successfully');

        }catch(Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Items::findOrFail($id);
        $categories = Categories::all();
        return view('admin.setup.items.edit', compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $v = Validator::make($request->all(), [
            'categories_id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|integer',
            'img' => 'mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
        ]);

        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        try{
            $item = Items::findOrFail($id);
            if($request->has('img')){
                if(unlink(public_path()."/items//".$item->img)){
                    $file = $request->file('img');
                    $file_name = time().$file->getClientOriginalName();
                    $file->move(public_path().'/items//', $file_name);
                    $item->img = $file_name;
                }       
            }

            $cat_id = filter_var($request->categories_id, FILTER_SANITIZE_NUMBER_INT);
            $name = filter_var($request->name, FILTER_SANITIZE_STRING);
            $price = filter_var($request->price, FILTER_SANITIZE_NUMBER_INT);
            $active = $request->has('active') ? '1' : '0';
            $item->categories_id = $cat_id;
            $item->name = $name;
            $item->price = $price;
            $item->active = $active;
            $item->save();
            return redirect()->route('admin.items.index')->with('msg','Item udpated successfully');
        }catch(Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $item = Items::findOrFail($id);
        if(unlink(public_path()."/items//".$item->img)){
            $item->delete();
            return redirect()->back()->with('msg','Item deleted successfully');

        }
    }
}
