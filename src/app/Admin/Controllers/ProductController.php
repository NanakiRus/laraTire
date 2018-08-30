<?php

namespace App\Admin\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Dia;
use App\Models\Product;

use App\Models\Size;
use App\Models\Type;
use App\Models\Wear;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return Admin::grid(Product::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('title')->editable();
            $grid->column('description')->limit(50);
            $grid->column('name', 'Заголовок');
            $grid->column('slug', 'Ссылка');
            $grid->wear()->percent_interval('Износ');
            $grid->size('Рзамер')->display(function () {
                return $this->width . '/' . $this->height;
            });
            $grid->dia()->dia('Диаметр');
            $grid->column('season', 'Сезон');
            $grid->brand()->name('Производитель');
            $grid->type()->name('Модель');
            $grid->column('amount', 'Наличие');
            $grid->column('price', 'Цена');
            $grid->category()->name('Категория');
            $grid->column('text')->limit(50);

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
        return Admin::form(Product::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title');
            $form->text('description');
            $form->text('name');
            $form->text('slug');
            $form->select('wear_id', 'Износ')->options(function () {
                return Wear::all()->pluck('percent_interval', 'id');
            });
            $form->select('size_id', 'Размер')->options(function () {
                return Size::all()->mapWithKeys(function ($item) {
                    return [$item->id => $item->width . '/' . $item->height . ' ' . $item->dia->dia];
                });
            })->load('dia_id', \route('admin.get-dia'));
            $form->select('dia_id', 'Диаметр');
            $form->select('season', 'Сезон')->options([null, 'Зима', 'Лето']);
            $form->select('brand_id', 'Производитель')->options(function () {
                return Brand::all()->pluck('name', 'id');
            })->load('type_id', \route('admin.get-type'));
            $form->select('type_id', 'Модель');
            $form->text('amount', 'Наличие');
            $form->text('price', 'Цена');
            $form->select('category_id', 'Категория')->options(function () {
                return Category::all()->pluck('name', 'id');
            });


            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    public function getDia(Request $request)
    {
        return [Size::find($request->get('q'))->dia->dia];
    }

    public function getType(Request $request)
    {
        return Type::where(['brand_id' => $request->get('q')])->pluck('name', 'id');
    }
}
