<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Feedback;
use App\Models\Team;
use App\Models\About;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use App\Models\DeliveryMan;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //

    public function index()
    {

        $hero = Slider::where('pagename', '=', 'home')->latest()->first();
        $about = About::first();
        $categories = Category::all();
        $projects = Service::with('image')->get();
        $galleries = PhotoGallery::all();
        $clients = Client::all();

        return view("user.home", compact(['hero', 'about', 'categories', 'projects', 'galleries', 'clients']));
    }

    public function about()
    {

        $hero = Slider::where('pagename', '=', 'about')->latest()->first();
        $about = About::all()->first();
        $teams = Team::take(4)->get();
        $delivery = DeliveryMan::all();
        $clients = Client::all();
        return view('user.about', compact(['about', 'teams', 'hero', 'delivery','clients']));
    }

    public function services()
    {
        $categories = Category::all();
        $hero = Slider::where('pagename', '=', 'service')->latest()->first();
        $clients = Feedback::all();
        $delivery = DeliveryMan::all();
        return view('user.service', compact(['hero', 'clients', 'categories', 'delivery']));
    }

    public function project()
    {


        return view('user.project');
    }

    public function contact()
    {


        $hero = Slider::where('pagename', '=', 'contact')->latest()->first();

        return view('user.contact', compact(['hero']));
    }


    public function storeContact(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => ['nullable', 'regex:/^01[3-9]\d{8}$/'],
            'message' => 'required',
        ]);

        try {

            $data = $request->only(['name', 'phone', 'email', 'message']);
            Contact::create($data);
            return back()->with('success', "Message Successfully sand...");

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('success', "There is some Problem It will fixed soon");
        }


    }

    public function getTeam()
    {

        $teams = Team::all();
        $hero = Slider::where('pagename', '=', 'team')->latest()->first();

        return view('user.team', compact(['teams', 'hero']));
    }

    public function testimonial()
    {

        $clients = Client::all();
        return view('user.testimonial', compact(['clients']));
    }

    public function fqaTemplate()
    {

        $hero = Slider::where('pagename', '=', 'faq')->latest()->first();
        $faqs = Faq::all();
        return view('user.fqa', compact(['hero', 'faqs']));
    }

    public function pricing()
    {

        $hero = Slider::where('pagename', '=', 'pricing')->latest()->first();
        return view('user.pricing', compact(['hero']));
    }


    public function service(string $name)
    {
        $hero = Slider::where('pagename', '=', 'standard')->latest()->first();
        // $service = Service::with('categoryDetail')->where('nav_name','=', $name)->first();
        $detailService = Category::with('service')->where('nav_name', '=', $name)->latest()->first();
        return view('user.standard_courier', compact(['hero', 'detailService']));
    }

    public function blogDetail(){
        $hero = Slider::where('pagename', '=', 'blogdetail')->latest()->first();
        return view('user.blockDetail',compact(['hero']));
    }


}
