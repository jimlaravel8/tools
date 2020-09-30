<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index(){
    	return view('dashboard');
    }
    public function addProduct(){
    	return view('add-product');
    }
    public function addVendor(){
    	return view('add-vendor');
    }
    public function addCategory(){
    	return view('add-category');
    }
}
