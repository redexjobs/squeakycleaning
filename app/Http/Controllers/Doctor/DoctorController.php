<?php

namespace App\Http\Controllers\Doctor;

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
use App\Models\Slot;
use App\Models\Course;
use App\Models\Coursecategory;
use App\Models\Shopcategory;
use App\Models\Coursecontent;
use App\Models\Services;
use App\Models\Appointmentbooking;

use App\Models\Subscription;
use App\Models\Subscriptionuser;
use App\Models\Subscriptionuserhistory;
use App\Models\Servicescomment;
use App\Models\Serviceschat;

use App\Models\Product;

class DoctorController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('doctor');
    }

    public function index(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		$courseCount          = Course::where('user_id',$user_id)->count();
		$coursecontentCount   = Coursecontent::where('user_id',$user_id)->count();
		
		$getCurrentSubscriptionPlan = Subscriptionuser::select('subscription_user.*','subscription_plan.name as plan_name','subscription_plan.price as plan_price','subscription_plan.type as plan_type','subscription_plan.total_days as plan_days')->join('subscription_plan','subscription_plan.id','=','subscription_user.plan_id')->where('subscription_user.user_id',$user_id)->first();
		
        return view('doctor.dashboard',compact('unserInfo','SpecializeInfo','courseCount','coursecontentCount','getCurrentSubscriptionPlan'));
    }
	
	public function appointments(){
		
		$user_id             = Auth::user()->id;
		$unserInfo           = User::where('id',$user_id)->first();
		$SpecializeInfo      = Specialities::get();
		$getMyAppointment    = Appointmentbooking::select('users.*','appointment_booking.id as booking_id','appointment_booking.created_at as booking_date_time','appointment_booking.status as booking_status')->join('users','users.id','=','appointment_booking.customer_id')->where('appointment_booking.doctor_id',$user_id)->get();
		
		return view('doctor.appointments',compact('unserInfo','SpecializeInfo','getMyAppointment'));
	}
	
	public function my_pateints(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		$getMyPatient    = Appointmentbooking::select('users.*')->join('users','users.id','=','appointment_booking.customer_id')->where('doctor_id',$user_id)->get();
		return view('doctor.my_pateints',compact('unserInfo','SpecializeInfo','getMyPatient'));
	}
	
	public function schedule_timing(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		$getSundaySlot     = Slot::where('user_id',$user_id)->where('slot_day','Sunday')->get();
		$getMondaySlot     = Slot::where('user_id',$user_id)->where('slot_day','Monday')->get();
		$getTuesdaySlot    = Slot::where('user_id',$user_id)->where('slot_day','Tuesday')->get();
		$getWednesdaySlot  = Slot::where('user_id',$user_id)->where('slot_day','Wednesday')->get();
		$getThursdaySlot   = Slot::where('user_id',$user_id)->where('slot_day','Thursday')->get();
		$getFridaySlot     = Slot::where('user_id',$user_id)->where('slot_day','Friday')->get();
		$getSaturdaySlot   = Slot::where('user_id',$user_id)->where('slot_day','Saturday')->get();
		$getCurrentDayName = date('l');
		
		return view('doctor.schedule_timing',compact('getSundaySlot','getMondaySlot','getTuesdaySlot','getWednesdaySlot','getThursdaySlot','getFridaySlot','getSaturdaySlot','unserInfo','SpecializeInfo','getCurrentDayName'));
	}
	
	public function add_new_slot(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('doctor.add_new_slot',compact('unserInfo','SpecializeInfo'));
	}
	
	public function add_new_slot_sction(Request $request){
		
		$request->validate([
            'time_duration_slot'  => ['required'],
            'slot_day'            => ['required'],
            'from_time'           => ['required'],
			'from_am_pm'          => ['required'],
			'to_time'             => ['required'],
			'to_am_pm'            => ['required'],
        ]);
		
		$slot = new Slot;
		$slot->time_duration_slot = $request->time_duration_slot;
		$slot->slot_day           = $request->slot_day;
		$slot->from_time          = $request->from_time;
		$slot->from_am_pm         = $request->from_am_pm;
		$slot->to_time            = $request->to_time;
		$slot->to_am_pm           = $request->to_am_pm;
		$slot->user_id            = Auth::user()->id;
		$slot->save();
		
        return redirect('/doctor/schedule-timing')->with('success', 'You have successfully added!');
	}
	
	public function slot_edit($slot_id){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		$SlotInfo        = Slot::where('id',$slot_id)->where('user_id',$user_id)->first();
		
		return view('doctor.edit_new_slot',compact('SlotInfo','unserInfo','SpecializeInfo'));
		
	}
	
	public function slot_edit_action(Request $request){
		
		$request->validate([
            'time_duration_slot'  => ['required'],
            'slot_day'            => ['required'],
            'from_time'           => ['required'],
			'from_am_pm'          => ['required'],
			'to_time'             => ['required'],
			'to_am_pm'            => ['required'],
			'status'              => ['required'],
        ]);
		
		$dataArray = array();
		$dataArray['time_duration_slot']    = $request->time_duration_slot;
		$dataArray['slot_day']     			= $request->slot_day;
		$dataArray['from_time']    			= $request->from_time;
		$dataArray['from_am_pm']   			= $request->from_am_pm;
		$dataArray['to_time']      			= $request->to_time;
		$dataArray['to_am_pm']     			= $request->to_am_pm;
		$dataArray['status']     			= $request->status;
		
		Slot::where('id',$request->slot_id)->where('user_id',Auth::user()->id)->update($dataArray);
        return redirect('/doctor/schedule-timing')->with('success', 'You have successfully updated!');

	}
	
	public function slot_delete($slot_id){
		
		Slot::where('id',$slot_id)->where('user_id',Auth::user()->id)->delete();
		return redirect('/doctor/schedule-timing')->with('success', 'You have successfully deleted!');
	}
	
	public function profile_setting(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		$featuresInfo    = Features::get();

		return view('doctor.profile_setting',compact('unserInfo','SpecializeInfo','featuresInfo'));
	}
	
	public function profile_setting_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']                 = $request->first_name;
		$dataArray['last_name']            = $request->last_name;
		$dataArray['mobile_no']            = $request->mobile_no;
		$dataArray['gender']               = $request->gender;
		//$dataArray['dob']                  = $request->dob;
		$dataArray['about_me']             = $request->about_me;
		$dataArray['doctor_profile_name']  = $request->doctor_profile_name;
		$dataArray['specialist_id']        = $request->specialist_id;
		$dataArray['address']              = $request->address;
		$dataArray['city']                 = $request->city;
		$dataArray['state']                = $request->state;
		$dataArray['zip_code']             = $request->zip_code;
		$dataArray['country']              = $request->country;
		
		if(!empty($request->features_id)){
			$dataArray['features_id']     = implode(',',$request->features_id);
		}
		
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
        return redirect('/doctor/profile-setting')->with('success', 'You have successfully updated!');
	}
	
	public function change_password(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$SpecializeInfo  = Specialities::get();
		
		return view('doctor.change_password',compact('unserInfo','SpecializeInfo'));
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
		//$courseInfo      = Course::where('user_id',$user_id)->get();
		$courseInfo      = Course::select('course.*','course_category.name as category_name')->join('course_category','course_category.id','=','course.course_category_id')->where('course.user_id',$user_id)->where('course.status','1')->get();
		
		return view('doctor.courses',compact('unserInfo','courseInfo'));
	}
	
	public function add_new_course(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();
		
		return view('doctor.add_new_course',compact('unserInfo','courseCategory'));
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
		
        return redirect('/doctor/course')->with('success', 'You have successfully added!');
	}
	
	public function edit_course($course_id){

		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseInfo      = Course::where('user_id',$user_id)->where('id',$course_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();
		
		return view('doctor.edit_course',compact('unserInfo','courseInfo','courseCategory'));
	}
	
	public function edit_course_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']         = $request->name;
		$dataArray['status']       = $request->status;
		$dataArray['description']  = $request->description;
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
        return redirect('/doctor/course')->with('success', 'You have successfully updated!');
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
		return redirect('/doctor/course')->with('success', 'You have successfully deleted!');
	}
	
	
	
	#COURSE CONTENT
	public function get_course_content(){
		
		$user_id             = Auth::user()->id;
		$unserInfo           = User::where('id',$user_id)->first();
		$coursecontentInfo   = Coursecontent::select('course_content.*','users.name as user_name','course.name as course_name')->join('users','users.id','=','course_content.user_id')->join('course','course.id','=','course_content.course_id')->where('course_content.user_id',$user_id)->get();
		
		return view('doctor.course_content',compact('unserInfo','coursecontentInfo'));
	}
	 
	public function add_course_content(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseInfo      = Course::where('user_id',$user_id)->get();
		
		return view('doctor.add_course_content',compact('unserInfo','courseInfo'));
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
		
        return redirect('/doctor/course-content')->with('success', 'You have successfully added!');
	}
	
	public function edit_course_content($course_content_id){

		$user_id            = Auth::user()->id;
		$unserInfo          = User::where('id',$user_id)->first();
		$courseInfo         = Course::where('user_id',$user_id)->get();
		$courseContentInfo  = Coursecontent::where('user_id',$user_id)->where('id',$course_content_id)->first();
		return view('doctor.edit_course_content',compact('unserInfo','courseInfo', 'courseContentInfo'));
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
        return redirect('/doctor/course-content')->with('success', 'You have successfully updated!');
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
		return redirect('/doctor/course-content')->with('success', 'You have successfully deleted!');
	}
	
	
	#SERVICES
	public function get_service(){ 
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$serviceInfo     = Services::where('user_id',$user_id)->get();
		//$courseInfo      = Services::select('course.*','course_category.name as category_name')->join('course_category','course_category.id','=','course.course_category_id')->where('course.user_id',$user_id)->where('course.status','1')->get();
		
		return view('doctor.services',compact('unserInfo','serviceInfo'));
	}
	
	public function add_new_service(){
		
		$user_id         = Auth::user()->id;
		$unserInfo       = User::where('id',$user_id)->first();
		$courseCategory  = Coursecategory::where('status','1')->get();
		
		//return view('doctor.add_new_course',compact('unserInfo','courseCategory'));
		return view('doctor.add_new_service'); 
	}
	
	public function add_new_service_action(Request $request){
		
		$request->validate([
            //'name'               => ['required', 'unique:service'],
            'name'               => ['required'],
            'session_time'       => ['required'],
            'short_description'  => ['required'],
            'description'        => ['required'],
            'service_image'      => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		$slug  						  = Str::slug($request->name);
		
		$service = new Services;
		$service->name                = $request->name;
		$service->user_id             = Auth::user()->id;
		$service->slug          	  = $slug;
		$service->session_time        = $request->session_time;
		$service->short_description   = $request->short_description;
		$service->description         = $request->description;
		
		if(isset($request->service_image)){
		    $imageName = time().'.'.$request->service_image->extension();  
            $request->service_image->move(public_path('uploads/service/'), $imageName); 
			$service->image = $imageName; 
		}
		$service->save();
		
        return redirect('/doctor/service')->with('success', 'You have successfully added!');
	}
	
	public function edit_service($service_id){

		$user_id     = Auth::user()->id;
		$unserInfo   = User::where('id',$user_id)->first();
		$serviceInfo = Services::where('user_id',$user_id)->where('id',$service_id)->first(); 
		
		return view('doctor.edit_service',compact('unserInfo','serviceInfo')); 
	}
	
	public function edit_service_action(Request $request){
		
		$dataArray = array();
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Services::where('slug',$getSlug)->whereNotIn('id',array($request->service_id))->count();
        
        if($getSlugRes>0){
            return redirect('/doctor/service')->with('error', 'This name is all ready taken!!');
        }
		
		
		$dataArray['name']         		= $request->name;
		$dataArray['slug']          	= $getSlug;
		$dataArray['session_time']     	= $request->session_time;
		$dataArray['short_description']	= $request->short_description;
		$dataArray['status']       		= $request->status;
		$dataArray['description'] 	 	= $request->description;
		
		if(isset($request->service_image)){
			
			$serviceInfo = Services::where('user_id',Auth::user()->id)->where('id',$request->service_id)->first();
			if(!empty($serviceInfo->image)){
				$getFilePath = public_path('uploads/service/').$serviceInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->service_image->extension();  
            $request->service_image->move(public_path('uploads/service/'), $imageName); 
			$dataArray['image'] = $imageName; 
		}
		
		Services::where('user_id',Auth::user()->id)->where('id',$request->service_id)->update($dataArray);
        return redirect('/doctor/service')->with('success', 'You have successfully updated!');
	}
	
	public function delete_service($service_id){
		
		$serviceInfo = Services::where('user_id',Auth::user()->id)->where('id',$service_id)->first();
		if(!empty($serviceInfo->image)){
			$getFilePath = public_path('uploads/service/').$serviceInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Services::where('user_id',Auth::user()->id)->where('id',$service_id)->delete();
		return redirect('/doctor/service')->with('success', 'You have successfully deleted!');
	}
	
	public function view_comments($service_slug){
		
		$serviceInfo   = Services::select('services.*')->where('services.user_id',Auth::user()->id)->where('services.slug',$service_slug)->where('services.status','1')->first(); 
		
		$currentURL = URL::current();
		
		//$getCommentList   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->get(); 
		
		$parentComments   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->where('parent_id',NULL)->get(); 
		
		$getTotalComment   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->count();
		
		return view('doctor.services_comment_list',compact('serviceInfo','currentURL','parentComments','getTotalComment'));
	}
	
	public function services_comment_action(Request $request){
		
		$services_comment = new Servicescomment;
		$services_comment->parent_id   = $request->parent_id;
		$services_comment->name        = $request->q_name;
		$services_comment->email       = $request->q_email;
		$services_comment->comment     = $request->q_question;
		$services_comment->user_id     = $request->from_id;
		$services_comment->services_id = $request->services_id;
		$services_comment->save();
		
		return redirect($request->current_url)->with('success', 'Your answer has been submited successfully!'); 
	}
	
	#CHAT
	public function chat(Request $request){
		
		$getUserList     = User::where('role','!=','admin')->whereNotIn('id',array(Auth::user()->id))->get();
		return view('doctor.chat',compact('getUserList'));
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
	
	#PRODUCT
	public function all_product(){
		
		$user_id     = Auth::user()->id;
		$unserInfo   = User::where('id',$user_id)->first();
		
		$getProducts = Product::select('product.*','users.name as user_name','shop_category.name as category_name')->join('users','users.id','=','product.user_id')->join('shop_category','shop_category.id','=','product.category_id')->where('product.user_id',Auth::user()->id)->get();
		
        return view('doctor.product.product',compact('getProducts','unserInfo'));
    }
	
	public function add_product(){
		
		$user_id      = Auth::user()->id;
		$unserInfo    = User::where('id',$user_id)->first();
		$categoryList = Shopcategory::get();
		
        return view('doctor.product.add_product',compact('categoryList','unserInfo'));
    }
	
	public function add_product_action(Request $request){
		
		$request->validate([
            'name'               => ['required','unique:product'],
            'price'              => ['required'],
            'category_id'        => ['required'],
            'short_description'  => ['required'],
            'description'        => ['required'],
			'image'              => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		$slug  = Str::slug($request->name);
        $count = Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
		
		if(isset($request->image)){
		    $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/product/'), $imageName); 
		}
		
		$product = new Product;
		$product->user_id             = Auth::user()->id;
		$product->category_id         = $request->category_id;
		$product->name                = $request->name;
		$product->slug                = $slug;
		$product->price               = $request->price;
		$product->image               = $imageName;
		$product->short_description   = $request->short_description;
		$product->description         = $request->description;
		$product->save();
		
        return redirect('/doctor/product')->with('success', 'You have successfully added!');
    }
	
	public function edit_product($product_id){
		
		$user_id     = Auth::user()->id;
		$unserInfo   = User::where('id',$user_id)->first();
		
		$categoryList = Shopcategory::get();
		$productInfo  = Product::where('id',$product_id)->where('user_id',Auth::user()->id)->first();
		
        return view('doctor.product.edit_product',compact('productInfo','categoryList','unserInfo'));
	}
	
	public function edit_product_action(Request $request){
		
		$request->validate([
            'name'               => ['required'],
            'price'              => ['required'],
            'category_id'        => ['required'],
            'short_description'  => ['required'],
            'description'        => ['required'],
        ]);
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Product::where('slug',$getSlug)->whereNotIn('id',array($request->product_id))->count();
        
        if($getSlugRes>0){
            return redirect('/doctor/product')->with('error', 'This name is all ready taken!!');
        }
		
		$dataArray = array();
		
		$dataArray['user_id']             = Auth::user()->id;
		$dataArray['category_id']         = $request->category_id;
		$dataArray['name']                = $request->name;
		$dataArray['slug']                = $getSlug;
		$dataArray['price']               = $request->price;
		$dataArray['short_description']   = $request->short_description;
		$dataArray['description']         = $request->description;
		$dataArray['status']              = $request->status;
		
		if(isset($request->image)){
			
			$productInfo = Product::where('id',$request->product_id)->where('user_id',Auth::user()->id)->first();
			if(!empty($productInfo->image)){
				$getFilePath = public_path('uploads/product/').$productInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/product/'), $imageName);
			$dataArray['image']  = $imageName;			
		}
		
		Product::where('id',$request->product_id)->where('user_id',Auth::user()->id)->update($dataArray);

        return redirect('/doctor/product')->with('success', 'You have successfully updated!');
    }
	
	public function delete_product($product_id){
		
		$productInfo = Product::where('id',$product_id)->where('user_id',Auth::user()->id)->first();
		if(!empty($productInfo->image)){
			$getFilePath = public_path('uploads/product/').$productInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Product::where('id',$product_id)->delete();
		return redirect('/doctor/product')->with('success', 'You have successfully deleted!');
	}
}
