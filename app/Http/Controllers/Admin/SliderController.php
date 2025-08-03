<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class SliderController extends Controller
{
    //

    public function index(Request $request, ?int $id = null)
    {

        $editSlider = null;
        if ($id != null) {
            $editSlider = Slider::findOrFail($id);
        }

        $search = $request->input('search',null);
        if ($search) {
            $allSlider = Slider::where('title', 'like', '%' . $search . '%')->orderBy('id','desc')->get();
        } else {
            $allSlider = Slider::orderBy('id','desc')->get();
        }
        
        return view("admin.slider", compact("editSlider", "allSlider"));
    }

    public function store(Request $request, ?int $id = null)
    {

        $validaterules = [
            "title"=> "required",
            "description"=> "required",
            'pagename' => 'required'
            
        ];
       

        if($id == null || $request->hasFile('img')){
            $validaterules['img'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg|dimensions:width=950,height=640";
        };

         $request->validate($validaterules);

        $data = $request->only(['title', 'description','pagename']);
        if ($id != null) {

            $currentEditUser = Slider::find($id);

            if ($request->hasFile('img')) {

                //delete if user already have profile picture...
                if ($currentEditUser->img != null && Storage::exists($currentEditUser->img)) {
                    Storage::delete($currentEditUser->img);
                }

                $path = $request->file('img')->store('hero');
                $data['img'] = $path;
            }

            Slider::where('id', '=', $id)->update($data);
            return redirect()->route('admin.slider', ['page' => $request->query('page'), 'search' => $request->query('search')])->with('success', "Successfully updated");
        }


        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('hero');
            $data['img'] = $path;
        }


        Slider::create($data);

        return back()->with("success", "Successfully added the Slider");
    }

    public function destroy(int $id)
    {

        $slider = Slider::findOrFail($id);
        if ($slider->img) {
            //unlink image from directory....
            Storage::delete($slider->img);
            
        }
        $slider->delete();
        return redirect()->route('admin.slider')->with('success', 'Successfully Delete Slider Item');

    }




}
