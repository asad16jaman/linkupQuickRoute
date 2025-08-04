<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //

    public function index(Request $request, ?int $id = null)
    {

        $editCategory = null;
        if ($id != null) {
            $editCategory = Category::find($id);
        }

        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allCategories = Category::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allCategories = Category::orderBy('id', 'desc')->simplePaginate(10);
        }
        ;

        return view('admin.category', compact('allCategories', 'editCategory'));
    }


    public function store(Request $request, ?int $id = null)
    {

        $validateRules = [
            'name'=> 'required',
            'description' => 'required',
            'long_description' => 'required',
            'nav_name' => 'required|string|unique:categories,nav_name'
        ];
        
        if($id == null || $request->hasFile('img')){
            $validateRules['img'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg|max:2048";
        };
        $request->validate($validateRules);
        $data = $request->only(['description', 'name','long_description']);
        if ($id != null) {
            //
            $currentEditUser = Category::find($id);
            if ($request->hasFile('img')) {
                //delete if user already have profile picture...
                if ($currentEditUser->img != null) {
                    Storage::delete($currentEditUser->img);
                }
                $path = $request->file('img')->store('category');
                $data['img'] = $path;
            }
            Category::where('id', '=', $id)->update($data);
             $backRoute =   route('admin.category');
           $backRoute = $backRoute."?page=".$request->page;
            
            return redirect()->route('admin.category',['page'=>$request->query('page'),'search'=>$request->query('search')])->with("success", "Successfully Edited the user");
        }

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('category');
            $data['img'] = $path;
            
        }
        $data['nav_name'] = $request->input('nav_name');
        Category::create($data);

        return back()->with("success", "Successfully added the Category");
    }

    public function destroy(int $id)
    {

        $data = Category::findOrFail($id);

        if ($data) {

            if($data->hasService()){
                return redirect()->route('admin.category')->with('warning', 'This Category has detail First Delete that');
            }
           if($data->img){
                Storage::delete($data->img);
           }
            $data->delete();
        }

        return redirect()->route('admin.category')->with('success', 'Successfully Delete Category');


    }















}
