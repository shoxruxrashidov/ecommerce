<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'API\V1'], function () {
    /*Auth*/
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::post('login', 'LoginController@login')->name('authentication');
        Route::post('2fa', 'LoginController@twofactor')->name('twofactor');
        Route::post('lock', 'LoginController@lock')->name('lock');
        Route::post('signup', 'RegisterController@signup')->name('registration');

        Route::post('password/forgot', 'PasswordController@forgot')->name('password.forgot');
        Route::post('password/reset', 'PasswordController@reset')->name('password.reset');

        Route::get('email/verify/{id?}', 'EmailController@verify')->name('verification.verify');
        Route::get('email/resend', 'EmailController@resend')->name('verification.resend');

        Route::group(['middleware' => ['jwt-auth']], function () {
            Route::post('token/refresh', 'LoginController@refresh')->name('token.refresh');
        });
    });
    /*Categories*/
    Route::group(['prefix' => 'categories', 'namespace' => 'Categories'], function () {
        Route::post('list', 'CategoryController@index')->name('category.list');
        Route::post('create', 'CategoryController@create')->name('category.create');
        Route::post('show', 'CategoryController@show')->name('category.show');
        Route::post('update', 'CategoryController@update')->name('category.update');
        Route::post('delete', 'CategoryController@delete')->name('category.delete');

    });
    /*Brands*/
    Route::group(['prefix' => 'brands', 'namespace' => 'Brands'], function () {
        Route::post('list', 'BrandController@index')->name('brand.list');
        Route::post('create', 'BrandController@create')->name('brand.create');
        Route::post('show', 'BrandController@show')->name('brand.show');
        Route::post('update', 'BrandController@update')->name('brand.update');
        Route::post('delete', 'BrandController@delete')->name('brand.delete');

    });
    /*Product option with filters and types*/
    Route::group(['prefix' => 'product_options', 'namespace' => 'ProductOptions'], function () {
        Route::post('list', 'ProductOptionsController@index')->name('product.options.list');
        Route::post('create', 'ProductOptionsController@create')->name('product.options.create');
        Route::post('show', 'ProductOptionsController@show')->name('product.options.show');
        Route::post('update', 'ProductOptionsController@update')->name('product.options.update');
        Route::post('delete', 'ProductOptionsController@delete')->name('product.options.delete');

        Route::post('type_list', 'ProductOptionsTypeController@index')->name('product.options.type.list');
        Route::post('filter', 'ProductOptionsTypeController@filter')->name('product.options.type.filter');

    });
    /*Product with filters*/
    Route::group(['prefix' => 'product', 'namespace' => 'Products'], function () {
        Route::post('list', 'ProductController@index')->name('product.list');
        Route::post('create', 'ProductController@create')->name('product.create');
        Route::post('show', 'ProductController@show')->name('product.show');
        Route::post('update', 'ProductController@update')->name('product.update');
        Route::post('delete', 'ProductController@delete')->name('product.delete');
        Route::post('filter', 'ProductFilterController@filter')->name('product.filter');

    });
    /*Permission*/
    Route::group(['prefix' => 'permission', 'namespace' => 'Permissions'], function () {
        Route::post('list', 'PermissionsController@index')->name('permission.list');
        Route::post('create', 'PermissionsController@create')->name('permission.create');
        Route::post('show', 'PermissionsController@show')->name('permission.show');
        Route::post('update', 'PermissionsController@update')->name('permission.update');
        Route::post('delete', 'PermissionsController@delete')->name('permission.delete');

    });
    /*Role*/
    Route::group(['prefix' => 'role', 'namespace' => 'Roles'], function () {
        Route::post('list', 'RolesController@index')->name('role.list');
        Route::post('create', 'RolesController@create')->name('role.create');
        Route::post('show', 'RolesController@show')->name('role.show');
        Route::post('update', 'RolesController@update')->name('role.update');
        Route::post('delete', 'RolesController@delete')->name('role.delete');

    });
    /*Team*/
    Route::group(['prefix' => 'team', 'namespace' => 'Team'], function () {
        Route::post('list', 'TeamController@index')->name('team.list');
        Route::post('create', 'TeamController@create')->name('team.create');
        Route::post('show', 'TeamController@show')->name('team.show');
        Route::post('update', 'TeamController@update')->name('team.update');
        Route::post('delete', 'TeamController@delete')->name('team.delete');

    });

    /*Settings*/
    Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function () {
        Route::post('profile', 'SettingsController@profile')->name('settings.profile');

    });
});
