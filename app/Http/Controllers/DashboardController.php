<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->status == "deactivate") {
            return view('users.deactivate');
        }

        $user = Auth::user();
        
        $orders = Order::where('user_id', $user->id)->get();

        return view('users.dashboard', ['user' => $user, 'orders' => $orders]);
    }

    public function profile()
    {
        if(Auth::user()->status == "deactivate") {
            return view('users.deactivate');
        }
        return view('users.profile');
    }

    public function _profile(Request $data) {

         $data->validate([
            'name' => 'required',
        ]);

        User::where('id', Auth::user()->id)->update(['name' => $data->name]);

        session()->flash('success', 'Name Successfully Updated');

        return redirect()->route('profile');
    }

    public function password (Request $data) {

         $data->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::where('id', Auth::user()->id)->first();

        if (Hash::check($data->old_password, $user->password)) {
            
            if ($data->old_password == $data->password) {
                session()->flash('success', 'Cannot Change a password as Same as Old Password');
                return redirect()->route('profile'); 
            }

            User::where('id', Auth::user()->id)->update(['password' => Hash::make($data->cpass)]);

            session()->flash('success', 'Password Successfully Updated');

            return redirect()->route('profile');
        }
        else{
            session()->flash('success', 'Password does not Matched');

            return redirect()->route('profile');
        }
        
    }

    public function delete (Request $data) {

         $data->validate([
            'password' => 'required',
        ]);

        $user = User::where('id', Auth::user()->id)->first();

        if (Hash::check($data->password, $user->password)) {

            Order::where('user_id', Auth::user()->id)->delete();
            
            User::where('id', Auth::user()->id)->delete();

            session()->flash('success', 'Account Deleted');

            return redirect('/');
        }
        else{
            session()->flash('success', 'Password does not Matched');

            return redirect()->route('profile');
        }

    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.dashboard');
    }
}
