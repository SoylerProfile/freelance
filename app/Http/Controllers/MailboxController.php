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
        // тут должна быть логика создания чата
    }

    function chat($chatId) {
	    //$messageId
        //$chatId
        $messages = Message::all()->where('chat_id', '1');

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

        return view('mailboxChat', [
            'messagesAuthorsArrays' => $messagesAuthorsArrays,
            'projectStatus' => $projectStatus
        ]);
    }

    function saveMessageToDB(Request $request) {
	    Message::create([
	        'author_id' => $request->post('author_id'),
            'chat_id' => $request->post('chat_id'),
            'content' => $request->post('content'),
        ]);

	    $chatId = $request->post('chat_id');

//	    TODO here must be a real chat ID. Rename it, when it will be ready!
        return redirect("mailbox/read/thread/3477731");
    }



}