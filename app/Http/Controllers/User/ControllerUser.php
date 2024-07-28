<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function listProductUser(){
        return view('user.products.list-product');
    }
}
