<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SHowController extends Controller
{
    public function show($id){
        return $id;
    }

}

