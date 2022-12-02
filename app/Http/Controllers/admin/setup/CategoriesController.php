<?php

namespace App\Http\Controllers\admin\setup;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::all();
        return view('admin.setup.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setup.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(),[
            'name' => 'required|string',
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        $name = filter_var($request->name, FILTER_SANITIZE_STRING);
        Categories::create([
            'name' => $name,
        ]);
        return redirect()->route('admin.categories.index');

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
        $data = Categories::findOrFail($id);
        return view('admin.setup.categories.edit',compact('data'));
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
        $v = Validator::make($request->all(),[
            'name' => 'required|string',
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        $name = filter_var($request->name, FILTER_SANITIZE_STRING);
        Categories::where('id',$id)->update([
            'name' => $name,
        ]);
        return redirect()->route('admin.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categories::findOrFail($id);
        $cat->delete();
        return redirect()->route('admin.categories.index');

    }
}
