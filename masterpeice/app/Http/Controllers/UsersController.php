<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users= Users::all();
        return view('register', compact('users'));
    }
    public function loginView()
    {
        //
        return view('users.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.register');
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
        $request->validate([
            'fname'=>'required|max:255',
            'lname'=>'required|max:255',
            'phone'=>'required|max:255|unique:users',
            'address'=>'required|max:255',
            'email'=>'required|max:255|unique:users',
            'password'=>'min:6|required',
            
            
        ]);
        Users::create([

            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('register')->with('success', 'Registered successfully!');
    }
    public function Login(request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $user = Users::where('email', $email)->first();
        if (isset($user)) {

            if (Hash::check($password, $user->password) == true) {
                $request->session()->put('id',$user->id);
                return redirect('/');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return redirect('login')->with('email_incorrect', 'Email Does not Exist');
        }
    }
    public function logout(Request $request){
        $request->session()->forget('id');
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $id = session()->get('id');

        $user = Users::find($id);
    
        
        return view('users.profile' , ['user'=>$user]);
    
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
