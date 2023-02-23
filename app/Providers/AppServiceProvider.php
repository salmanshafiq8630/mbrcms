<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $menus = Page::where('parent_id', '=', 0)->get();
        $allMenus = Page::pluck('title','id')->all();
        View::share(compact('menus','allMenus'));
    }
}
