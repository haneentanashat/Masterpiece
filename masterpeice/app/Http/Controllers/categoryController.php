<?php

namespace App\Http\Controllers;
use App\Models\Catory;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category= Catory::all();
        return view('dashboard.Category.CategoryView', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
         return view('dashboard.Category.AddCategory');
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
            'name'=>'required|unique:catories',
            'Description'=>'required',
            'image'=>'required',
           
        ]);
        Catory::create([

            'name'=>$request->name,
            'Description'=>$request->Description,
            'image' => $request->file('image')->Move('dashboard/img/Category', $request->image->getClientOriginalName())

        ]);
        return redirect()->route('add-category')->with('status', 'Your Message has been sent successfully!');
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
        //
        $category = Catory::find($id);
        return view('dashboard.Category.EditCategory', compact('category'));
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
        $category = Catory::find($id);
        
        $category->update($request->all());
        return redirect()->route('CategoryView')->with('status', 'Status updated successfully');
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
        $category = Catory::find($id);
        $category->delete();
        return redirect()->route('CategoryView')->with('status', 'Category Deleted Successfully');
    }
}
