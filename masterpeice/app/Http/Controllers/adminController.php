<?php

namespace App\Http\Controllers;
use App\Models\Catory;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class adminController extends Controller
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
    public function AdminSignup()
    {
        //
        return view('dashboard.signup');
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
    public function storeAdmin(Request $request)
    {
        //
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255|unique:admins',
            'password'=>'min:6|required',
            
            
        ]);
        Admin::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('signin');
    }
    public function Adminlogin()
    {
        //
        return view('dashboard.signin');
    }
    public function Login(request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $admin = Admin::where('email', $email)->first();
        if (isset($admin)) {

            if (Hash::check($password, $admin->password) == true) {
                $request->session()->put('id',$admin->id);
                return redirect('/dash');
            } else {
                return redirect('Adminlogin')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return redirect('Adminlogin')->with('email_incorrect', 'Email Does not Exist');
        }
    }
    public function Adminlogout(Request $request){
        $request->session()->forget('id');
        return redirect('/Adminlogin');
    }
    // public function addcategory(Request $request)
    // {
    //     $request->validate([
    //         'name'=>'required|unique:catories',
    //         'Description'=>'required',
    //         'image'=>'required',
           
    //     ]);
    //     Catory::create([

    //         'name'=>$request->name,
    //         'Description'=>$request->Description,
    //         'image' => $request->file('image')->Move('dashboard/img/Category', $request->image->getClientOriginalName())

    //     ]);
    //     return redirect()->route('add-category')->with('status', 'Your Message has been sent successfully!');
    // }
    // public function editCategory($id, Request $request)
    // {
    //     $category = Catory::find($id);
    //     return view('dashboard.Category.EditCategory', compact('category'));
    // }
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
    public function showadmin($id)
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
