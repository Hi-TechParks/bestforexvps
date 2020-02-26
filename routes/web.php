<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Route
Route::get('/', 'HomeController@index')->name('index');
Route::get('/review/{slug}', 'HomeController@review')->name('review');
/*Route::get('/article/{slug}', 'HomeController@article')->name('article');
Route::get('/comparison', 'HomeController@comparison')->name('comparison');

// Article Routes
Route::get('/articles', 'ArticlesController@index');
Route::get('/article/category/{id}', 'ArticlesController@category');
Route::get('/article/{id}', 'ArticlesController@show');

// Contact Route
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@sendMail');
*/

// Auth Routes
// Auth::routes();
Auth::routes(['register' => false]);

// Admin Routes
Route::group(['prefix' => 'admin',  'middleware' => 'auth', 'namespace' => 'Admin'], function()
{
    // Dashboard Route
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    // Admin Routes
    Route::resource('article-category', 'ArticleCategoryController');
    Route::resource('article', 'ArticleController');
    Route::resource('review', 'ReviewController');
    Route::resource('pricing', 'PricingController');
    Route::resource('features', 'FeaturesController');

    // Setting Routes
    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::post('siteinfo', 'SettingController@siteInfo')->name('setting.siteinfo');
    Route::post('contactinfo', 'SettingController@contactInfo')->name('setting.contactinfo');
    Route::post('changepass', 'SettingController@changePass')->name('setting.changepass');
});
