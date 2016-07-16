<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
        Form::component('bsText', 'forms.text', ['name', 'label', 'value' => null, 'attributes' => []] );
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
