<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

  function index(){
  	$users=json_decode(file_get_contents('http://jsonplaceholder.typicode.com/users'));
    return view('users.index',compact('users'));
  }

	function show(Request $request,$id)
	{
    $user=json_decode(file_get_contents('http://jsonplaceholder.typicode.com/users/'.$id));
		return view('users.show',compact('user'));
	}

}
