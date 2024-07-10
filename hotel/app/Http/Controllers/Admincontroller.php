<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function AdminDashboard(){
        
        return view('admin.admin_dashboard');

    } //end Method
}
