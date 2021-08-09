<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orders()
    {   
        $orders = Order::all();

        return view('admin.orders', ['orders' => $orders]);
    }

    public function users()
    {   
        $users = User::where('is_admin' , '0')->get();

        return view('admin.users', ['users' => $users]);
    }

    public function admins()
    {   
        $users = User::where('is_admin' , '1')->get();

        return view('admin.admins', ['users' => $users]);
    }
}
