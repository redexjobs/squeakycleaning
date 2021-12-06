<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use URL;
use App;
use DB;
use Auth;
use Illuminate\Support\Str;
use file;
use App\Models\User;
use App\Models\Category;
use App\Models\Category_blog;
use App\Models\Setting;
use App\Models\Services;
use App\Models\Subscription;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.dashboard');
    }
	
	public function profile(){ 
        
		$profileInfo = Auth::user();
        return view('admin.profile',compact('profileInfo'));
    }
	
	public function update_profile(Request $request){
		
		$dataArray = array();
		
		$dataArray['name']  = $request->name;
		$dataArray['email'] = $request->email;
		
		User::where('id',Auth::user()->id)->where('role','admin')->update($dataArray);
		return redirect('/admin/profile')->with('success', 'Your profile has been updated successfully!');
	}
	
	public function all_users(){ 

		$users = User::whereIn('role',array('vendor','staff','user'))->get();
        return view('admin.user.users',compact('users'));
    }
	
	public function add_user(){ 
        return view('admin.user.add_user');
    }
	
	public function add_user_action(Request $request){ 
        
		$request->validate([
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
			'profile_picture'  => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		if(isset($request->profile_picture)){
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
		}
		
		User::create([
            'name'           => $request->name,
            'role'           => $request->role,
            'email'          => $request->email,
            'profile_pic'    => $imageName,
            'password'       => Hash::make($request->password),
        ]);
		return redirect('/admin/users')->with('success', 'You have successfully added!');
    }
	
	public function edit_user($user_id){
		
		$userInfo = User::where('id',$user_id)->first();
        return view('admin.user.edit_user',compact('userInfo'));
    }
	
	public function edit_user_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']    = $request->name;
		$dataArray['email']   = $request->email;
		$dataArray['role']    = $request->role;
		$dataArray['status']  = $request->status;
		
		if(isset($request->profile_picture)){
			
			$userInfo = User::where('id',$request->user_id)->first();
			if(!empty($userInfo->profile_pic)){
				$getFilePath = public_path('uploads/features/').$userInfo->profile_pic;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
			$dataArray['profile_pic']  = $imageName;
		}

		User::where('id',$request->user_id)->update($dataArray);
        return redirect('/admin/users')->with('success', 'You have successfully updated!');
    }
	
	public function delete_user($user_id){
		
		$unserInfo = User::where('id',$user_id)->first();
		if(!empty($unserInfo->image)){
			$getFilePath = public_path('uploads/user/').$unserInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		User::where('id',$user_id)->delete();
        return redirect('/admin/users')->with('success', 'You have successfully deleted!');
    }
	
	#GLOBAL SETTING
	public function global_setting(){
		
		$settingInfo = Setting::first();
		return view('admin.setting',compact('settingInfo'));
	}
	public function global_setting_action(Request $request){
		
		if(empty($request->setting_id)){
			
			if(isset($request->header_logo)){
				$headerLogo = time().'.'.$request->header_logo->extension();  
				$request->header_logo->move(public_path('uploads/setting/'), $headerLogo);  
			}
			
			if(isset($request->footer_logo)){
				$footerLogo = time().'.'.$request->footer_logo->extension();  
				$request->footer_logo->move(public_path('uploads/setting/'), $footerLogo);  
			}
			
			$setting = new Setting;
			$setting->admin_email     = $request->email;
			
			if(!empty($headerLogo)){
			  $setting->header_logo    = $headerLogo;
			}
			$setting->header_contact_details     = $request->header_contact_details;
			
			if(!empty($footerLogo)){
			  $setting->footer_logo    = $footerLogo;
			}
			$setting->footer_description      = $request->footer_description;
			$setting->footer_social_media     = $request->footer_social_media;
			$setting->footer_copyright        = $request->footer_copyright;
			$setting->footer_contact_details  = $request->footer_contact_details;
			
			if(isset($request->home_banner)){
				$home_banner = time().'.'.$request->home_banner->extension();  
				$request->home_banner->move(public_path('uploads/setting/'), $home_banner);  
			}
			if(isset($request->inner_banner)){
				$inner_banner = time().'.'.$request->inner_banner->extension();  
				$request->inner_banner->move(public_path('uploads/setting/'), $inner_banner);  
			}
			
			
			$setting->save();
			
			return redirect('/admin/setting')->with('success', 'You have successfully added!');
			
		}else{
			
			if(isset($request->header_logo)){
				$headerLogo = time().'.'.$request->header_logo->extension();  
				$request->header_logo->move(public_path('uploads/setting/'), $headerLogo);  
			}
			
			if(isset($request->footer_logo)){
				$footerLogo = time().'.'.$request->footer_logo->extension();  
				$request->footer_logo->move(public_path('uploads/setting/'), $footerLogo);  
			}
			$settingArray = array();
			$settingArray['admin_email']     = $request->email;
			
			if(!empty($headerLogo)){
			  $settingArray['header_logo']    = $headerLogo;
			}
			$settingArray['header_contact_details']     = $request->header_contact_details;
			
			if(!empty($footerLogo)){
			  $settingArray['footer_logo']    = $footerLogo;
			}
			$settingArray['footer_description']      = $request->footer_description;
			$settingArray['footer_social_media']     = $request->footer_social_media;
			$settingArray['footer_copyright']        = $request->footer_copyright;
			$settingArray['footer_contact_details']  = $request->footer_contact_details;
			
			if(isset($request->home_banner)){
				$home_banner = time().'.'.$request->home_banner->extension();  
				$request->home_banner->move(public_path('uploads/setting/'), $home_banner);  
			}
			if(!empty($home_banner)){
			  $settingArray['home_banner']    = $home_banner;
			}
			
			if(isset($request->inner_banner)){
				$inner_banner = time().'.'.$request->inner_banner->extension();  
				$request->inner_banner->move(public_path('uploads/setting/'), $inner_banner);  
			}
			if(!empty($inner_banner)){
			  $settingArray['inner_banner']    = $inner_banner;
			}
			
			
			
			Setting::where('id',$request->setting_id)->update($settingArray);
			return redirect('/admin/setting')->with('success', 'You have successfully updated!');	
		}
	}
	
	#CATEGORY
	public function all_category(){
		
		$category = Category::get();
        return view('admin.category.category',compact('category'));
    }
	
	public function add_category(){ 
        return view('admin.category.add_category');
    }
	
	public function add_category_action(Request $request){
		
		$request->validate([
            'name'           => ['required','unique:category'],
			'image'          => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description'    => ['required'],
        ]);
		
		$slug  = Str::slug($request->name);
        $count = Category::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
		
		if(isset($request->image)){
		    $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/category/'), $imageName); 
		}else{
			$imageName = '';
		}
		
		$category = new Category;
		$category->name          = $request->name;
		$category->slug          = $slug;
		$category->image         = $imageName;
		$category->description   = $request->description;
		$category->save();
		
        return redirect('/admin/category')->with('success', 'You have successfully added!');
    }
	
	public function edit_category($category_id){
		
		$categoryInfo = Category::where('id',$category_id)->first();
        return view('admin.category.edit_category',compact('categoryInfo'));
	}
	
	public function edit_category_action(Request $request){
		
		$request->validate([
            'name'           => ['required'],
            'description'    => ['required'],
        ]);
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Category::where('slug',$getSlug)->whereNotIn('id',array($request->category_id))->count();
        
        if($getSlugRes>0){
            return redirect('/admin/category')->with('error', 'This name is all ready taken!!');
        }
		
		$dataArray = array();
		$dataArray['name']        = $request->name;
		$dataArray['description'] = $request->description;
		
		if(isset($request->image)){
			
			$catInfo = Category::where('id',$request->category_id)->first();
			if(!empty($catInfo->image)){
				$getFilePath = public_path('uploads/category/').$catInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
			
		    $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/category/'), $imageName); 
			$dataArray['image'] = $imageName;
		}
		
		$dataArray['status']      = $request->status;
		$dataArray['slug']        = $getSlug;
		
		Category::where('id',$request->category_id)->update($dataArray);

        return redirect('/admin/category')->with('success', 'You have successfully updated!');
    }
	
	public function delete_category($category_id){
		
		$catInfo = Category::where('id',$category_id)->first();
		if(!empty($catInfo->image)){
			$getFilePath = public_path('uploads/category/').$catInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Category::where('id',$category_id)->delete();
		return redirect('/admin/category')->with('success', 'You have successfully deleted!');
	}
	
	#SERVICES
	public function get_service(){ 
		
		$serviceInfo     = Services::select('services.*','category.name as category_name','category.id as category_id')->join('category','category.id','=','services.category_id')->get();	
		
		return view('admin.services.services',compact('serviceInfo'));
	}
	
	public function add_new_service(){
		
		$categoryList = Category::where('status',1)->get();
		
		return view('admin.services.add_new_service',compact('categoryList')); 
		
	}
	
	public function add_new_service_action(Request $request){
		
		$request->validate([
            'name'               => ['required'],
            'category_id'        => ['required'],
            'short_description'  => ['required'],
            'description'        => ['required'],
            'service_image'      => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		$slug  						  = Str::slug($request->name);
		$service = new Services;
		$service->name                = $request->name;
		$service->category_id         = $request->category_id;
		$service->slug          	  = $slug;
		$service->short_description   = $request->short_description;
		$service->description         = $request->description;
		
		if(isset($request->service_image)){
		    $imageName = time().'.'.$request->service_image->extension();  
            $request->service_image->move(public_path('uploads/service/'), $imageName); 
			$service->image = $imageName; 
		}
		$service->save();
		
        return redirect('/admin/service')->with('success', 'You have successfully added!');
	}
	
	public function edit_service($service_id){

		$serviceInfo  = Services::where('id',$service_id)->first();
		$categoryList = Category::where('status',1)->get();
		
		return view('admin.services.edit_service',compact('serviceInfo','categoryList')); 
	}
	
	public function edit_service_action(Request $request){
		
		$dataArray = array();
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Services::where('slug',$getSlug)->whereNotIn('id',array($request->service_id))->count();
        
        if($getSlugRes>0){
            return redirect('/admin/service')->with('error', 'This name is all ready taken!!');
        }
		
		
		$dataArray['name']         		= $request->name;
		$dataArray['slug']          	= $getSlug;
		$dataArray['short_description']	= $request->short_description;
		$dataArray['status']       		= $request->status;
		$dataArray['description'] 	 	= $request->description;
		$dataArray['category_id'] 	 	= $request->category_id;
		
		if(isset($request->service_image)){
			
			$serviceInfo = Services::where('id',$request->service_id)->first();
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
		
		Services::where('id',$request->service_id)->update($dataArray);
        return redirect('/admin/service')->with('success', 'You have successfully updated!');
	}
	
	public function delete_service($service_id){
		
		$serviceInfo = Services::where('id',$service_id)->first();
		if(!empty($serviceInfo->image)){
			$getFilePath = public_path('uploads/service/').$serviceInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		Services::where('id',$service_id)->delete();
		return redirect('/admin/service')->with('success', 'You have successfully deleted!');
	}
	
	
	#SUBSCRIPTION
	public function get_subscription(){ 	
		$subscriptionInfo = Subscription::get();
		return view('admin.subscription.subscription',compact('subscriptionInfo'));
	}
	
	public function add_new_subscription(){		
		//$categoryList = Category::where('status',1)->get();		
		//return view('admin.subscription.add_new_subscription',compact('categoryList')); 
		return view('admin.subscription.add_new_subscription'); 
		
	}
	
	public function add_new_subscription_action(Request $request){
		
		$request->validate([
            'name'              => ['required'],
            'type'        		=> ['required'],
            'price'        		=> ['required'],
            'description'       => ['required'],
            'total_days'       	=> ['required'],
        ]);
		
		//$slug  						  = Str::slug($request->name);
		$subscription = new Subscription;
		$subscription->name                = $request->name;
		$subscription->type         	   = $request->type;
		//$subscription->slug          	   = $slug;
		$subscription->price   			   = $request->price;
		$subscription->description         = $request->description;
		$subscription->total_days          = $request->total_days;
		$subscription->save();
		
        return redirect('/admin/subscription')->with('success', 'You have successfully added!');
	}
	
	public function edit_subscription($subscription_id){
		$subscriptionInfo  = Subscription::where('id',$subscription_id)->first();		
		return view('admin.subscription.edit_subscription',compact('subscriptionInfo')); 
	}
	
	public function edit_subscription_action(Request $request){
		
		$dataArray = array();
		
		/* $getSlug    = \Str::slug($request->name);
        $getSlugRes = Subscription::where('slug',$getSlug)->whereNotIn('id',array($request->service_id))->count();
        
        if($getSlugRes>0){
            return redirect('/admin/subscription')->with('error', 'This name is all ready taken!!');
        } */
		
		
		$dataArray['name']         		= $request->name;
		//$dataArray['slug']          	= $getSlug;
		$dataArray['type']				= $request->type;
		$dataArray['status']       		= $request->status;
		$dataArray['price']       		= $request->price;
		$dataArray['description'] 	 	= $request->description;
		$dataArray['total_days'] 	 	= $request->total_days;
		
		Subscription::where('id',$request->subscription_id)->update($dataArray);
        return redirect('/admin/subscription')->with('success', 'You have successfully updated!');
	}
	
	public function delete_subscription($subscription_id){
		Subscription::where('id',$subscription_id)->delete();
		return redirect('/admin/subscription')->with('success', 'You have successfully deleted!');
	}
	
	#BLOG CATEGORY
	public function all_blog_category(){		
		$category_blog = Category_blog::get();
        return view('admin.blogcategory.blog_category',compact('category_blog'));
    } 
	
	public function add_blog_category(){ 
        return view('admin.blogcategory.add_blog_category');
    }
	
	public function add_blog_category_action(Request $request){
		
		$request->validate([
            'name'           => ['required','unique:category_blog'],
            'description'    => ['required'],
        ]);
		
		$slug  = Str::slug($request->name);
        $count = Category_blog::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
		
		$Category_blog = new Category_blog;
		$Category_blog->name          = $request->name;
		$Category_blog->slug          = $slug;
		$Category_blog->description   = $request->description;
		$Category_blog->save();
		
        return redirect('/admin/blog-category')->with('success', 'You have successfully added!');
    }
	
	public function edit_blog_category($category_id){
		$categoryInfo = Category_blog::where('id',$category_id)->first();
        return view('admin.blogcategory.edit_blog_category',compact('categoryInfo'));
	}
	
	public function edit_blog_category_action(Request $request){
		$request->validate([
            'name'           => ['required'],
            'description'    => ['required'],
        ]);
		
		$getSlug    = \Str::slug($request->name);
        $getSlugRes = Category_blog::where('slug',$getSlug)->whereNotIn('id',array($request->category_id))->count();
        
        if($getSlugRes>0){
            return redirect('/admin/blog-category')->with('error', 'This name is all ready taken!!');
        }
		
		$dataArray = array();
		$dataArray['name']        = $request->name;
		$dataArray['description'] = $request->description;
		$dataArray['status']      = $request->status;
		$dataArray['slug']        = $getSlug;
		
		Category_blog::where('id',$request->category_id)->update($dataArray);

        return redirect('/admin/blog-category')->with('success', 'You have successfully updated!');
    }
	
	public function delete_blog_category($category_id){
		
		Category_blog::where('id',$category_id)->delete();
		return redirect('/admin/blog-category')->with('success', 'You have successfully deleted!');
	}
}
