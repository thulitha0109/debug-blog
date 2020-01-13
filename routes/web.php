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
Route::get('/test', function(){
    return App\Profile::find(1)->user;
});

Route::get('/',[
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/post/{slug}',[
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);


Route::get('/category/{id}',[
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);

Route::get('/about', [
    'uses' => 'FrontEndController@about',
    'as' => 'about'
]);

Route::get('/contactUs', [
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
]);


Route::get('/results', function(){
    $posts = App\Post::where('title','like', '%'.request('query').'%')->get();
    return view('results')
    ->with('posts',$posts)
    ->with('title', 'Search Results:' . request('query'))
    ->with('categories', App\Category::take(5)->get())
    ->with('settings', App\Setting::first())
    ->with('query',request('query'));
});


Route::get('/tag/{id}',[
    'uses' => 'FrontEndController@tag',
    'as' => 'tag.single'
]);



Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('/dashboard', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/post/create',[
        'uses' => 'PostsController@create', 
        'as' => 'post.create'
    ]);
    
    Route::post('/post/store',[
        'uses' => 'PostsController@store', 
        'as' => 'post.store'
    ]);

    Route::get('/category/create',[
        'uses' => 'CategoriesController@create', 
        'as' => 'category.create'
    ]);

    Route::post('/category/store',[
        'uses' => 'CategoriesController@store', 
        'as' => 'category.store'
    ]);

    Route::get('/categories',[
        'uses' => 'CategoriesController@index', 
        'as' => 'categories'
    ]);

    Route::get('/category/edit/{id}',[
        'uses' => "CategoriesController@edit", 
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}',[
        'uses' => "CategoriesController@destroy", 
        'as' => 'category.delete'
    ]);

    Route::post('/category/update/{id}',[
        'uses' => "CategoriesController@update", 
        'as' => 'category.update'
    ]);

    Route::get('/posts',[
        'uses' => "PostsController@index", 
        'as' => 'posts'
    ]);

    Route::get('/post/delete/{id}',[
        'uses' => "PostsController@destroy", 
        'as' => 'post.delete'
    ]);

    Route::get('/post/trashed',[
        'uses' => "PostsController@trashed", 
        'as' => 'posts.trashed'
    ]);

    Route::get('/post/kill/{id}',[
        'uses' => "PostsController@kill", 
        'as' => 'post.kill'
    ]);

    Route::get('/post/restore/{id}',[
        'uses' => "PostsController@restore", 
        'as' => 'post.restore'
    ]);

    Route::get('/posts/edit/{id}',[
        'uses' => "PostsController@edit", 
        'as' => 'post.edit'
    ]);

    Route::post('/post/update/{id}',[
        'uses' => "PostsController@update", 
        'as' => 'post.update'
    ]);

    Route::get('/tags',[
        'uses' => "TagsController@index", 
        'as' => 'tags'
    ]);

    Route::get('/tags/update/{id}',[
        'uses' => "TagsController@edit", 
        'as' => 'tag.edit'
    ]);

    Route::post('/tags/delete /{id}',[
        'uses' => "TagsController@update", 
        'as' => 'tag.update'
    ]);

    Route::get('/tags/edit/{id}',[
        'uses' => "TagsController@destroy", 
        'as' => 'tag.delete'
    ]);

    Route::get('/tags/create',[
        'uses' => "TagsController@create", 
        'as' => 'tag.create'
    ]);

    Route::post('/tags/store',[
        'uses' => "TagsController@store", 
        'as' => 'tag.store'
    ]);

    Route::get('/users', [
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);

    Route::get('/user/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    Route::post('/user/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);

    Route::get('/user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ])->middleware('admin');

    Route::get('/user/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);

    Route::get('/user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update', [
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);

    Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ])->middleware('admin');

    Route::post('settings/update', [
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ])->middleware('admin');
});


