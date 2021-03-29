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
        $item = Item::all();
        return view('/action', ['user' => $user, 'items' => $item]);
    }

    public function addItem(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'image' => 'required|max:255',
            'quantity' => 'required|numeric|min:1|max:99'
        ])->validate();

        $user = Auth::guard('admin')->user();
        $item = new Item;
        $item->name = $req->name;
        $item->price=$req->price;
        $item->image=$req->image;
        $item->quantity = $req->quantity;
        $item ->category = $req->category;
        $item ->description = $req->description;
        $item->created_by = $user->name;
        $item->user_id = $user->id;
        $item->save();
        return redirect('/admin');
    }

    public function showUpdate($id)
    {
        $data = Item::find($id);
        return view("/update", ['data' => $data]);
    }

    function updateItem(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'image' => 'required|max:255',
            'quantity' => 'required|numeric|min:1|max:99'
        ])->validate();

        $data = Item::find($req->id);
        $data->name = $req->name;
        $data->price = $req->price;
        $data->image = $req->image;
        $data->quantity = $req->quantity;
        $data->category = $req->category;
        $data->description = $req->description;
        $data->save();

        return redirect("/action");
    }
    function deleteItem($id)
    {
        $data = Item::find($id);
        $data->delete();
        return redirect("/action");
    }
}
