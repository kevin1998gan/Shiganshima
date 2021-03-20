<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;

class ItemController extends Controller
{
    public function getItemList($category)
    {
        $item = Item::where('category', '=',$category)->paginate(4);
        return view('/men', ['items' => $item]);
    }
}
