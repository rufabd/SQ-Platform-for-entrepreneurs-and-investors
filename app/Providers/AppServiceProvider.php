<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        Paginator::useBootstrap();

        // if(DB::table('founder_profiles')->get()) {
        //     // $profiles=DB::table('founder_profiles')->get();
            
        // }
        View::composer('*',function($view) {
                $view->with('founder_profiles', DB::table('founder_profiles')->get());
            });
        
        // if(DB::table('skilled_profiles')->get()) {
        //     $skilledprofiles=DB::table('skilled_profiles')->get();
        //     View::share('skilled_profiles',$skilledprofiles);
        // }
        View::composer('*',function($view) {
                $view->with('skilled_profiles', DB::table('skilled_profiles')->get());
            });
        
        // if(DB::table('investor_profiles')->get()){
        //     $investorprofile=DB::table('investor_profiles')->get();
        //     View::share('investor_profiles',$investorprofile);
        // }
        View::composer('*',function($view) {
                $view->with('investor_profiles', DB::table('investor_profiles')->get());
            });


        // if(DB::table('comments')->get()) {
        //     $commentss=DB::table('comments')->get();
        //     View::share('comments', $commentss);
        // }
        View::composer('*',function($view) {
                $view->with('comments', DB::table('comments')->get());
            });
        
        // if(DB::table('fav_posts')->get()) {
        //     $favoritess=DB::table('fav_posts')->get();
        //     View::share('fav_posts', $favoritess);
        // }
        View::composer('*',function($view) {
                $view->with('fav_posts', DB::table('fav_posts')->get());
            });

        // View::composer('*',function($view) {
        //         $view->with('project_posts', DB::table('project_posts')->get());
        //     });

        // $projectposts=DB::table('project_posts')->get();
        // View::share('project_posts',$projectposts);
    }
}
