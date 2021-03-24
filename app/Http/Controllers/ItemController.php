<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\History;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;
use DB;

class ItemController extends Controller
{
    public function getItemList($category)
    {
        $item = Item::where('category', '=', $category)->where("quantity", ">", 0)->paginate(4);
        return view('/item', ['items' => $item, 'category' => $category]);
    }

    public function buyItem(Request $req)
    {
        $user = Auth::guard('user')->user();
        $data = Item::find($req->id);
        $remaining = ($data->quantity - $req->qty);
        $data->quantity = $remaining;
        $data->save(); // update Item Tables 
        $cat = Str::lower($data->category); // determine item category

        //create history listing
        $history = new History;
        $history->name = $data->name;
        $history->price = $data->price * $req->qty;
        $history->image = $data->image;
        $history->amount_purchased = $req->qty;
        $history->user_id = $user->id;
        $history->save();
        return redirect('/item/' . $cat)->with('success', true)->with('message', 'You have successfully purchased selected item!');
    }

    public function buyItemMember(Request $req)
    {

        $user = Auth::guard('user')->user();
        $data = Item::find($req->id);
        $remaining = ($data->quantity - $req->qty);
        $data->quantity = $remaining;
        $data->save(); // update Item Tables 
        $cat = Str::lower($data->category); // determine item category

        //create history listing
        $history = new History;
        $history->name = $data->name;
        $history->price = ($data->price * 0.8) * $req->qty;
        $history->image = $data->image;
        $history->amount_purchased = $req->qty;
        $history->user_id = $user->id;
        $history->save();
        return redirect('/item/' . $cat)->with('success', true)->with('message', 'You have successfully purchased selected item!');
    }
}
