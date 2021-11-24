<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Models\Subscriptionuser; 

class subscriptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {    
		
		$checkSubscription = Subscriptionuser::where('user_id',Auth::user()->id)->count();
		if(empty($checkSubscription)) {
			return redirect('/subscription-plan')->with('error', 'Please take a subscription!');
		}else{
		    
			$subscriptionInfo = Subscriptionuser::select('subscription_user.*','subscription_plan.type as subscription_type','subscription_plan.total_days as subscription_days')->join('subscription_plan','subscription_plan.id','=','subscription_user.plan_id')->where('subscription_user.user_id',Auth::user()->id)->first();
			
			$subscriptionDate = $subscriptionInfo->created_at;
			$subscriptionType = $subscriptionInfo->subscription_type;
			$subscriptionDays = $subscriptionInfo->subscription_days;
			
			$getEndSubscriptionDate = date("Y-m-d H:i:s", strtotime('+ '.$subscriptionDays.' '.$subscriptionType, strtotime($subscriptionDate)));
			$currentDate            = date('Y-m-d H:i:s');
			
			if(strtotime($getEndSubscriptionDate)<strtotime($currentDate)){
				
				return redirect('/subscription-plan')->with('error', 'You current subscription has expired. please take another from here!');
			}
			return $next($request);
		}	
    } 
}