<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //

         View::composer('*', function ($view) {
                $data =  Company::all()->first();
                $service = Category::all();
                if($data){
                    $view->with('company',$data);
                }else{
                    $view->with('company',false);
                }
                if($service){
                    $view->with('services',$service);
                }else{
                    $view->with('services',false);
                }
                
            });
    }
}
