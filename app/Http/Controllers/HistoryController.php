<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\History;
use Auth;

class HistoryController extends Controller
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
     $history =  History::where('user_id', Auth::id())->get();
        return view('dashboard.history', compact('history'));
    }
}
