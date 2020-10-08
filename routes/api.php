<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'API\V1'], function () {
    Route::group(['prefix' => 'categories', 'namespace' => 'Categories'], function () {
        Route::post('list', 'CategoryController@index')->name('category.list');
        Route::post('create', 'CategoryController@create')->name('category.create');
        Route::post('show', 'CategoryController@show')->name('category.show');
        Route::post('update', 'CategoryController@update')->name('category.update');
        Route::post('delete', 'CategoryController@delete')->name('category.delete');

    });

    Route::group(['prefix' => 'brands', 'namespace' => 'Brands'], function () {
        Route::post('list', 'BrandController@index')->name('brand.list');
        Route::post('create', 'BrandController@create')->name('brand.create');
        Route::post('show', 'BrandController@show')->name('brand.show');
        Route::post('update', 'BrandController@update')->name('brand.update');
        Route::post('delete', 'BrandController@delete')->name('brand.delete');

    });

    Route::group(['prefix' => 'product_options', 'namespace' => 'ProductOptions'], function () {
        Route::post('list', 'ProductOptionsController@index')->name('product.options.list');
        Route::post('create', 'ProductOptionsController@create')->name('product.options.create');
        Route::post('show', 'ProductOptionsController@show')->name('product.options.show');
        Route::post('update', 'ProductOptionsController@update')->name('product.options.update');
        Route::post('delete', 'ProductOptionsController@delete')->name('product.options.delete');

        Route::post('type_list', 'ProductOptionsTypeController@index')->name('product.options.type.list');
        Route::post('filter', 'ProductOptionsTypeController@filter')->name('product.options.type.filter');

    });

    Route::group(['prefix' => 'product', 'namespace' => 'Products'], function () {
        Route::post('list', 'ProductController@index')->name('product.list');
        Route::post('create', 'ProductController@create')->name('product.create');
        Route::post('show', 'ProductController@show')->name('product.show');
        Route::post('update', 'ProductController@update')->name('product.update');
        Route::post('delete', 'ProductController@delete')->name('product.delete');

    });
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
