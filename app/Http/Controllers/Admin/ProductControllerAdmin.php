<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductControllerAdmin extends Controller
{
    public function listProductAdmin(){
        return view('admin.products.list-product');
    }
}
