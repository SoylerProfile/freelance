<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($currentUserID, $user2_ID, $projectID)
    {

        $chat = DB::table('chats')->where('user_id', $currentUserID)->where('user2_id', $user2_ID)->where('project_id', $projectID)->first();

        if (empty($chat)) {
            DB::table('chats')->insert([
                'user_id' => $currentUserID,
                'user2_id' => $user2_ID,
                'project_id' => $projectID,
            ]);
            return redirect('/');
        }

        $user2 = DB::table('users')->where('id', $user2_ID)->first();

        return view('mailboxChat', ['user2' => $user2]);
    }
}
