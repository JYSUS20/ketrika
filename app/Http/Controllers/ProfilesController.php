<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    

    public function getUser(){
      $user = User::find(1);
      return $user;
    }

    
}

