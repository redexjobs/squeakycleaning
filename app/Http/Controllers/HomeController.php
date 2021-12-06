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
	
	public function sign_in() {		
        return view('sign_in');
    }
	
	public function services(){
		
		return view('services');
	}
	
	public function car_services_cost(){
		
		return view('car_services_cost');
	}
	public function cleaner(){
		
		return view('cleaners');
	}
	public function inspiration(){
		
		return view('inspiration');
	}
	public function indoor_projects(){
		
		return view('indoor_projects');
	}
	public function outdoor_projects(){
		
		return view('outdoor_projects');
	}
	public function lifestyle(){
		
		return view('lifestyle');
	} 
	public function professional_services(){
		
		return view('professional_services');
	}
	public function weddings(){
		
		return view('wedding');
	}
	public function all_blog(){
		
		return view('blog_list');
	}
	
	public function blog_details(){
		
		return view('blog_details');
	}
	
	
	public function terms_services(){
		
		return view('terms_services');
	}
	public function privacy_policy(){
		
		return view('privacy_policy');
	}
	public function about_us(){
		
		return view('about_us');
	}
	public function contact_us(){
		
		return view('contact_us');
	}
}
