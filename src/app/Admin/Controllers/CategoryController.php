<?php

namespace App\Admin\Controllers;

use App\Models\Category;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CategoryController extends Controller
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
        return Admin::grid(Category::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('title')->editable();
            $grid->column('description')->limit(50)->editable();
            $grid->column('name')->editable();
            $grid->column('slug');
            $grid->column('text')->limit(60);
            $grid->column('parent_id');
            $grid->column('sort');

            $grid->created_at();
            $grid->updated_at();

            $grid->actions(function ($action) {
                $action->disableView();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Category::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', 'Заголовок');
            $form->text('description', 'Description');
            $form->text('name', 'Название');
            $form->text('slug', 'Slug');
            $form->select('parent_id')->options(function () {
                return Category::select('id', 'name')
                    ->where('parent_id', null)
                    ->get()
                    ->mapWithKeys(function ($item) {
                        return [$item['id'] => $item['name']];
                    });
            });
            $form->input('sort');
            $form->editor('text', 'Описание');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
