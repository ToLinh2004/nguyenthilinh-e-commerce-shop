<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //
   // public function index(){
   //     return view('form');
   // }
   public function post(Request $request)
   {
      // $name=$request->input('username');
      // return dd($name) 
      //  $password=$request->input('password');

      $password = $request->input('password.2.password', '123456');
      dd($request);

      //  return $password;
      //  dd($password);
      //  $input=$request->input();
      //  dd($input);
      //    return view('result',$name);
   }
   public function store(Request $request)
   {
      dd($request->query('id'));
   }
   public function postInput(Request $request)
   {
      return back()->withInput(
         $request->only('username')
      );
   }
}
