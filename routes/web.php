<?php

use App\Mail\CreateMessageCreated;

Route::name('root_path')->get('/', 'PagesController@home');

Route::get('/test-email', function() {
	return new CreateMessageCreated('Honore Hounanou', 'mercuryseries@gmail.com', 'Merci pour laracarte');
});


Route::name('about_path')->get('/about', 'PagesController@about');

Route::name('contact_path')->get('/contact', 'ContactsController@create');

Route::name('contact_path')->post('/contact', 'ContactsController@store');

