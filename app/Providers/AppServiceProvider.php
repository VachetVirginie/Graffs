<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Pagination\AbstractPaginator;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role === 'admin';
        });
        if(request()->server("SCRIPT_NAME") !== 'artisan' && Schema::hasTable('categories') ) {
            //La méthode share permet le partage de données pour toutes les vues
            view ()->share ('categories', Category::all ());
        }
        Blade::if('adminOrOwner', function ($id) {
            return auth()->check() && (auth()->id() === $id || auth()->user()->role === 'admin');
        });
        AbstractPaginator::defaultView("pagination::bootstrap-4");
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
