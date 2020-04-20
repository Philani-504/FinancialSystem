<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\User;
class HomeController extends Controller
{

  public function home(){

    return response()->json("home");
  }

}
