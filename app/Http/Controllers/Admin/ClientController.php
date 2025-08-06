<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(){
        $search = request()->query('search');
        if($search){
            $allclient= Client::where('name','like','%'.$search.'%')->simplePaginate(10);
        }else{
            $allclient= Client::simplePaginate(10);
        }
        return view("admin.client",compact(['allclient']));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'photo' => "required|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048"
        ]);
        $data = $request->only(['name']);
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('client');
            $data['photo'] = $path;
        }
        Client::create($data);
        return back()->with("success", "Successfully created Client");
    }

    public function destroy(int $id){

        $data = Client::findOrFail($id);
        if ($data->photo) {
            //unlink image from directory....
            Storage::delete($data->photo);
        }
        $data->delete();
        return redirect()->route('admin.client')->with('success', 'Successfully Deleted Client');
    }



}
