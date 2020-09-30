<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorCotroller extends Controller
{
    public function vendorList(){
    	return view('Admin.vendor-list');
    }

    public function addVendor(){
    	return view('Admin.add-vendor');
    }
}
