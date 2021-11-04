<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
function index(){
    return view ('products.index');
}

function create(){
    return view ('create');
}

function store(){
    return view ('products.');
}

function edit(){
    return view ('products.');
}

function update(){
    return view ('products.');
}

function destroy(){
    return view ('products.');
}

function show(){
    return view ('products.');
}



}
