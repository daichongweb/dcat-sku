<?php

namespace Zhy\Sku\Extensions\Form;

use Dcat\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'admin::sku_field';

    protected static $js = [
        'http://obs.pinboss.net/pin-boss/sku.js'
    ];

    protected static $css = [
        'http://obs.pinboss.net/pin-boss/sku.css'
    ];

    public function render()
    {
        $this->script = <<< EOF
window.Sku = new ZhySKU('{$this->getElementClassSelector()}')
EOF;
        return parent::render();
    }

}
