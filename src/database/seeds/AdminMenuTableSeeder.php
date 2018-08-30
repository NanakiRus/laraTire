<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Role;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => 'Index',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => 'Admin',
                'icon'      => 'fa-tasks',
                'uri'       => '',
            ],
            [
                'parent_id' => 2,
                'order'     => 3,
                'title'     => 'Users',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 2,
                'order'     => 4,
                'title'     => 'Roles',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 2,
                'order'     => 5,
                'title'     => 'Permission',
                'icon'      => 'fa-ban',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 2,
                'order'     => 6,
                'title'     => 'Menu',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 2,
                'order'     => 7,
                'title'     => 'Operation log',
                'icon'      => 'fa-history',
                'uri'       => 'auth/logs',
            ],
            [
              'parent_id' => 0,
              'order' => 8,
              'title' => 'Категории',
              'icon' => 'fa-list',
              'url' => 'category'
            ],
            [
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Товары',
                'icon' => 'fa-shopping-basket',
                'url' => ''
            ],
            [
                'parent_id' => 9,
                'order' => 10,
                'title' => 'Карточки товаров',
                'icon' => 'fa-shopping-cart',
                'url' => 'products'
            ],
            [
                'parent_id' => 9,
                'order' => 11,
                'title' => 'Диаметр',
                'icon' => 'fa-circle-o',
                'url' => 'dia',
            ],
            [
                'parent_id' => 9,
                'order' => 12,
                'title' => 'Типоразмер',
                'icon' => 'fa-arrows-v',
                'url' => 'sizes'
            ],
            [
                'parent_id' => 9,
                'order' => 13,
                'title' => 'Производители',
                'icon' => 'fa-industry',
                'url' => 'brands',
            ],
            [
                'parent_id' => 9,
                'order' => 14,
                'title' => 'Модель',
                'icon' => 'fa-info-circle',
                'url' => 'models'
            ],
            [
                'parent_id' => 9,
                'order' => 15,
                'title' => 'Износ',
                'icon' => 'fa-circle-o-notch',
                'url' => 'wears'
            ]
        ]);

        Menu::find(2)->roles()->save(Role::first());
    }
}
