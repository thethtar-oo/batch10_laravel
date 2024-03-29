<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Category::all();//call all() from model category
        //dd($categories);
        return view('category.index',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
           
            'name'=>'required',
        ]);


        $category = new Category();
        $category->name=request('name');
        
       // $psot->status=true; if given status true
        $category->save();

        //Redirect
        return redirect()->route('firstpage');
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
         $categoryid =Category::find($id);
        $categories = Category::all();
        return view('category.edit',compact('categories','categoryid'));
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
         $request->validate([
           
            'name'=>'required',
        ]);

        $category=Category::find($id);
        $category->name=request('name');
        
       // $psot->status=true; if given status true
        $category->save();

        //Redirect
        return redirect()->route('firstpage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryid =Category::find($id);
        $categoryid->delete();
        return redirect()->route('firstpage');
    }
}
