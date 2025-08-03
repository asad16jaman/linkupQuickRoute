<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Team;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $hero =Slider::where('pagename','=','home')->latest()->first();
        $about = About::first();
        $categories = Category::all();
        $projects = Service::with('image')->get();
        $teams = Team::all();
        $clients = Client::all();

        return view("user.home",compact(['hero','about','categories','projects','teams','clients']));
    }

    public function about(){

        $hero = Slider::where('pagename','=','about')->latest()->first();
        $about = About::all()->first();
        $teams = Team::all();

        return view('user.about',compact(['about','teams','hero']));
    }

    public function services(){

        
        $services = Category::all();
        $hero = Slider::where('pagename','=','service')->latest()->first();
        $clients = Client::all();

        return view('user.service',compact(['services','clients','hero']));
    }

    public function project(){

        
        return view('user.project');
    }

    public function contact(){

        $hero = Slider::where('pagename','=','contact')->latest()->first();
        return view('user.contact',compact(['hero']));
    }


    public function storeContact(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'phone' => ['nullable', 'regex:/^01[3-9]\d{8}$/'],
            'message' => 'required',
        ]);

        $data = $request->only(['name','phone','email','message']);
        Contact::create($data);
        return back();

    }

    public function getTeam(){

        $teams = Team::all();
        $hero = Slider::where('pagename','=','team')->latest()->first();
       
        return view('user.team',compact(['teams','hero']));
    }

    public function testimonial(){

        $clients = Client::all();
        return view('user.testimonial',compact(['clients']));
    }

    public function fqaTemplate(){

        $hero = Slider::where('pagename','=','faq')->latest()->first();
        return view('user.fqa',compact(['hero']));
    }

    public function pricing(){

        $hero = Slider::where('pagename','=','pricing')->latest()->first();
        return view('user.pricing',compact(['hero']));
    }


    public function standard(){
        $hero = Slider::where('pagename','=','standard')->latest()->first();
        return view('user.standard_courier',compact(['hero']));
    }

    public function express(){
         $hero = Slider::where('pagename','=','express')->latest()->first();
        return view('user.express',compact(['hero']));
    }
    
    public function nightshift(){
        $hero =  Slider::where('pagename','=','overnight')->latest()->first();
        return view('user.nightshift',compact(['hero']));
    }


}
