<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\Subscription;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($subscripiton_id)
    {   
	    $subscriptionInfo = Subscription::where('id',$subscripiton_id)->first();
        return view('stripe',compact('subscriptionInfo'));
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {  
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount*100,
                "currency" => "usd",
                "source"      => $request->stripeToken,
                "description" => "Your subscription has been successfully purchased."
        ]);
   
        Session::flash('success', 'Payment successful!');   
        return back();
    }
	
}
