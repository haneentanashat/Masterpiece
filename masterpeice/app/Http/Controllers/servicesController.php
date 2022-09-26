<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Users;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $ser= Service::all();
        return view('service', compact('ser'));
    }
    public function index1()
    {
        //
       
        $ser= Service::all();
        return view('dashboard.Serivce.serviceView', compact('ser'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('service');
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
        $input = $request->all();
        Service::create($input);
        return redirect('/service')->with('status', 'you serivce Submited Successfully!');  
        $request->save();
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
        $ser = Service::find($id);
        $ser->delete();
        return redirect()->route('serviceView');
    }
    public function cancel($id)
    {
        $ser = Service::find($id);
        $ser->status=2;
        $ser->save();
        return redirect()->route('serviceView');
    }
    public function pending($id)
    {
        $ser = Service::find($id);
        $ser->status=0;
        $ser->save();
        return redirect()->route('serviceView');
    }
    public function confirm($id)
    {
        $ser = Service::find($id);
        $ser->status=1;
        $ser->save();
        return redirect()->route('serviceView');
    }
    
}
