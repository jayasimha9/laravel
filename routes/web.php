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

//Route::get('/', function () {
//    return view('welcome');
//});

use App\User;
use Illuminate\Support\Facades\Input;
use App\Post;
 

Route::any('/search',function(){
    $q = Input::get ( 'q' );
     $posts = Post::all(); 
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('posts.index')->withDetails($user)->withQuery ( $q )->with('posts',$posts);
    else return view ('posts.index')->withMessage('No Details found. Try to search again !');
});



//Route::get('/', 'pagescontroller@index');

//Route::get('/', ['uses' => 'pagescontroller@index']);


Route::get('posts/delete/{id}',['uses' => 'posstcontroller@destroy',
    
    'as' => 'posts.delete'
    ]);

Route::get('/about', 'pagescontroller@about');
Route::get('/services', 'pagescontroller@services');

Route::resource('posts','posstcontroller');

Route::post('upload','uploadcontroller@uploadDocument');



Route::get('/category/create',[
    
    
    'uses' => 'categoriescontroller@create',
    
    'as' => 'category.create'
    
    
]);


Route::get('/categories',[
    
    
    'uses' => 'categoriescontroller@index',
    
    'as' => 'category.index'
    
    
]);



Route::get('/categorie/edit/{id}',[
    
    
    'uses' => 'categoriescontroller@edit',
    
    'as' => 'category.edit'
    
    
]);



Route::post('/categorie/update/{id}',[
    
    
    'uses' => 'categoriescontroller@update',
    
    'as' => 'category.update'
    
    
]);


Route::get('/categorie/delete/{id}',[
    
    
    'uses' => 'categoriescontroller@destroy',
    
    'as' => 'category.delete'
    
    
]);




Route::post('/category/store',[
    
    
    'uses' => 'categoriescontroller@store',
    
    'as' => 'category.store'
    
    
]);



//registers all the methods for our authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});
Route::get('/cookie',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Virat Gandhi');
});

Route::get('/test', function(){
   return view('test');
});

Route::get('/sample',function(){
    
    
    return view('sampledis');
    
});

//Route::get('',function(){
//    
//    
//    return view('layouts.samplepage');
//    
//});

Route::get('',[
    
    
    'uses' => 'frontendcontroller@index',
    
    'as' => 'index'
    
    
]);




Route::get('/sample2',function(){
    
    
    return view('posts.test');
    
});


Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');



Route::get('sendbasicemail','MailController@basic_email');

Route::get('shows','uploadfilecontroller@show');




Route::get('/mail','pagescontroller@getcontact');
Route::post('mailsent','pagescontroller@postcontact');


Route::get('/test3', function(){
    
    return App\User::find(1)->profile;

});

//Route::get('/test2', function(){
//   return view('test2');
//});

Route::get('/users',[
    
    
    'uses' => 'userscontroller@index',
    
    'as' => 'users'
    
    
]);
Route::get('/users/create',[
    
    
    'uses' => 'userscontroller@create',
    
    'as' => 'users.create'
    
    
]);

Route::post('/users/store',[
    
    
    'uses' => 'userscontroller@store',
    
    'as' => 'users.store'
    
    
]);



Route::get('/users/admin/{id}',[
    
    
    'uses' => 'userscontroller@admin',
    
    'as' => 'users.admin'
    
    
])->middleware('admin');

Route::get('/users/notadmin/{id}',[
    
    
    'uses' => 'userscontroller@notadmin',
    
    'as' => 'users.notadmin'
    
    
]);


Route::get('/users/profile',[
    
    
    'uses' => 'ProfileController@index',
    
    'as' => 'users.profile.index'
    
    
]);

Route::get('/users/delete/{id}',[
    
    
    'uses' => 'userscontroller@destroy',
    
    'as' => 'users.delete'
    
    
]);



Route::post('/users/profile/update',[
    
    
    'uses' => 'ProfileController@update',
    
    'as' => 'users.profile.update'
    
    
]);

Route::get('/settings',[
    
    
    'uses' => 'settingscontroller@index',
    
    'as' => 'settings'
    
    
]);

Route::post('/settings/update',[
    
    
    'uses' => 'settingscontroller@update',
    
    'as' => 'settings.update'
    
    
]);

Route::get('/{slug}',[
    
    
    'uses' => 'frontendcontroller@singlepost',
    
    'as' => 'post.single'
    
    
]);

Route::get('/category/{id}',[
    
    
    'uses' => 'frontendcontroller@category',
    
    'as' => 'category.single'
    
    
]);

Route::get('/results',function(){
    
    
    $post=\App\post::where('title','like','%'.request('query').'%');
    
    return view('results')->with('posts',$posts)
                           ->with('title','search results:'.request('query'))
                           ->with('categories',\App\Category::take(3)->get());
                    
    
});

