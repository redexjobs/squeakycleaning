<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
use App\Models\Training;
use App\Models\Subscription;
use App\Models\Subscriptionuser;
use App\Models\Subscriptionuserhistory;
use App\Models\Serviceschat;

class TrainerController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('trainer');
    }

    public function index(){
		
		$user_id              = Auth::user()->id;
		$unserInfo            = User::where('id',$user_id)->first();
		$SpecializeInfo       = Specialities::get();
		$courseCount          = Course::where('user_id',$user_id)->count();
		$coursecontentCount   = Coursecontent::where('user_id',$user_id)->count();
		
		$getCurrentSubscriptionPlan = Subscriptionuser::select('subscription_user.*','subscription_plan.name as plan_name','subscription_plan.price as plan_price','subscription_plan.type as plan_type','subscription_plan.total_days as plan_days')->join('subscription_plan','subscription_plan.id','=','subscription_user.plan_id')->where('subscription_user.user_id',$user_id)->first();
		
        return view('trainer.dashboard',compact('unserInfo','SpecializeInfo','courseCount','coursecontentCount','getCurrentSubscriptionPlan'));
    }
	
	#PROFILE SETTING
	public function profile_setting(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('trainer.profile_setting',compact('unserInfo','SpecializeInfo'));
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
        return redirect('/trainer/profile-setting')->with('success', 'You have successfully updated!');
	}
	
	#CHANGE PASSWORD
	public function change_password(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('trainer.change_password',compact('unserInfo','SpecializeInfo'));
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
	
	#COURSE
	public function get_course(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseInfo      = Course::select('course.*','course_category.name as category_name')->join('course_category','course_category.id','=','course.course_category_id')->where('course.user_id',$user_id)->where('course.status','1')->get();
		return view('trainer.courses',compact('unserInfo','courseInfo'));
	}
	
	public function add_new_course(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();

		return view('trainer.add_new_course',compact('unserInfo','courseCategory'));
	}
	
	public function add_new_course_action(Request $request){
		
		$request->validate([
            'name'               => ['required', 'unique:course'],
            'course_category_id' => ['required'],
            'description'        => ['required'],
            'course_image'       => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		$course = new Course;
		$course->name                = $request->name;
		$course->course_category_id  = $request->course_category_id;
		$course->user_id             = Auth::user()->id;
		$course->description         = $request->description;
		
		if(isset($request->course_image)){
		    $imageName = time().'.'.$request->course_image->extension();  
            $request->course_image->move(public_path('uploads/course/'), $imageName); 
			$course->image = $imageName; 
		}
		$course->save();
		
        return redirect('/trainer/course')->with('success', 'You have successfully added!');
	}
	
	public function edit_course($course_id){

		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseInfo      = Course::where('user_id',$user_id)->where('id',$course_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();
		
		return view('trainer.edit_course',compact('unserInfo','courseInfo','courseCategory'));
	}
	
	public function edit_course_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']                = $request->name;
		$dataArray['status']              = $request->status;
		$dataArray['description']         = $request->description;
		$dataArray['course_category_id']  = $request->course_category_id;
		
		if(isset($request->course_image)){
			
			$courseInfo = Course::where('user_id',Auth::user()->id)->where('id',$request->course_id)->first();
			if(!empty($courseInfo->image)){
				$getFilePath = public_path('uploads/course/').$courseInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->course_image->extension();  
            $request->course_image->move(public_path('uploads/course/'), $imageName); 
			$dataArray['image'] = $imageName; 
		}
		
		Course::where('user_id',Auth::user()->id)->where('id',$request->course_id)->update($dataArray);
        return redirect('/trainer/course')->with('success', 'You have successfully updated!');
	}
	
	public function delete_course($course_id){
		
		$courseInfo = Course::where('user_id',Auth::user()->id)->where('id',$course_id)->first();
		if(!empty($courseInfo->image)){
			$getFilePath = public_path('uploads/course/').$courseInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Course::where('user_id',Auth::user()->id)->where('id',$course_id)->delete();
		return redirect('/trainer/course')->with('success', 'You have successfully deleted!');
	}
	
	#COURSE CONTENT
	public function get_course_content(){
		
		$user_id             = Auth::user()->id;
		$unserInfo           = User::where('id',$user_id)->first();
		$coursecontentInfo   = Coursecontent::select('course_content.*','users.name as user_name','course.name as course_name')->join('users','users.id','=','course_content.user_id')->join('course','course.id','=','course_content.course_id')->where('course_content.user_id',$user_id)->get();
		
		return view('trainer.course_content',compact('unserInfo','coursecontentInfo'));
	}
	 
	public function add_course_content(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseInfo      = Course::where('user_id',$user_id)->get();
		
		return view('trainer.add_course_content',compact('unserInfo','courseInfo'));
	}
	
	public function add_course_content_action(Request $request){
		
		$request->validate([
            'course_id'      => ['required'],
            'pdf_link'       => ['required'],
            'zoom_link'      => ['required'],
            'description'    => ['required'],
			'video'          => ['mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'],
        ]);
		
		$coursecontent = new Coursecontent;
		$coursecontent->course_id     = $request->course_id;
		$coursecontent->zoom_link     = $request->zoom_link;
		$coursecontent->user_id       = Auth::user()->id;
		$coursecontent->description   = $request->description;
		
		if(isset($request->pdf_link)){
			$imageNamePdf = time().'.'.$request->pdf_link->extension();  
			$request->pdf_link->move(public_path('uploads/course_content/'), $imageNamePdf); 
			$coursecontent->pdf_link = $imageNamePdf; 
		}
		
		if(isset($request->video)){
		    $imageName = time().'.'.$request->video->extension();  
            $request->video->move(public_path('uploads/course_content/'), $imageName); 
			$coursecontent->video = $imageName; 
		}
		$coursecontent->save();
		
        return redirect('/trainer/course-content')->with('success', 'You have successfully added!');
	}
	
	public function edit_course_content($course_content_id){

		$user_id            = Auth::user()->id;
		$unserInfo          = User::where('id',$user_id)->first();
		$courseInfo         = Course::where('user_id',$user_id)->get();
		$courseContentInfo  = Coursecontent::where('user_id',$user_id)->where('id',$course_content_id)->first();
		return view('trainer.edit_course_content',compact('unserInfo','courseInfo', 'courseContentInfo'));
	}
	
	public function edit_course_content_action(Request $request){
		
		$dataArray = array();
		$dataArray['course_id']    = $request->course_id;
		$dataArray['zoom_link']    = $request->zoom_link;
		$dataArray['description']  = $request->description;
		$dataArray['status']       = $request->status;
		
		if(isset($request->pdf_link)){
			$coursecontentInfo = Coursecontent::where('user_id',Auth::user()->id)->where('id',$request->course_content_id)->first();
			if(!empty($coursecontentInfo->pdf_link)){
				$getFilePath = public_path('uploads/course_content/').$coursecontentInfo->pdf_link;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
			$imageName = time().'.'.$request->pdf_link->extension();  
			$request->pdf_link->move(public_path('uploads/course_content/'), $imageName); 
			$dataArray['pdf_link'] = $imageName; 
		}
		
		if(isset($request->video)){
			$coursecontentInfo = Coursecontent::where('user_id',Auth::user()->id)->where('id',$request->course_content_id)->first();
			if(!empty($coursecontentInfo->video)){
				$getFilePath = public_path('uploads/course_content/').$coursecontentInfo->video;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
			$imageName = time().'.'.$request->video->extension();  
			$request->video->move(public_path('uploads/course_content/'), $imageName); 
			$dataArray['video'] = $imageName; 
		}
		Coursecontent::where('user_id',Auth::user()->id)->where('id',$request->course_content_id)->update($dataArray);
        return redirect('/trainer/course-content')->with('success', 'You have successfully updated!');
	}
	
	public function delete_course_content($course_content_id){
		
		$coursecontentInfo = Coursecontent::where('user_id',Auth::user()->id)->where('id',$course_content_id)->first();
		if(!empty($coursecontentInfo->video)){
			$getFilePath = public_path('uploads/course_content/').$coursecontentInfo->video;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		
		if(!empty($coursecontentInfo->pdf_link)){
			$getFilePathPdf = public_path('uploads/course_content/').$coursecontentInfo->pdf_link;
			if(file_exists($getFilePathPdf)){
				unlink($getFilePathPdf);
			}
		}
		Coursecontent::where('user_id',Auth::user()->id)->where('id',$course_content_id)->delete();
		return redirect('/trainer/course-content')->with('success', 'You have successfully deleted!');
	}
	
	#TRAINING
	public function get_training(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$trainingInfo    = Training::select('training.*','course_category.name as category_name')->join('course_category','course_category.id','=','training.training_category_id')->where('training.user_id',$user_id)->where('training.status','1')->get();
		return view('trainer.trainings',compact('unserInfo','trainingInfo'));
		
	}
	
	public function add_new_training(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();
		return view('trainer.add_new_training',compact('unserInfo','courseCategory')); 
		
	}
	
	public function add_new_training_action(Request $request){
		
		$request->validate([
            'name'               	=> ['required', 'unique:training'],
            'short_description'  	=> ['required'],
            'description'        	=> ['required'],
            'training_image'       	=> 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		$training = new Training;
		
		$slug  						  = Str::slug($request->name);
		
		$training->name                = $request->name;
		$training->slug                = $slug;
		$training->short_description   = $request->short_description;
		$training->training_category_id= $request->training_category_id;
		$training->user_id             = Auth::user()->id;
		$training->description         = $request->description;
		
		if(isset($request->training_image)){
		    $imageName = time().'.'.$request->training_image->extension();  
            $request->training_image->move(public_path('uploads/training/'), $imageName); 
			$training->image = $imageName; 
		}
		$training->save();
		
        return redirect('/trainer/training')->with('success', 'You have successfully added!');
	}
	
	public function edit_training($training_id){

		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$trainingInfo    = Training::where('user_id',$user_id)->where('id',$training_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();		
		return view('trainer.edit_training',compact('unserInfo','trainingInfo','courseCategory'));
		
	}
	
	public function edit_training_action(Request $request){
		
		$dataArray = array();
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Training::where('slug',$getSlug)->whereNotIn('id',array($request->training_id))->count();
        
        if($getSlugRes>0){
            return redirect('/trainer/training')->with('error', 'This name is all ready taken!!');
        }
		
		$dataArray['name']                = $request->name;
		$dataArray['slug']                = $getSlug;
		$dataArray['short_description']   = $request->short_description;
		$dataArray['description']         = $request->description;
		$dataArray['status']              = $request->status;
		$dataArray['training_category_id']= $request->training_category_id;
		
		if(isset($request->training_image)){
			
			$trainingInfo = Training::where('user_id',Auth::user()->id)->where('id',$request->training_id)->first();
			if(!empty($trainingInfo->image)){
				$getFilePath = public_path('uploads/training/').$trainingInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->training_image->extension();  
            $request->training_image->move(public_path('uploads/training/'), $imageName); 
			$dataArray['image'] = $imageName; 
		}
		
		Training::where('user_id',Auth::user()->id)->where('id',$request->training_id)->update($dataArray);
        return redirect('/trainer/training')->with('success', 'You have successfully updated!');
	}
	
	public function delete_training($training_id){
		
		$trainingInfo = Training::where('user_id',Auth::user()->id)->where('id',$training_id)->first();
		if(!empty($trainingInfo->image)){
			$getFilePath = public_path('uploads/training/').$trainingInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Training::where('user_id',Auth::user()->id)->where('id',$training_id)->delete();
		return redirect('/trainer/training')->with('success', 'You have successfully deleted!');
	}
	
	#CHAT
	public function chat(Request $request){
		
		$getUserList     = User::where('role','!=','admin')->whereNotIn('id',array(Auth::user()->id))->get();
		return view('trainer.chat',compact('getUserList'));
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
