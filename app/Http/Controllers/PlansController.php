<?php

namespace App\Http\Controllers;
use App\User;
use App\Plan;
use App\History;
use App\Sale;
use DB;
use Carbon\Carbon;
use Auth;   
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        if($request->ws=='history'){
        return User::findOrFail(Auth::user()->id)->history()->get();
        }
        if($request->ws == "conversations"){
            return User::findOrFail(Auth::user()->id)->history()->get();
        }
    }

    public function create(Request $request){
        $response = "";
        try{
            DB::beginTransaction();
            $plan = Plan::findOrFail($request->plan_id);
            if($plan->conversations_available == null)
                $plan->conversations_available = 0;
            
            Sale::create([
                'user_id' => Auth::id(),
                'type' => '1', //plan type
                'plan_id' => $request->plan_id,
                'payment' => 0,
                'payment_type' => 1, //money, not coupons
            ]);

            $user_history = History::where('user_id', Auth::id())->get();
            if(count($user_history) > 0){
                foreach($user_history as $history){
                    $history->end_date = $this->getDays($request->plan_id);
                    $history->renewals = $history->renewals +1 ;
                    $history->conversations_available = $history->conversations_available + $plan->conversations_available;
                    $history->save();
                }
                
            }else{
                History::create([
                    'user_id' => Auth::id(),
                    'plan_id' => $request->plan_id, 
                    'start_date' => Carbon::now(), 
                    'end_date' => $this->getDays($request->plan_id), 
                    'conversations_available' => $plan->conversations_available,
                    'conversations_count' => 0, 
                    'renewals' => 0
                ]);
            }
            $response = $this->jsonSuccess('Cambios guardados correctamente');
            DB::commit();
        }catch(Throwable $e){
		// rollback and log
		DB::rollback();
		$response = $this->jsonError($e);
	}

	return $response;
}
    public function my_plans(){
        $plans = Plan::all();
        
        return view('dashboard.user_plan', compact('plans'));
    }
    public function getDays($plan_id){
        $end_date = "";
        if($plan_id == 1){
            $end_date = Carbon::now()->addWeek();
        }
        if($plan_id == 2){
            $end_date = Carbon::now()->addMonth();
        }
        if($plan_id == 3){
            $end_date = Carbon::now()->addYear();
        }
        return $end_date;

    }

}
