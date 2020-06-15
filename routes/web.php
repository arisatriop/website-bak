<?php

use App\Http\Controllers\LitbangController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.dashboard');
// });


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/', 'UserHomeController@index');

Route::get('/admin-home', 'HomesController@index');
Route::post('/admin-home/create', 'HomesController@create');
Route::post('/admin-hoome-testimony/create', 'TestimoniesController@create');
Route::post('/admin-home/update/{id}', 'HomesController@update');
Route::post('/admin-home/update2/{id}', 'HomesController@update2');
Route::post('/admin-home/testimony/update/{id}', 'TestimoniesController@update');
Route::get('/admin-home/delete/{id}', 'HomesController@destroy');
Route::get('/admin-home/testimony/delete/{id}', 'TestimoniesController@destroy');
Route::post('/admin-home/edit-text/{id}', 'HomesController@updateText');
Route::get('/admin-inbox', 'HomesController@inbox');

Route::get('/admin-ph', 'PhController@index');
Route::post('/admin-ph/add-person', 'PhController@create');
Route::post('/admin-ph/update/{id}', 'PhController@update');
Route::get('/admin-ph/delete/{id}', 'PhController@destroy');
Route::post('admin-ph/update-photo/{id}', 'PhController@updatePhoto');

Route::get('/admin-audit', 'AuditController@index');
Route::post('/admin-audit/add-person', 'AuditController@create');
Route::post('/admin-audit/update/{id}', 'AuditController@update');
Route::get('/admin-audit/delete/{id}', 'AuditController@destroy');
Route::post('/admin-audit/update-photo/{id}', 'AuditController@updatePhoto');

Route::get('/admin-litbang', 'LitbangController@index');
Route::post('/admin-litbang/add-person', 'LitbangController@create');
Route::post('/admin-litbang/update/{id}', 'LitbangController@update');
Route::get('/admin-litbang/delete/{id}', 'LitbangController@destroy');
Route::post('/admin-litbang/update-photo/{id}', 'LitbangController@updatePhoto');

Route::get('/admin-psdm', 'PsdmController@index');
Route::post('/admin-psdm/add-person', 'PsdmController@create');
Route::post('/admin-psdm/update/{id}', 'PsdmController@update');
Route::get('/admin-psdm/delete/{id}', 'PsdmController@destroy');
Route::post('/admin-psdm/update-photo/{id}', 'PsdmController@updatePhoto');

Route::get('/admin-document', 'DocumentController@index');
Route::post('/admin-document/create', 'DocumentController@create');
Route::post('/admin-document/update/{id}', 'DocumentController@update');
Route::get('/admin-document/delete/{id}', 'DocumentController@destroy');

Route::get('/admin-about', 'AboutController@index');
Route::post('/admin-about/add-visi', 'AboutController@createVisi');
Route::post('/admin-about/add-misi', 'AboutController@createMisi');
Route::post('/admin-about/update-info/{id}', 'AboutController@updateInfo');
Route::post('/admin-about/update-visi/{id}', 'AboutController@updateVisi');
Route::post('/admin-about/update-misi/{id}', 'AboutController@updateMisi');
Route::get('/admin-about/delete-visi/{id}', 'AboutController@destroyVisi');
Route::get('/admin-about/delete-misi/{id}', 'AboutController@destroyMisi');

Route::get('/admin-article', 'ArticleController@index');
Route::post('/admin-article/add-article', 'ArticleController@create');
Route::post('/admin-article/update/{id}', 'ArticleController@update');
Route::get('/admin-article/delete/{id}', 'ArticleController@destroy');


Route::get('/admin-event', 'EventController@index');
Route::post('/admin-event/add-event', 'EventController@create');
Route::post('/admin-event/update/{id}', 'EventController@update');
Route::get('admin-event/delete/{id}', 'EventController@destroy');

Route::get('/admin-gallery-photo', 'PhotoController@index');
Route::post('/admin-gallery-photo/create', 'PhotoController@create');
Route::get('/admin-gallery-photo/delete/{id}', 'PhotoController@delete');

Route::get('/admin-gallery-album', 'AlbumController@index');
Route::post('/admin-gallery-album/create', 'AlbumController@create');
Route::get('/admin-gallery-album/delete/{id}/{album_name}', 'AlbumController@delete');

Route::get('/admin-panduan', 'PanduanController@index');



/** 
 * This code execute when user click element in Home Pages
 */
Route::get('/about', 'UserAboutController@index');
Route::get('/article-item/{ar}', 'UserArticleItemController@show');
Route::get('/event-item/{event}', 'UserEventItemController@show');
Route::post('/inbox', 'UserHomeController@inbox');
Route::get('/ph', 'UserProfileController@ph');
Route::get('/audit', 'UserProfileController@audit');
Route::get('/psdm', 'UserProfileController@psdm');
Route::get('/litbang', 'UserProfileController@litbang');
Route::get('/article', 'UserArticleController@index');
Route::get('/gallery', 'UserGalleryController@index');
