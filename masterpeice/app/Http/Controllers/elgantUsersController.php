<?php

namespace App\Http\Controllers;
use App\Models\ElgantUser;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class elgantUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
       
        
     
    }
    public function usersindex()
    {
        //
       
        return view('users.register');
     
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
        
        
    }
    public function registerstore(Request $request)
    {
        $this->validate($request,[
            'fname'=>'required|max:255',
            'lname'=>'required|max:255',
            'phone'=>'required|max:255|unique:elgant_users',
            'address'=>'required|max:255',
            'email'=>'required|max:255|unique:elgant_users',
            'password'=>'min:6|required',
            'role'=>'required'
        ]);
         
     $register=new ElgantUser();
        $register->fname=$request->fname;
        $register->lname=$request->lname;
        $register->email=$request->email;
        $register->phone=$request->phone;
        $register->address=$request->address;
        $register->password= Crypt::encrypt($request->password);
         $register->role=$request->role;
        $register->save();
    return redirect('add-message')->with('status', 'Registered successfully!');
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
