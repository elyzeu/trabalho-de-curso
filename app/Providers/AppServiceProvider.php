<?php

namespace App\Providers;

use App\Utils;
use App\Models\Filiado;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\Cidade;

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
        Fortify::registerView(function () {
            $cidade=Cidade::All();

            return view('auth.register',['cidade'=>$cidade]);     
        });
        
    }
}
