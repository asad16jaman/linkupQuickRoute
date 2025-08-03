<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    //

    public function index(){
        $about = About::all()->first();
        return view("admin.about", compact(['about']));
    }

    public function store(Request $request){


        // return response()->json([$request->all()]);

        $about = About::first();

        $validaterules = [
            'title'=> 'required',
            'description'=> ['required', 'regex:/^(?!<p><br><\/p>$).*/'],
        ];
        if(!$about || $request->hasFile('picture')){
            $validaterules['picture'] = "required|image|mimes:jpeg,jpg,png,webp|dimensions:width=560,height=710";
        }
        $request->validate($validaterules);

        
         $data = $request->only(['title', 'description']);
         
        if ($about) {
            //user edit section is hare

            if ($request->hasFile('picture')) {
                //delete if user already have profile picture...
                if ($about->picture != null) {
                    Storage::delete($about->picture);
                }

                $path = $request->file('picture')->store('about');
                $data['picture'] = $path;
            }
            About::where('id', '=', $about->id)->update($data);
            return redirect()->route('admin.about')->with("success", "Successfully Edited About");
        }

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('about');
            $data['picture'] = $path;
        }
        About::create($data);
        return back()->with("success", "Successfully added the About");

    }


    public function destroy(){}



}
