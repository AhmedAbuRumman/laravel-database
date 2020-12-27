<?php

namespace App\Http\Controllers;

use App\RegisterUser;
use Illuminate\Http\Request;


class RegisterUserController extends Controller
{
    public function valid(Request $request)
    {  
        $validated = $request->validate([
			    'fullname'   => 'required|min:4|max:25',
    			'email'      => 'required|email',
    			'mobile'     => 'required|numeric',
    			'password'   => 'required|min:3|max:20',
    		]);
   	
           return $this->store($request);
          
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = RegisterUser::all();
        return view('index' , compact('users'));
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
        // first way to insert in database
        // RegisterUser::create($request->all());

        //second way to insert in database
        // RegisterUser::create(
        //     [
        //         'fullname'=>$request->input('fullname'),
        //         'email'   =>$request->input('mobile'),
        //         'password'=>bcrypt($request->input('password')),
        //         'mobile'  =>$request->input('mobile')
        //     ]);

        //third way to insert in database
        $user =  new RegisterUser;
        $user->fullname = $request->input('fullname');
        $user->email    = $request->input('email');
        $user->password = $request->input('password');
        $user->mobile   = $request->input('mobile');
       
        $user->save();
       
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=RegisterUser::where("userid",$id)->get()->first();
        return view('edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterUser $registerUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
        $request->validate([
            'fullname' =>'required|min:4|max:25',
            'email'    =>'required|email',
            'mobile'   =>'required|numeric|digits:14',
            'password' =>'required|confirmed|min:8|max:14',
            'password_confirmation'=>'required',

    ]);
        RegisterUser::where("userid",$id)->update([
            'fullname' => $request->input('fullname'),
            'email'    => $request->input('email'),
            'mobile'   => $request->input('mobile'),
            'password' => bcrypt($request->input('password'))

            ]) ;
            return redirect('/form');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       RegisterUser::destroy($id);
        return redirect('/form');
    }

    
}
