<?php

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('about', 'PageController@about');

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');
Route::post('blog/search', 'BlogController@search');

Route::post('quote', 'QuoteController@store');

Route::get('tax-calculator', 'PageController@calculator');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');

Route::get('payments', 'PageController@payments');

Route::get('{slug}', 'PageController@show');

Route::group(['middleware' => 'auth'], function() {

	Route::get('user/home', 'HomeController@index')->name('home');

	Route::get('user/profile', 'ProfileController@index')->name('user.profile');
	Route::put('user/profile/update', 'ProfileController@update')->name('user.profile.update');

	Route::get('user/password', 'ProfileController@password')->name('user.password');
	Route::put('user/password/update', 'ProfileController@passwordUpdate')->name('user.password.update');

	Route::post('user/service', 'ServiceController@purchase');

	Route::resource('user/accounting', 'AccountingController');
	Route::resource('user/statements', 'StatementController', ['except' => [ 'index', 'show' ]]);
	Route::post('user/statement/upload', 'UploadedStatementController@store')->name('statement.upload');
	Route::delete('user/statement/uploaded/{id}', 'UploadedStatementController@destroy')->name('statement.upload.destroy');

	Route::get('user/letters', 'LetterController@index')->name('letters.index');
	Route::delete('user/letters/{id}', 'LetterController@destroy')->name('letters.destroy');

	Route::get('user/payments', 'PaymentController@index')->name('payments.index');
	Route::get('user/payments/{payment}', 'PaymentController@show')->name('payments.show');

	Route::get('user/checkout', 'CheckoutController@index')->name('user.checkout');
	Route::post('user/checkout', 'CheckoutController@proceed')->name('user.checkout.proceed');
	Route::delete('cart/remove/{id}', 'CheckoutController@destroy')->name('cart.remove');

	Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function() {

		Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

		Route::resource('headings', 'Admin\HeadingController', ['except' => [ 'show' ]]);
		Route::resource('services', 'Admin\ServiceController', ['except' => [ 'show' ]]);
		Route::resource('sectors', 'Admin\SectorController', ['except' => [ 'show' ]]);
		Route::resource('resources', 'Admin\ResourceController', ['except' => [ 'show' ]]);
		Route::resource('careers', 'Admin\CareerController', ['except' => [ 'show' ]]);
		Route::resource('categories', 'Admin\CategoryController', ['except' => [ 'show' ]]);
		Route::resource('articles', 'Admin\ArticleController', ['except' => [ 'show' ]]);
		Route::resource('messages', 'Admin\MessageController', ['only' => [ 'index', 'show', 'destroy' ]]);
		Route::resource('users', 'Admin\UserController', ['except' => [ 'show' ]]);
		Route::resource('accounts', 'Admin\AccountController', ['except' => [ 'show' ]]);
		// Route::resource('statements', 'Admin\StatementController', ['except' => [ 'show' ]]);
		Route::resource('letters', 'Admin\LetterController', ['except' => [ 'show', 'edit', 'update' ]]);
		Route::resource('quotes', 'Admin\QuoteController', ['except' => [ 'show', 'create', 'store', 'edit', 'update' ]]);
		Route::resource('payments', 'Admin\PaymentController', ['except' => [ 'show' ]]);
		Route::resource('manual-payments', 'Admin\ManualPaymentController', ['except' => [ 'show' ]]);
	});
});