<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
   //echo 'Ok';
   $obj = new \stdClass();
   $obj->name = '';
   $obj->body = '';
   return view('welcome', compact('obj'));
  }
}
