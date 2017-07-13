<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index()
    {
      $articles =  Auth::user()->articles;
      foreach ($articles as $key => $value) {
        echo "<pre>";
        print_r($value->title);
        echo "</pre>";
      }

    }
}
