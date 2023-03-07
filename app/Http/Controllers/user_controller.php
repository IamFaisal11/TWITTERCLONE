<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\post;
class user_controller extends Controller
{
public function reset()
{
    return view('forgotten');
}
public function forget(Request $request)
{
$customer=users::find($request->id);
if($request->id==$customer->id&&$request->detail==$customer->detail)
{
   
 echo "hj";
}
else
{
    echo "user not found";
    return view('signup');
}
}
public function profile($id)
{ $user=users::find($id);
    $data=compact('user');

    return view('profile')->with($data);
}
public function edit($id){
    return view('editprofile');
}
public function tweet(Request $request)
{
    $post=new post(['tweet'=>'$request->tweet']);

    return users::with('post')->find(1);
}
}
