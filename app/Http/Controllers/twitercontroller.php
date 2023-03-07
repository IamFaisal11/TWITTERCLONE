<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class twitercontroller extends Controller
{
    // public function loginmethod()
    // {
    //     return view('login');
        
    // }
    // public function homemethod()
    // {
    //     return view('home');
        
    // }
    // public function logoutmethod()
    // {
    //     return view('logout');
    
        
    // }
    // public function signupmethod()
    // {
    //     return view('signup');
    
        
    // }
    // public function forgottenmethod()
    // {
    //     return view('forgotten');
    
        
    // }
    public function login()
    {
        return view('login');
        return redirect('/login/forget');
    }
    public function loginpage(Request $request)
    {
    
        $customer = users::all();
        $request->password=md5($request->password);
      foreach($customer as $value)
   {
 if(($value->detail==$request->detail||$value->id==$request->detail)&&$value->password==$request->password)
{ 
   $user=users::find($request->detail);
   $data=compact('user');
    return view('home')->with($data);
}else{
    return view('login');
}



   }
}

    public function signuser()
    {
        return view('signup');
    }
    public function usersignup(Request $request)
    {
       
        $request->validate([
            'id'=> 'required',
            'detail'=> 'required',
            'password' => 'required'
    
         ]);
         $customer=new users;
         $customer->id=$request['id'];
         $customer->detail=$request['detail'];
         $customer->name=$request['name'];
         $customer->password=md5($request['password']);
         $customer->save(); 
        return view('login');
    }
    public function home()
    {
        return view('home');
    }
   
    
}
