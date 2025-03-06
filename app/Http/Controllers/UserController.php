<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Aqui crear toda la lógica del crud

   public function index(){
    return view('welcome');

   }
    
}
