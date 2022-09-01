<!-- <?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Login;
use App\Models\Register;
use Illuminate\Http\Request;
use Session ; 

class LoginController extends Controller
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
    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'Password'  => 'required|alphaNum|min:3'
     ]);
     $email=$request->email;
     $password=$request->password;
     $user= Register ::where('email',$email)->first();

     if(isset($user)){

     if($password === $user('password')){
         $request->session()->put('emil',$user['email']);
         return redirect('index');
     }
     else
     {
         return redirect('login')->with('incorrect_password' , 'Password Incorrect');
     }

    }else
    {
        return "Email Does not Exist";
    }
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
} -->
