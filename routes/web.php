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

/*Frontend Routes*/

Route::get('/','FrontendController@Home')->name('home');
Route::get('about',function(){
    return view('frontend.about');
});



Route::post('/subscribe','HomeController@subscribe')->name('subscribe');
Route::get('unsubscribe/{token}','HomeController@unsubscribe')->name('unsubscribe');
Route::post('unsubscribe/{token}','HomeController@unsubscribed')->name('unsubscribed');



Route::prefix('admin')->group(function(){
    Route::get('/login','Admin\Auth\LoginController@showLoginForm')->name('admin_login');
	Route::post('/login','Admin\Auth\LoginController@login');
	Route::post('/logout','Admin\Auth\LoginController@logout')->name('admin_logout');
	Route::post('/password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin_password.email');
	Route::post('/password/reset','Admin\Auth\ResetPasswordController@reset');
	Route::get('/password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin_password.request');
	Route::get('/password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin_password.reset');
    
    Route::get('profile','Admin\ProfileController@index')->name('profile');
    Route::post('profile/changePassword','Admin\ProfileController@changePassword')->name('profile.changePassword');
    Route::post('profile/changeName','Admin\ProfileController@updateName')->name('profile.updateName');

    Route::post('albums/{id}/addImages','Admin\AlbumController@addImages')->name('albums.addImages');
    Route::delete('albums/{album_id}/deleteImage/{image_id}','Admin\AlbumController@deleteImage')->name('albums.deleteImage');
    Route::resource('albums', 'Admin\AlbumController',['except' => ['create','edit']]);

    Route::get('settings','Admin\SettingsController@index')->name('admin.settings');
    Route::post('settings/addImage','Admin\SettingsController@addImage')->name('admin.settings.addImage');
    Route::delete('settings/removeImage/{id}','Admin\SettingsController@removeImage')->name('admin.settings.removeImage');
    Route::post('settings/contactUpdate','Admin\SettingsController@contactUpdate')->name('admin.settings.contactUpdate');
    Route::post('settings/aboutUpdate','Admin\SettingsController@aboutUpdate')->name('admin.settings.aboutUpdate');
    
    Route::get('newsletter','Admin\NewsletterController@newsletter')->name('newsletter');
    Route::post('newsletter/send','Admin\NewsletterController@newsletterSend')->name('newsletterSend');

    Route::get('contact-us-messages/unseen','Admin\ContactUsMessageController@unseenMsg')->name('contact-us-messages.unseen');    
    Route::get('contact-us-messages/reply/{id}','Admin\ContactUsMessageController@reply')->name('contact-us-messages.reply');
    Route::post('contact-us-messages/reply/{id}','Admin\ContactUsMessageController@replySend')->name('contact-us-messages.replySend');
    Route::resource('contact-us-messages', 'Admin\ContactUsMessageController',['only' => ['show','destroy','index']]);
    Route::get('getUnseenMsgCount','Admin\ContactUsMessageController@getUnseenMsgCount')->name('getUnseenMsgCount');
    Route::get('getUnseenMsg','Admin\ContactUsMessageController@getUnseenMsg')->name('getUnseenMsg');

    Route::resource('testimonials', 'Admin\TestimonialController',['except' => ['create','show']]);

    Route::get('dashboard','Admin\AdminController@index')->name('admin_dashboard');
    Route::post('test','Admin\AdminController@test')->name('test');

    Route::get('/','Admin\AdminController@index');
});

Route::get('/assets/{source}/{img}/{h}/{w}',function($source,$img, $h, $w){
    return \Image::make(public_path("/".$source."/".$img))->resize($h, $w)->response('jpg');
})->name('asset');
Route::get('/assets/{source}/{source2}/{img}/{h}/{w}',function($source,$source2,$img, $h, $w){
   
    return \Image::make(public_path("/".$source."/".$source2."/".$img))->resize($h, $w)->response('jpg');
})->name('asset1');
Route::get('/asset/{source}/{img}/{ext}/{h}/{w}',function($source,$img,$ext, $h, $w){
    return \Image::make(public_path("/".$source."/".$img))->resize($h, $w)->response($ext);
})->name('asset2');



