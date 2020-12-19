<?php

namespace DawidHolka\LitstackTinyMCE;

use Ignite\Support\Facades\Form;
use Ignite\Support\Facades\Lit;
use Illuminate\Support\ServiceProvider;

class TinyMCEServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Lit::script(__DIR__ . '../dist/litstack-tinymce.js');

        $this->callAfterResolving('lit.form', function (Form $form) {
            $form->field('tinymce', TinyMCEField::class);
        });
    }
}