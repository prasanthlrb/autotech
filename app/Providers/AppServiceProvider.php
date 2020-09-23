<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use Auth;
use App\shop_role;
use App\User;
use App\role;
use App\admin;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('vendor.menu', function($view) {
            $role = shop_role::where('id',Auth::user()->role_id)->where('shop_id',Auth::user()->user_id)->first();
           
            $view->with(compact('role'));
        });
        
        view()->composer('admin.sidebar', function($view) {
            $role = role::where('id',Auth::guard('admin')->user()->role_id)->first();
           
            $view->with(compact('role'));
        });
    }   
}
