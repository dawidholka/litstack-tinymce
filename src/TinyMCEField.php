<?php

namespace DawidHolka\LitstackTinyMCE;

use Ignite\Crud\BaseField;

class TinyMCEField extends BaseField
{
    /**
     * Vue component name.
     *
     * @var string
     */
    protected $component = 'tinymce-field';

    /**
     * Set field defaults.
     *
     * @return void
     */
    public function mount()
    {
        //
    }
}