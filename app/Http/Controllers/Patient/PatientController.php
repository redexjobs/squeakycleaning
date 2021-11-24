<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use URL;
use App;
use DB;
use Auth;
use file;
use App\Models\User;
use App\Models\Features;
use App\Models\Specialities;
use App\Models\Setting;

use App\Models\Course;
use App\Models\Coursecategory;
use App\Models\Coursecontent;
use App\Models\Subscription;
use App\Models\Subscriptionuser;
use App\Models\Subscriptionuserhistory;
use App\Models\Serviceschat;

class PatientController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('patient');
    }

    public function index(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		$courseCount          = Course::where('user_id',$user_id)->count();
		$coursecontentCount   = Coursecontent::where('user_id',$user_id)->count();
		
		$getCurrentSubscriptionPlan = Subscriptionuser::select('subscription_user.*','subscription_plan.name as plan_name','subscription_plan.price as plan_price','subscription_plan.type as plan_type','subscription_plan.total_days as plan_days')->join('subscription_plan','subscription_plan.id','=','subscription_user.plan_id')->where('subscription_user.user_id',$user_id)->first();
		
        return view('patient.dashboard',compact('unserInfo','SpecializeInfo','courseCount','coursecontentCount','getCurrentSubscriptionPlan'));
    }
	
	public function profile_setting(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('patient.profile_setting',compact('unserInfo','SpecializeInfo'));
	}
	
	public function profile_setting_actions(Request $request){
		
		$dataArray = array();
		$dataArray['name']                 = $request->first_name;
		$dataArray['last_name']            = $request->last_name;
		$dataArray['mobile_no']            = $request->mobile_no;
		$dataArray['gender']               = $request->gender;
		$dataArray['address']              = $request->address;
		$dataArray['city']                 = $request->city;
		$dataArray['state']                = $request->state;
		$dataArray['zip_code']             = $request->zip_code;
		$dataArray['country']              = $request->country;
		
		if(isset($request->profile_pic)){
			
			$userInfo = User::where('id',Auth::user()->id)->first();
			if(!empty($userInfo->profile_pic)){
				$getFilePath = public_path('uploads/user/').$userInfo->profile_pic;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->profile_pic->extension();  
            $request->profile_pic->move(public_path('uploads/user/'), $imageName);
			$dataArray['profile_pic']  = $imageName;
		}
		User::where('id',Auth::user()->id)->update($dataArray);
        return redirect('/patient/profile-setting')->with('success', 'You have successfully updated!');
	}
	
	public function change_password(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('patient.change_password',compact('unserInfo','SpecializeInfo'));
	}
	
	public function change_password_action(Request $request){
		
		$user         = Auth::user();
		$userPassword = $user->password;
		
		$request->validate([
            'old_password'     => 'required',
            'new_password'     => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);
		
		if (!Hash::check($request->old_password, $userPassword)) {
            return back()->withErrors(['old_password'=>'old password does not match']);
        }
		
		$user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success','password successfully updated');
	}
	
	#CHAT
	public function chat(Request $request){
		
		$getUserList     = User::where('role','!=','admin')->whereNotIn('id',array(Auth::user()->id))->get();
		return view('patient.chat',compact('getUserList'));
	}
	public function fetch_user_chat(Request $request){
		
		$to_id   = $request->to_id;
		$from_id = Auth::user()->id;
		
		$getUserFromChatList  = Serviceschat::where('to_id',$to_id)->where('from_id',$from_id)->get();
		$getUserToChatList    = Serviceschat::where('to_id',$from_id)->where('from_id',$to_id)->get();
		
		$html = '';

		foreach($getUserFromChatList as $chatFromList){
			$html .= '<li class="media sent">
					<div class="media-body">
						<div class="msg-box">
							<div>
								<p>'.$chatFromList->message.'</p>
								<ul class="chat-msg-info">
									<li>
										<div class="chat-time"><span>'.date('H:i',strtotime($chatFromList->created_at)).'</span>
										</div>
									</li>
								</ul>
							</div>
						</div>	
					</div>
				</li>';
		}
		foreach($getUserToChatList as $chatToList){
			
			$html .= '<li class="media received">
				<!--<div class="avatar">
					<img src="public/frontend/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
				</div>-->
				<div class="media-body">
				
					<div class="msg-box">
						<div>
							<p>'.$chatToList->message.'</p>
							<ul class="chat-msg-info">
								<li>
									<div class="chat-time"><span>'.date('H:i',strtotime($chatToList->created_at)).'</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</li>';
		}
		return $html;
	}
	public function chat_action(Request $request){
		
		$services_chat = new Serviceschat;
		$services_chat->from_id  = $request->from_id;
		$services_chat->to_id    = $request->to_id;
		$services_chat->message  = $request->message;
		$services_chat->save();
		
		return true;
	}
	
}
