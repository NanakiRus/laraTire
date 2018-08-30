<?php
/**
 * Created by PhpStorm.
 * User: m.mironov
 * Date: 8/28/2018
 * Time: 18:52
 */

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/js/ckeditor/ckeditor.js',
        '/js/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";

        return parent::render();
    }
}