<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class AdminController extends Controller
{


    public function adminDashboard()
    {

        return view('admin');

    }
    public function showAdminUser()
    {
        $users = DB::select("SELECT user_id, last_name, first_name, mobile_number, email FROM users ORDER BY last_name;");
        return view('admin_user', ['users' => $users]);
    }
}