<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tweet; // 追加

class TweetsController extends Controller
{
    public function index() { // 追加

    	$tweets = Tweet::all(); // 追加② "モデル名::Eloquent" の形

    	$tweets = Tweet::find(1); // 追加① ()内には存在するレコードのID

        return view('tweets.index', compact('tweets', 'tweet')); // ③compact関数を追加し、②の$tweetsをtweets/index.blade.phpに返す。compact関数にtweetを追加
    }
}
