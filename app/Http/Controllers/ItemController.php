<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;
use DB;

class ItemController extends Controller
{
    public function getItemList($category)
    {
        $item = Item::where('category', '=',$category)->paginate(4);
        return view('/item', ['items' => $item, 'category'=>$category]);
    }

    public function buyItem(Request $req){
        $data = Item::find($req->id);
        $remaining = ($data->quantity - $req->qty);
        $data->quantity = $remaining;
        $data->save();
        $cat = Str::lower($data->category);
        return redirect('/item/'.$cat)->with('success', true)->with('message','You have successfully purchased selected item!');
    }
}
