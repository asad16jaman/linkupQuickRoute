<?php

namespace App\Http\Controllers\Admin;

use App\Models\DeliveryMan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DeliveryController extends Controller
{
    //

     public function index(Request $request, ?int $id = null)
    {

        $editCategory = null;
        if ($id != null) {
            $editCategory = DeliveryMan::findOrFail($id);
        }

        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allCategories = DeliveryMan::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allCategories = DeliveryMan::orderBy('id', 'desc')->simplePaginate(10);
        }
        ;

        return view('admin.delivery', compact('allCategories', 'editCategory'));
    }


    public function store(Request $request, ?int $id = null)
    {

        $validateRules = [
            'title'=> 'required',
            'description' => 'required',
           
        ];
        
        if($id == null || $request->hasFile('img')){
            $validateRules['img'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048";
        };

        $request->validate($validateRules);

        $data = $request->only(['description', 'title']);
        if ($id != null) {
            //
            $currentEditUser = DeliveryMan::findOrFail($id);
            if ($request->hasFile('img')) {
                //delete if user already have profile picture...
                if ($currentEditUser->img != null) {
                    Storage::delete($currentEditUser->img);
                }
                $path = $request->file('img')->store('delivery');
                $data['img'] = $path;
            }
            DeliveryMan::where('id', '=', $id)->update($data);
            
            
            return redirect()->route('admin.delivery',['page'=>$request->query('page'),'search'=>$request->query('search')])->with("success", "Successfully Edited Delivery");
        }

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('delivery');
            $data['img'] = $path;
            
        }
        
        DeliveryMan::create($data);
        return back()->with("success", "Successfully created Delivery");
    }

    public function destroy(int $id)
    {

        $data = DeliveryMan::findOrFail($id);

        if ($data) {

            
           if($data->img){
                Storage::delete($data->img);
           }
            $data->delete();
        }

        return redirect()->route('admin.delivery')->with('success', 'Successfully Deleted Delivery');


    }







}
