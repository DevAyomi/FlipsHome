<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
    	return view('/contact');
    }

    public function store(Request $request){

    	$validation = validator::make($request->all(), [

    		'name' => ['required', 'string', 'max:255'],
    		'email' => ['required', 'email:filter', 'max:255'],
    		'description' => ['required', 'string'],
    		'message' => ['required', 'string'],
    	]);

    	if($validation->fails()){
    		return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
    	}
    }
}
