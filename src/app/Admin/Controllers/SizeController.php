<?php

namespace App\Admin\Controllers;

use App\Models\Dia;
use App\Models\Size;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SizeController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Size::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->colmn('size')->display(function () {
                return $this->width . '/' . $this->height;
            });
            $grid->dia()->dia();

            $grid->actions(function ($action) {
                $action->disableView();
            });

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Size::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('width');
            $form->text('height');
            $form->select('dia_id')->options(function () {
                return Dia::all()->mapWithKeys(function ($item) {
                    return [$item->id => $item->dia];
                });
            });

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
