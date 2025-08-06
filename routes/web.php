<?php

use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotoGalleryController;



Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/services",[HomeController::class,"services"])->name("service");
Route::get("/about",[HomeController::class,"about"])->name("about");
Route::get("/project-detail",[HomeController::class,"project"])->name("project");
Route::get("/contact",[HomeController::class,"contact"])->name("contact");
Route::post("/savemessage",[HomeController::class,"storeContact"])->name("contact.store");
Route::get("/teams",[HomeController::class,"getTeam"])->name("team");
Route::get("/testimonial",[HomeController::class,"testimonial"])->name("testimonial");
Route::get("/fqa",[HomeController::class,"fqaTemplate"])->name("fqa");
Route::get("/pricing",[HomeController::class,"pricing"])->name("pricing");
Route::get("/blog-detail",[HomeController::class,"blogDetail"])->name("blogDetail");

//service page
Route::get("/service/{name}",[HomeController::class,"service"])->name("user.service");


Route::prefix('admin')->group(function(){

    Route::get('/login',[DashboardController::class,'login'])->name('admin.login');
    Route::post('/login',[DashboardController::class,'authenticate'])->name('admin.login');
    
    //registring admin/users
    Route::get('/register',[DashboardController::class,'register'])->name('admin.register');
    Route::post('/register',[DashboardController::class,'store'])->name('admin.register');

});


Route::group(['prefix'=> '/admin','middleware'=>'checkAdminAuth'], function () {
    Route::get('/',[DashboardController::class,'index'])->name('admin');
});

// ,'middleware'=>'checkAdminAuth'
Route::group(['prefix'=> '/admin','middleware'=>'checkAdminAuth','as'=>'admin.'], function () {

    //handling users from admin pannel
    Route::get("/users/{id?}",[UsersController::class,"index"])->name("users");
    Route::post("/users/{id?}",[UsersController::class,"storeUser"])->name("users");
    Route::post("/users/{id}/delete",[UsersController::class,"deleteUser"])->name("user.delete");

    //edit user from user side
    Route::get("/users/{id}/edit",[UsersController::class,"editUser"])->name("user.edit");
    Route::post("/users/{id}/edit",[UsersController::class,"editUserStore"])->name("user.edit");

    
    //slider maintaining url
    Route::get("/sliders/{id?}",[SliderController::class,"index"])->name("slider");
    Route::post("/sliders/{id?}",[SliderController::class,"store"])->name("slider");
    Route::post("/sliders/{id}/delete",[SliderController::class,"destroy"])->name("slider.delete");

    //feedback maintaining url
    Route::get("/feedback/{id?}",[FeedbackController::class,"index"])->name("feedback");
    Route::post("/feedback/{id?}",[FeedbackController::class,"store"])->name("feedback");
    Route::post("/feedback/{id}/delete",[FeedbackController::class,"destroy"])->name("feedback.delete");


    //Service url hare
    Route::get("/category/{id?}",[CategoryController::class,"index"])->name("category");
    Route::post("/category/{id?}",[CategoryController::class,"store"])->name("category");
    Route::post("/category/{id}/delete",[CategoryController::class,"destroy"])->name("category.delete");


    // Product url hare
    Route::get("/service/{id?}",[ServiceController::class,"index"])->name("service");
    Route::post("/service/{id?}",[ServiceController::class,"store"])->name("service");
    Route::post("/service/{id}/delete",[ServiceController::class,"destory"])->name("service.delete");


    
    //client url hare
    Route::get('/clients',[ClientController::class,'index'])->name('client');
    Route::post('/clients',[ClientController::class,'store'])->name('client');
    Route::post('/client/{id}/delete',[ClientController::class,'destroy'])->name('client.delete');

    //team url hare
    Route::get('/teams/{id?}',[TeamController::class,'index'])->name('team');
    Route::post('/teams/{id?}',[TeamController::class,'store'])->name('team');
    Route::post('/teams/{id}/delete',[TeamController::class,'destroy'])->name('team.delete');

    //Delivery url hare
    Route::get('/delivery/{id?}',[DeliveryController::class,'index'])->name('delivery');
    Route::post('/delivery/{id?}',[DeliveryController::class,'store'])->name('delivery');
    Route::post('/delivery/{id}/delete',[DeliveryController::class,'destroy'])->name('delivery.delete');

    //Photo Gallery url hare
    Route::get("/photogallery/{id?}",[PhotoGalleryController::class,"index"])->name("photogallery");
    Route::post("/photogallery/{id?}",[PhotoGalleryController::class,"store"])->name("photogallery");
    Route::post("/photogallery/{id}/delete",[PhotoGalleryController::class,"destory"])->name("photogallery.delete");

    // faq hare
    Route::get('/faq',[FaqController::class,'index'])->name('faq');
    Route::post('/faq',[FaqController::class,'store'])->name('faq');
    Route::post('/faq/{id}/delete',[FaqController::class,'destroy'])->name('faq.delete');

    //about url hare
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::post('/about',[AboutController::class,'store'])->name('about');

    //company maintain url
    Route::get("/company",[CompanyController::class,"index"])->name("company");
    Route::post("/company",[CompanyController::class,"create"])->name("company");

    //Contact url hare
    Route::get('/contact',[ContactController::class,'index'])->name('message');
    Route::post('/contact/{id}',[ContactController::class,'destroy'])->name('message.delete');

    //admin logout
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});


