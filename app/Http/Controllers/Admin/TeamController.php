<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    //

     public function index(Request $request, ?int $id = null)
    {
        $editTeam = null;
        if ($id != null) {
            $editTeam = Team::find($id);
        }
        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allteam = Team::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allteam = Team::orderBy('id', 'desc')->simplePaginate(10);
        }
        return view('admin.team', compact('allteam', 'editTeam'));
    }


    public function store(Request $request, ?int $id = null)
    {
        $validateRules = [
            'name'=> 'required',
            'designation'=> 'required',
            'facebook_url' => [
                'nullable',
                'regex:/^(https?:\/\/)?(www\.)?(facebook\.com|fb\.com)\/[A-Za-z0-9._%\/?=&-]+$/'
            ],

            'instagram_url' => [
                'nullable',
                'regex:/^(https?:\/\/)?(www\.)?instagram\.com\/[A-Za-z0-9._%\/?=&-]+$/'
            ],

            'linkedin_url' => [
                'nullable',
                'regex:/^(https?:\/\/)?(www\.)?linkedin\.com\/[A-Za-z0-9._%\/?=&-]+$/'
            ],
            'tweter_url' => [
                'nullable',
                'regex:/^(https?:\/\/)?(www\.)?twitter\.com\/([A-Za-z0-9_]{1,15})(\/)?$/'
            ],

        ];
        if($id == null || $request->hasFile('photo')){
            $validateRules['photo'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048";
        }
        $request->validate($validateRules);

        $data = $request->only(['name', 'designation','tweter_url','linkedin_url','instagram_url','facebook_url']);
        if ($id != null) {
            //user edit section is hare
            $currentEditUser = Team::findOrFail($id);
            if ($request->hasFile('photo')) {
                //delete if user already have profile picture...
                if ($currentEditUser->photo != null) {
                    Storage::delete($currentEditUser->photo);
                }
                $path = $request->file('photo')->store('team');
                $data['photo'] = $path;
            }
            Team::where('id', '=', $id)->update($data);
            return redirect()->route('admin.team',['page'=>$request->query('page'),'search'=>$request->query('search')])->with("success", "Successfully Edited Management");
        }
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('team');
            $data['photo'] = $path;
        }
        Team::create($data);
        return back()->with("success", "Successfully added Management");
    }

    public function destroy(int $id)
    {
        $data = Team::findOrFail($id);
        if ($data->photo) {
            //unlink image from directory....
            Storage::delete($data->photo);
        }
        $data->delete();
        return redirect()->route('admin.team')->with('success', 'Successfully Delete team');
    }

}
