<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Auth;


class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHistoryList()
    {
        $user = Auth::guard('user')->user();
        $history = History::where('user_id', '=', $user->id)->paginate(4);
        return view('/history', ['histories' => $history]);
    }

    public function joinMember()
    {
        $user = Auth::guard('user')->user();
        $thisUser = User::find($user->id);
        $thisUser->role = "member";
        $thisUser->save();
        return redirect('/history')->with('success', true)->with('message', 'Welcome! You are now a Member!');
     }
}
