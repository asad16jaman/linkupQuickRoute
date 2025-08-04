<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    //

    public function index(?int $id = null){

        $searchValue = request()->query("search",null);
        $addservice =  request()->query("serviceName",null);
        if($addservice){
            $cat = Category::where('nav_name','=',$addservice)->first();
            $myservice = Service::where('category_id','=',$cat->id)->first();
            if($myservice){
                return redirect()->route('admin.service',['id'=> $myservice->id]);
            }
        }

        $editItem = null;
        if(!is_null($id)){
            $editItem = Service::with('category')->findOrFail($id);
        }

        $categories = Category::all();

        if( $searchValue != null ){
            $products = Service::with('category')->where("name","like","%".$searchValue."%")->orderBy('id','desc')->simplePaginate(3);
        }else{
            $products = Service::with('category')->simplePaginate(3);
        }; 

        return view('admin.serviceView',compact(['categories','products','editItem']));
    }




    public function store(Request $request,?int $id=null){


        $validateRules = [
            'name'=> 'required',
            'category_id'=> 'required',
            'description'=> 'required',
            'logn_description' => 'required',
        ] ;
        if($id == null || $request->hasFile('picture')){
            $validateRules['picture'] = 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg';
        }

        $request->validate($validateRules);



        $data = $request->only(['name','description','logn_description','category_id','video']);

        if(!is_null($id)){

            $currentEditUser = Service::find($id);

            if ($request->hasFile('picture')) {
                //delete if user already have profile picture...
                if ($currentEditUser->picture != null) {
                    Storage::delete($currentEditUser->picture);
                }
                $path = $request->file('picture')->store('service');
                $data['picture'] = $path;
            }

            Service::where('id',$id)->update($data);
            return redirect()->route('admin.service',['page'=>request()->query('page'),'search'=>request()->query('search')])->with('success','Successfully edit');
        }


        if($request->hasFile('picture')){
             $path = $request->file('picture')->store('service');
            $data['picture'] = $path;
        }

        //creating product
        $product = Service::create($data);

       
        return redirect()->back()->with('success','Successfully created Product');
    }


    public function destory(int $id){
        

        
        $deleteProduct = Service::findOrFail($id);
       
            if($deleteProduct->picture){
                Storage::delete($deleteProduct->picture);
            }
            
            $deleteProduct->delete();
        
        return redirect()->route('admin.product')->with('success','successfully deleted');
        
    }





}
