<?php

namespace DawidHolka\LitstackTinyMCE;

use Ignite\Support\Facades\Form;
use Ignite\Support\Facades\Lit;
use Illuminate\Support\ServiceProvider;

class TinyMCEServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Lit::script('/vendor/litstack-tinymce/public/litstack-tinymce.min.js');
        Form::registerField('tinymce', TinyMCEField::class);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/litstack-tinymce'),
        ], 'public');
    }
}