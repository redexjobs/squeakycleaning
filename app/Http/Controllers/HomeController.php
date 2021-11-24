<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Services;
use Auth;
use URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //dd('Comming Soon....');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {		
        return view('home');
    }
	
	public function doctors(){
		
		$getDoctors = User::select('users.*','specialities.name as specialities_name','specialities.image as specialities_image')->join('specialities','specialities.id','=','users.specialist_id')->where('users.role','Doctor')->get();
		
		return view('doctors',compact('getDoctors'));
	}
	
	public function all_courses(){
		
		$courseCategoryList = Coursecategory::where('status','1')->get();

		$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role','course_category.name as course_category_name')->join('course_category','course_category.id','=','course.course_category_id')->join('users','users.id','=','course.user_id')->where('course.status','1')->get();

		return view('all_course',compact('courseInfo','courseCategoryList'));
	}
	
	public function search_course_action(Request $request){
		
		$courseCategoryList = Coursecategory::where('status','1')->get();
		
		if(!empty($request->course_name) && !empty($request->course_category_id)){
			
			$search      = $request->course_name; 
			$categoryIDS = $request->course_category_id;
			
			$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role','course_category.name as course_category_name')->join('course_category','course_category.id','=','course.course_category_id')->join('users','users.id','=','course.user_id')->where('course.status','1')->where('course.name','LIKE','%'.$search.'%')->whereIn('course.course_category_id',$categoryIDS)->get();
			
		}elseif(!empty($request->course_name)){
			
			$search = $request->course_name; 
			
			$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role','course_category.name as course_category_name')->join('course_category','course_category.id','=','course.course_category_id')->join('users','users.id','=','course.user_id')->where('course.status','1')->where('course.name','LIKE','%'.$search.'%')->get();
			
		}elseif(!empty($request->course_category_id)){
			
			$categoryIDS = $request->course_category_id; 

			$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role','course_category.name as course_category_name')->join('course_category','course_category.id','=','course.course_category_id')->join('users','users.id','=','course.user_id')->where('course.status','1')->whereIn('course.course_category_id',$categoryIDS)->get();
			
		}else{
			
			$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role','course_category.name as course_category_name')->join('course_category','course_category.id','=','course.course_category_id')->join('users','users.id','=','course.user_id')->where('course.status','1')->get();
		}
		
		return view('all_course',compact('courseInfo','courseCategoryList'));
		
	}
	
	public function subscription_plan(){
		
		$subscriptionList = Subscription::where('status','1')->get();
		return view('subscription_plan',compact('subscriptionList'));
	}
	
	public function subscription_details($subscripiton_id){
		
		$subscriptionInfo = Subscription::where('id',$subscripiton_id)->first();
		return view('subscription_plan_details',compact('subscriptionInfo'));
	}
	
	public function course_details($course_id){
		
		$courseInfo  = Course::select('course.*','users.name as user_name','users.role as user_role')->join('users','users.id','=','course.user_id')->where('course.status','1')->where('course.id',$course_id)->first();
		
		$coursecontentInfo   = Coursecontent::where('course_id',$course_id)->where('status','1')->get();

		return view('course_details',compact('courseInfo','coursecontentInfo'));
	}
	
	public function doctor_details($doctor_id){
		
		$getSundaySlot     = Slot::where('user_id',$doctor_id)->where('slot_day','Sunday')->where('status','1')->get();
		if($getSundaySlot->isEmpty()==true){ $getSundaySlot = array(); }
		
		$getMondaySlot     = Slot::where('user_id',$doctor_id)->where('slot_day','Monday')->where('status','1')->get();
		if($getMondaySlot->isEmpty()==true){ $getMondaySlot = array(); }
		
		
		$getTuesdaySlot    = Slot::where('user_id',$doctor_id)->where('slot_day','Tuesday')->where('status','1')->get();
		if($getTuesdaySlot->isEmpty()==true){ $getTuesdaySlot = array(); }
		
		$getWednesdaySlot  = Slot::where('user_id',$doctor_id)->where('slot_day','Wednesday')->where('status','1')->get();
		if($getWednesdaySlot->isEmpty()==true){ $getWednesdaySlot = array(); }
		
		$getThursdaySlot   = Slot::where('user_id',$doctor_id)->where('slot_day','Thursday')->where('status','1')->get();
		if($getThursdaySlot->isEmpty()==true){ $getThursdaySlot = array(); }
		
		$getFridaySlot     = Slot::where('user_id',$doctor_id)->where('slot_day','Friday')->where('status','1')->get();
		if($getFridaySlot->isEmpty()==true){ $getFridaySlot = array(); }
		
		$getSaturdaySlot   = Slot::where('user_id',$doctor_id)->where('slot_day','Saturday')->where('status','1')->get();
		if($getSaturdaySlot->isEmpty()==true){ $getSaturdaySlot = array(); }
		
		$doctorInfo = User::select('users.*','specialities.name as specialities_name','specialities.image as specialities_image')->join('specialities','specialities.id','=','users.specialist_id')->where('users.role','Doctor')->where('users.id',$doctor_id)->first();
		
		$getFeaturesArray = explode(',',$doctorInfo->features_id);
		$featuresData     = array();
		foreach($getFeaturesArray as $feature_id){
			$getFeatures     = Features::where('id',$feature_id)->where('status','1')->first();
			if(!empty($getFeatures->name)){
				$featuresData[]  = array(
				   'features_name'  => $getFeatures->name,
				   'features_image' => $getFeatures->image,
				);
			}
		}
		$doctorInfo->features_data = $featuresData;
		return view('doctor_details',compact('doctorInfo','getSundaySlot','getMondaySlot','getTuesdaySlot','getWednesdaySlot','getThursdaySlot','getFridaySlot','getSaturdaySlot'));
	}
	
	public function appointment_booking($doctor_id){
		
		$getSlots      = Slot::where('user_id',$doctor_id)->where('status','1')->get();
		$doctorInfo    = User::where('id',$doctor_id)->where('status','1')->first();
		$customerInfo  = User::where('id',Auth::user()->id)->where('status','1')->first();
		
		return view('appointment_booking',compact('doctorInfo','getSlots','customerInfo'));
	}
	public function appointment_booking_action(Request $request){
		
		$request->validate([
            'doctor_id'            => ['required'],
            'customer_id'          => ['required'],
            'first_name'           => ['required'],
            'last_name'            => ['required'],
            'email'                => ['required'],
            'doctor_name'          => ['required'],
            'hospital_name'        => ['required'],
            'mobile_no'            => ['required'],
            'booking_slot_id'      => ['required'],
            'reason_appointment'   => ['required'],
        ]);
		
		$appointment_booking 						= new Appointmentbooking;
		$appointment_booking->doctor_id         	= $request->doctor_id;
		$appointment_booking->customer_id       	= $request->customer_id;
		$appointment_booking->first_name			= $request->first_name;
		$appointment_booking->last_name 			= $request->last_name;
		$appointment_booking->email 				= $request->email;
		$appointment_booking->doctor_name 			= $request->doctor_name;
		$appointment_booking->hospital_name 		= $request->hospital_name;
		$appointment_booking->mobile_no 			= $request->mobile_no;
		$appointment_booking->booking_slot_id 		= $request->booking_slot_id;
		$appointment_booking->reason_appointment	= $request->reason_appointment;
		$appointment_booking->save();
		
		return redirect('/success')->with('success', 'Appointment booked Successfully!'); 
	}
	
	public function booking_success(){
		
		return view('success');
	}
	
	public function search_doctor(Request $request){
		
		if(!empty($request->search) && !empty($request->specialist_id)){
			
			$search        = $request->search;
			$specialistIDS = $request->specialist_id;
			$genderType    = $request->gender_type;
			
			$getSearchData = Specialities::select('users.*','specialities.name as specialities_name','specialities.id as specialities_id','specialities.image as specialities_image')->join('users','users.specialist_id','=','specialities.id')->where('specialities.name','LIKE','%'.$search.'%')->whereIn('specialities.id',$specialistIDS)->where('specialities.status','1')->where('users.role','Doctor')->get();
			
		}elseif(!empty($request->gender_type)){
				
			$getSearchData = Specialities::select('users.*','specialities.name as specialities_name','specialities.id as specialities_id','specialities.image as specialities_image')->join('users','users.specialist_id','=','specialities.id')->whereIn('users.gender',$request->gender_type)->where('specialities.status','1')->where('users.role','Doctor')->get();
			
		}elseif(!empty($request->specialist_id)){
			
			$getSearchData = Specialities::select('users.*','specialities.name as specialities_name','specialities.id as specialities_id','specialities.image as specialities_image')->join('users','users.specialist_id','=','specialities.id')->whereIn('specialities.id',$request->specialist_id)->where('specialities.status','1')->where('users.role','Doctor')->get();
			
		}elseif(!empty($request->search)){
			
			$search  = $request->search;
			
			$getSearchData = Specialities::select('users.*','specialities.name as specialities_name','specialities.id as specialities_id','specialities.image as specialities_image')->join('users','users.specialist_id','=','specialities.id')->where('specialities.name','LIKE','%'.$search.'%')->where('specialities.status','1')->where('users.role','Doctor')->get();
			
		}else{
			
			$getSearchData = User::select('users.*','specialities.name as specialities_name','specialities.image as specialities_image')->join('specialities','specialities.id','=','users.specialist_id')->where('users.role','Doctor')->get();
			
		}
		
		$getSpecialities = Specialities::where('status','1')->get();
		
		return view('search_doctors',compact('getSpecialities','getSearchData'));
	}
	
	public function blog(){
		
		$blogList = Blog::where('status','1')->get();
		return view('blogs',compact('blogList'));
	}
	
	public function blog_details($slug){
		
		$blogCat    = Category::where('status','1')->get();
		
		if(isset($blogCat)){
			$blogCountArray = array();
			foreach($blogCat as $blogCategory){
				$totalCatCountPost = Blog::where('category_id',$blogCategory->id)->where('status','1')->count();
				$blogCountArray[$blogCategory->id]  = $totalCatCountPost;
			}
		}
		
		$tagCat     = Tag::where('status','1')->get();
		$latestPost = Blog::where('status','1')->orderby('id','desc')->limit('5')->get();
		$blogInfo   = Blog::select('blog.*','category.name as category_name')->join('category','category.id','=','blog.category_id')->where('blog.slug',$slug)->where('blog.status','1')->first();

		return view('blog_details',compact('blogInfo','blogCat','tagCat','latestPost','blogCountArray'));
	}
	
	public function blog_category_search($slug){
		
		$blogCat    = Category::where('status','1')->get();
		if(isset($blogCat)){
			$blogCountArray = array();
			foreach($blogCat as $blogCategory){
				$totalCatCountPost = Blog::where('category_id',$blogCategory->id)->where('status','1')->count();
				$blogCountArray[$blogCategory->id]  = $totalCatCountPost;
			}
		}
		$tagCat     = Tag::where('status','1')->get();
		$latestPost = Blog::where('status','1')->orderby('id','desc')->limit('5')->get();
		
		$blogList = Blog::select('blog.*','category.name as category_name')->join('category','category.id','=','blog.category_id')->where('category.slug',$slug)->where('blog.status','1')->get();
		 
		return view('search',compact('blogList','blogCat','tagCat','latestPost','blogCountArray'));
	}
	
	public function blog_tag_search($slug){
		
		$blogCat    = Category::where('status','1')->get();
		if(isset($blogCat)){
			$blogCountArray = array();
			foreach($blogCat as $blogCategory){
				$totalCatCountPost = Blog::where('category_id',$blogCategory->id)->where('status','1')->count();
				$blogCountArray[$blogCategory->id]  = $totalCatCountPost;
			}
		}
		$tagCat     = Tag::where('status','1')->get();
		$latestPost = Blog::where('status','1')->orderby('id','desc')->limit('5')->get();
		
		$blogList = Blog::select('blog.*','tag.name as tag_name')->join('tag','tag.id','=','blog.tag_id')->where('tag.slug',$slug)->where('blog.status','1')->get();
		 
		return view('search',compact('blogList','blogCat','tagCat','latestPost','blogCountArray'));
	}
	
	public function blog_search(Request $request){

		$blogCat    = Category::where('status','1')->get();
		if(isset($blogCat)){
			$blogCountArray = array();
			foreach($blogCat as $blogCategory){
				$totalCatCountPost = Blog::where('category_id',$blogCategory->id)->where('status','1')->count();
				$blogCountArray[$blogCategory->id]  = $totalCatCountPost;
			}
		}
		$tagCat     = Tag::where('status','1')->get();
		$latestPost = Blog::where('status','1')->orderby('id','desc')->limit('5')->get();
		
		if(!empty($request->search)) {
			
			$search   = $request->search;
		    $blogList = Blog::where('name','LIKE','%'.$search.'%')->where('status','1')->get();
			
		}else{
			$blogList = Blog::where('status','1')->get();
		}
		 
		return view('search',compact('blogList','blogCat','tagCat','latestPost','blogCountArray'));
		
	}
	
	public function about_us(){
		
		$getDoctors = User::select('users.*','specialities.name as specialities_name','specialities.image as specialities_image')->join('specialities','specialities.id','=','users.specialist_id')->where('users.role','Doctor')->where('users.status','1')->get();
		
		return view('about_us',compact('getDoctors'));
	}
	
	public function contact_us(){
		return view('contact_us');
	}
	
	public function term_conditions(){
		return view('term_conditions');
	}
	
	public function privacy_policy(){
		return view('privacy_policy');
	}
	public function specialization(){
		
		$getSpecialities = Specialities::where('status','1')->get();
		return view('specialization',compact('getSpecialities'));
	}
	
	public function shop_page(){
		
		$getProducts = Product::select('product.*','users.name as user_name','shop_category.name as category_name')->join('users','users.id','=','product.user_id')->join('shop_category','shop_category.id','=','product.category_id')->get();
		return view('shop_page',compact('getProducts'));
	}
	
	public function product_details($product_slug){
		
		$product_details = Product::select('product.*','users.name as user_name','shop_category.name as category_name')->join('users','users.id','=','product.user_id')->join('shop_category','shop_category.id','=','product.category_id')->where('product.slug',$product_slug)->first();
		
		return view('shop_details',compact('product_details'));
	}
	
	public function services_page(){		
		$servicesList = Services::where('status','1')->get();
		return view('services_page',compact('servicesList')); 
	}
	
	public function services_details($service_slug){
		
		$latestservice = Services::where('status','1')->orderby('id','desc')->limit('5')->get();
		$serviceInfo   = Services::select('services.*')->where('services.slug',$service_slug)->where('services.status','1')->first(); 
		$currentURL = URL::current();
		
		//$getCommentList   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->get();
		
		$parentComments   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->where('parent_id',NULL)->get(); 
		
		$getTotalComment   = Servicescomment::select('services_comment.*','users.name as user_name','users.profile_pic as user_pic')->join('users','users.id','=','services_comment.user_id')->where('services_comment.services_id',$serviceInfo->id)->count();
		
		return view('services_details',compact('latestservice','serviceInfo','currentURL','getTotalComment','parentComments')); 
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
		
		return redirect($request->current_url)->with('success', 'Your question has been submited successfully!'); 
	}
	
	public function services_search(Request $request){
		
		$search = $request->search;
		$latestservice = Services::where('status','1')->orderby('id','desc')->limit('5')->get();
		$servicesList  = Services::where('name','LIKE','%'.$search.'%')->where('status','1')->get(); 
		
		return view('services_page',compact('latestservice','servicesList'));
	}
	
	public function training_page(){
		$trainingList = Training::where('status','1')->get();
		return view('training_page',compact('trainingList'));
	}
	
	public function training_details($training_slug){
		
		$latesttraining = Training::where('status','1')->orderby('id','desc')->limit('5')->get();
		$trainingInfo   = Training::select('training.*')->where('training.slug',$training_slug)->where('training.status','1')->first(); 
		
		return view('training_details',compact('latesttraining','trainingInfo'));
	}
	
	public function training_search(Request $request){
		
		$search = $request->search;
		$latesttraining = Training::where('status','1')->orderby('id','desc')->limit('5')->get();
		$trainingList  = Training::where('name','LIKE','%'.$search.'%')->where('status','1')->get(); 
		
		return view('training_page',compact('latesttraining','trainingList')); 
	}
}
