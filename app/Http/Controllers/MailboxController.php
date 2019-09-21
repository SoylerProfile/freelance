<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Project;

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

    function chat($chatId) {
	    //$messageId
        //$chatId
        $messages = Message::all()->where('chat_id', '1');
        $messageAuthorData = [

        ];
//        echo "<pre>";
//        print_r($messages);
//        die('Ok');
	    $userId = Auth::id();
	    $user = User::where('id', $userId)->first();
	    $userLogin = $user->login;
	    $userName = $user->name;

        // Передаем массив, в котором находятся массивы, в которых находятся объекты. array(array($message1, $authorData1), array($message2, $authorData2));
        $messagesAuthorsArrays = array();
        foreach($messages as $message) {
            $tempArray = array();
            $authorData = User::where('id', $message->author_id)->first();
            $tempArray[] = $message;
            $tempArray[] = $authorData;
            $messagesAuthorsArrays[] = $tempArray;
        }

        $project = Project::where('id', '1')->first();
        $projectStatus = $project->finished;

        return view('mailboxChat', ['userId' => $userId, 'userLogin' => $userLogin, 'userName' => $userName, 'messagesAuthorsArrays' => $messagesAuthorsArrays, 'projectStatus' => $projectStatus]);
    }

    function saveMessageToDB() {
	    Message::create([
	        'author_id' => $_POST['author_id'],
            'chat_id' => $_POST['chat_id'],
            'content' => $_POST['content'],
        ]);

	    $chatId = $_POST['chat_id'];

//	    TODO here must be a real chat ID. Rename it, when it will be ready!
        return redirect("mailbox/read/thread/3477731");
    }



}