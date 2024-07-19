<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function index()
 {
    return view( view: "category.index");
 }

 public function create()
 {
    return view(view: "category.form");
 }
}
