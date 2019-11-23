<?php

namespace Flaravel\NovaSpec;

use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\Field;

class NovaSpec extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-spec';

}
