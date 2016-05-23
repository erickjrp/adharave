<?php
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('public.index');
});
Route::get('/nosotras', function () {
    return view('public.nosotras');
});
Route::get('/soutache/mini', function () {
    return view('public.coleccion.soutache.mini');
});
Route::get('/soutache/cintillos', function () {
    return view('public.coleccion.soutache.cintillos');
});
Route::get('/soutache/zarcillos', function () {
    return view('public.coleccion.soutache.zarcillos');
});
Route::get('/soutache/pulseras', function () {
    return view('public.coleccion.soutache.pulseras');
});
Route::get('/alambrismo/collares', function () {
    return view('public.coleccion.alambrismo.collares');
});
Route::get('/alambrismo/anillos', function () {
    return view('public.coleccion.alambrismo.anillos');
});
Route::get('/alambrismo/pulseras', function () {
    return view('public.coleccion.alambrismo.pulseras');
});
Route::get('/alambrismo/zarcillos', function () {
    return view('public.coleccion.alambrismo.zarcillos');
});
Route::get('/vitrofusion', function () {
    return view('public.coleccion.vitrofusion');
});
Route::post('/enviarCorreo', 'MailController@enviarCorreo');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
