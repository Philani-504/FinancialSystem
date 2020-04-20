<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\User;
class LoginController extends Controller
{
  public function login(Request $request){
   $this->validate($request,[
     'email' => 'required|email',
     'password' => 'required'
   ]);


   $data = array(
      'email' => $request->email,
      'password' => $request->password,
   );

   if (auth()->attempt($data)){
     //if auth is successful we redirect them
        return redirect('/u/home');
   }else{

     //else if information is not valid, we return back with a session flash message
     return back()->with('errormessage','Login failed. incorrect details');


   }
}

}
