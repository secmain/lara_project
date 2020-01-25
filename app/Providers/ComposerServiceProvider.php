<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Blog_masta;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function($view) {
            $view->with('hoge', Blog_masta::all()); // [['id' => 1, 'blog_type' => 'bbb'], ['id' => 2, 'blog_type' => 'ccc']]);// Blog_masta::all());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
