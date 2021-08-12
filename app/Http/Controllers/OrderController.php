<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $redirectTo = '/home';

    public function order (Request $data) {
        if(Auth::user()->status == "deactivate") {
            return view('users.deactivate');
        }
        
         $data->validate([
            'name' => 'required',
            'link' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        Order::create([
            'user_id' => Auth::user()->id,
            'name' => $data['name'],
            'link' => $data['link'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
        ]);

        return redirect('/home');
    }
}
