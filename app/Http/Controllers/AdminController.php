<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        Order::where('show', 0)->update(['show'=> 1]);
        
        $orders = Order::all();

        return view('admin.orders', ['orders' => $orders]);
    }

    public function users()
    {   
        User::where('show', 0)->update(['show'=> 1]);

        $users = User::where('is_admin' , '0')->get();

        return view('admin.users', ['users' => $users]);
    }

    public function admins()
    {   
        $users = User::where('is_admin' , '1')->get();

        return view('admin.admins', ['users' => $users]);
    }

    public function addadmin() {

        return view('admin.add_admin');
    }

    public function proadmin(Request $request) {

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $pass = Hash::make($request['password']);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $pass;
        $user->is_admin = "1";
        $user->save();

        return redirect()->route('admin.admin');
    }

    public function deleteadmin($id) {

        $user = User::find($id)->delete();

        return redirect()->route('admin.admin');
    }

    public function userstatus($id,$status)
	{
		User::where('id',$id)->update(['status' => $status]);
			
		return redirect()->route('admin.user');
	}

    public function orderstatus($id,$status)
	{
		Order::where('id',$id)->update(['status' => $status]);
			
		return redirect()->route('admin.order');
	}
}