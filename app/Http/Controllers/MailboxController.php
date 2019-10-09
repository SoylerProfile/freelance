<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Project;

use Illuminate\Http\Request;

// MY
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\DB;

class MailboxController extends Controller
{
    private $messagesAuthorsArrays = array();
    private $projectStatus;

// TODO У каждого чата - свой уникальный ID, мы должны проверять при обращении к нему является ли ID текущего пользователя соответствующим ID одному из участников чата и, соответственно, выдавать разрешение на редирект или нет.

    public function __construct()
    {
        $messages = Message::all()->where('chat_id', '1');

        // Передаем массив, в котором находятся массивы, в которых находятся объекты. array(array($message1, $authorData1), array($message2, $authorData2));
        foreach($messages as $message) {
            $tempArray = array();
            $authorData = User::where('id', $message->author_id)->first();
            $tempArray[] = $message;
            $tempArray[] = $authorData;
            $this->messagesAuthorsArrays[] = $tempArray;
        }

        $project = Project::where('id', '1')->first();
        $this->projectStatus = $project->finished;
    }

    function index() {
	    return view('mailbox');
	}

	function createChat($currentUserID, $user2_ID, $projectID)
    {
        DB::table('chats')->insert([
            'user_id' => $currentUserID,
            'user2_id' => $user2_ID,
            'project_id' => $projectID,
        ]);

        $chat = DB::table('chats')->where('project_id', $projectID)->first();
        $chatID = $chat->id;

        $this->chat($chatID);

//        $user2 = DB::table('users')->where('id', $user2_ID)->first();
//
//        return view('mailboxChat', [
//            'user2' => $user2,
//            'messagesAuthorsArrays' =>$this->messagesAuthorsArrays,
//            'projectStatus' => $this->projectStatus,
//        ]);
    }

    function showChat($currentUserID, $user2_ID, $projectID) {
        $chat = DB::table('chats')->where('user_id', $currentUserID)->where('user2_id', $user2_ID)->where('project_id', $projectID)->first();

        if(empty($chat))
            $this->createChat($currentUserID, $user2_ID, $projectID);

        //        todo тут нужно сделать where chat_id, user_id, user2_id, чтобы получать нужный чат
        $messages = Message::all()->where('chat_id', $chat->id);

        // Передаем массив, в котором находятся массивы, в которых находятся объекты. array(array($message1, $authorData1), array($message2, $authorData2));
        $messagesAuthorsArrays = array();
        foreach($messages as $message) {
            $tempArray = array();
            $authorData = User::where('id', $message->author_id)->first();
            $tempArray[] = $message;
            $tempArray[] = $authorData;
            $messagesAuthorsArrays[] = $tempArray;
        }

        $project = Project::where('id', $projectID)->first();
        $projectStatus = $project->finished;

        return view('mailboxChat', [
            'messagesAuthorsArrays' => $messagesAuthorsArrays,
            'projectStatus' => $projectStatus,
            'chatID' => $chat->id,
        ]);
    }

    function saveMessageToDB(Request $request) {
	    Message::create([
	        'author_id' => $request->post('author_id'),
            'chat_id' => $request->post('chat_id'),
            'content' => $request->post('content'),
        ]);

	    $chatID = $request->post('chat_id');

	    $authorID = $_POST['author_id'];

	    // получить всех участников чата по ID

//	    TODO here must be a real chat ID. Rename it, when it will be ready!
        return redirect("mailbox/read/thread/$chatID");
    }

    function chooseExecutor(Request $request) {
        $projectID = $request->post('projectID');
        $executorID = $request->post('executorID');
        $currentUserID = Auth::id();

        DB::table('projects')->where('id', $projectID)->update(['executor' => $executorID]);

        $chat = DB::table('chats')->where('project_id', $projectID)->first();
        if(empty($chat))
            $this->createChat($currentUserID, $executorID, $projectID);
        else
            $chatID = $chat->id;

        return redirect("mailbox/read/thread/$chatID");
    }

    private function checkUserInTheChat($chat, $currentUserID) {
        if($chat->user_id == $currentUserID || $chat->user2_id == $currentUserID)
            return true;
        else
            return false;
    }

    public function chat($chatID) {
        $chat = DB::table('chats')->where('id', $chatID)->first();

        $currentUserID = Auth::id();;
        $user2_ID = $chat->user2_id;
        $projectID = $chat->project_id;

        if(empty($chat))
            $this->createChat($currentUserID, $user2_ID, $projectID);


        if($this->checkUserInTheChat($chat, $currentUserID) == false)
            die('У вас нет доступа к этому чату');

        //        todo тут нужно сделать where chat_id, user_id, user2_id, чтобы получать нужный чат
        $messages = Message::all()->where('chat_id', $chat->id);

        // Передаем массив, в котором находятся массивы, в которых находятся объекты. array(array($message1, $authorData1), array($message2, $authorData2));
        $messagesAuthorsArrays = array();
        foreach($messages as $message) {
            $tempArray = array();
            $authorData = User::where('id', $message->author_id)->first();
            $tempArray[] = $message;
            $tempArray[] = $authorData;
            $messagesAuthorsArrays[] = $tempArray;
        }

        $project = Project::where('id', $projectID)->first();
        $projectStatus = $project->finished;

        return view('mailboxChat', [
            'messagesAuthorsArrays' => $messagesAuthorsArrays,
            'projectStatus' => $projectStatus,
            'chatID' => $chat->id,
        ]);
    }

}