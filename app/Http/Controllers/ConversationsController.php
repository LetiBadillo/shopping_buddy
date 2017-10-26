<?php

namespace App\Http\Controllers;

use Storage;
use File;
use Auth;
use DB;
use App\Conversation;
use Carbon\Carbon;
use App\Http\Requests\StartConversationRequest;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('dashboard.inbox');
    }

    public function webService(Request $request){
        $key = '';
        if($request->user_type == 1){ //si es employee
        $key = 'assigned_employee_id';
        }
        if($request->user_type == 2){ //Si es shopper
        $key = 'user_id';
        }
        return Conversation::where($key, Auth::id())->orderBy('id', 'desc')->limit(10)->get();
    }
    public function start(StartConversationRequest $request){
        try{
            DB::beginTransaction();
            $conversation = Conversation::create([
                'user_id' => Auth::id(), 
                'message' =>$request->message,
                'brands' => $request->brands,
                'assigned_employee_id' => 1,

              ]);
            Storage::disk('local')->put($conversation->id.'.txt', '<p class="chat">Hola, '. Auth::user()->name.'</p>');
            DB::commit();
          $response = $this->jsonSuccess($conversation->id);
        }catch(Throwable $e){
		DB::rollback();
		$response = $this->jsonError($e);
	}

	return $response;


    }
    public function converse_high(Request $request, $id){
        $title = $id.'.txt';
        Storage::disk('local')->append($title, $request->message);
        
    }
    public function getChat($id){
        return $contents = Storage::disk('local')->get($id.'.txt');
    }
    
}
