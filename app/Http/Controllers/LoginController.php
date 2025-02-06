<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(): view {
    return view(view:  "login.index");
   }
}
