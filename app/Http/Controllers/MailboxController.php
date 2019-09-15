<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

// MY
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class MailboxController extends Controller
{
	function index() {
	    return view('mailbox');
	}

	function createChat($id) {
        $user = User::where('id', $id)->first();
        $user2 = Auth::user()->getAuthPassword();

        return $user2;

        echo "<pre>";
        var_dump($user);
    }

    function chat($chat_id) {
        return view('mailboxChat');
    }


}