<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Auth;


class AdminController extends Controller
{
    //    public function __construct()
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getName()
    {
        $user = Auth::guard('admin')->user();
        return view('/admin', ['user' => $user]);
    }

    public function getNameForEdit()
    {
        $user = Auth::guard('admin')->user();
        $item = Item::paginate(10);
        return view('/action', ['user' => $user , 'items' => $item]);
    }

    public function addItem(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'image' => 'required',
            'quantity' => 'required|numeric|min:1|max:99'
        ])->validate();

            $item = $req->all();
            Item::create($item);
            return redirect('/admin');
        
    }

}
