<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index(){
    	$id = Auth::user()->id;
    	$data = User::find($id);
    	return view('profile',compact('data'));
    }

    public function store(Request $request, User $user){
    	$id = Auth::user()->id;
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|unique:users,email,'.$id,
    	]);
    	
    	User::find($id)->update($request->all());
    	return redirect()->route('profile')->with('success','Profile Updated successfully');
    }
}
