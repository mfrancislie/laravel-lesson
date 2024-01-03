<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        return 'hello wolrd';
    }

   /*  
   Passing the data from controller to view
   public function show($id){
        $data = array(
            "id" => $id,
            "name" => "Francislie",
            "age" => "24",
            "gender" => "Male"
        );

        return view('user', $data);
        // return view('user', ['data' => $data]); for testing 
    } */
      
    // alternate passing the data from controller to view
      public function show($id){
        $data = ['data' => 'data from the database'];
        return view('user')
        ->with("data", $data)
        ->with('id', $id)
        ->with('name', "Francis") 
        ->with('gender', "Male")
        ->with('age', 23);
    }
}
