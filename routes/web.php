<?php
// use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

 Route::get('/', function () {
    return view('welcome');
}); 
/*
Route::get('/contact', function () {
    return 'Hello contact';
});

Route::get('/about', function () {
    return 'Hello about';
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return 'Hello number:' . $id . $name;
});

//Naming routes
Route::get('admin/post/example', array('as'=>'admin.home' ,function () {
    $url = route('admin.home');
    return 'The url is' . $url;
})); */

// Route::get('/post', 'PostController@index');  //This can not workimg in new version Laravel 8 thats why we used the bellow one
// Route::get('/post', 'App\Http\Controllers\PostController@index'); //This means if a click on post it will go PostController and lock index method
//Passing data into controllers
// Route::get('/post/{id}', 'App\Http\Controllers\PostController@index'); //This means if a click on post it will go PostController and lock index method

// Route::get('/contact', 'App\Http\Controllers\PostController@contact');

// Route::get('/post/{id}/{name}', 'App\Http\Controllers\PostController@show_post');


/*
|--------------------------------------------------------------------------
| insert data
|--------------------------------------------------------------------------
|
*/

Route::get('/insert', function () {
    DB::insert('insert into posts(title, content) values(?, ?)',  ['PHP with Laravel', 'Laravel is better']);
});


/*
|--------------------------------------------------------------------------
| Read data
|--------------------------------------------------------------------------
|
*/
/* Route::get('/read', function(){
    $results = DB::select('select * from posts where id = ?', [1]);
    // return $results;

    foreach ($results as $post) {
        return $post->title;
    }
});
 */

/*
|--------------------------------------------------------------------------
| update data
|--------------------------------------------------------------------------
|
*/
/* Route::get('/update', function(){
    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

    return $updated;

}); */

/*
|--------------------------------------------------------------------------
| Delete data
|--------------------------------------------------------------------------
|
*/
/* Route::get('/delete', function(){
    $deleted = DB::update('delete from posts where id = ?', [1]);

    return $deleted;

}); */

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/
/* Route::get('/find', function(){

    $post = Post::find(2);

    return $post->title;

    /* foreach ($posts as $post) {
        return $post->title;
    } 

}); */





/* Route::get('/findwhere', function(){

    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    return $posts;

}); */


/* Route::get('/findmore', function(){

    //$posts = Post::findOrFail(2);

    $posts = Post::where('users_count', '<', 50)->firstOrFail();

    return $posts;

}); */


/* Route::get('/basicisert', function(){

    $post = new Post;

    $post -> title = 'New Eloquent title insert';
    $post -> content = 'Woow Eloquent is cool';

    $post->save();

    // return $posts;

}); */

/* Route::get('/basicisert', function(){

    $post = Post::find(2);

    $post -> title = 'New Eloquent title insert 2';
    $post -> content = 'Woow Eloquent is cool 2';

    $post->save();

    // return $posts;

}); */





Route::get('/create', function(){

    $post = new Post;

    $post::create(['title' => 'The create method', 'content' => 'Woo iam learning']);
    // $post -> content = 'Woow Eloquent is cool';

});




/* Route::get('/update', function(){

    $post = new Post;

    $post::where('id', 2) -> where('is_admin', 0) -> update(['title' => 'New phhp title', 'content' => 'love youu']);
    // $post -> content = 'Woow Eloquent is cool';

}); */


/* Route::get('/delete', function(){

    $post = Post::find(2);

    $post -> delete();

}); */

/* Route::get('/delete2', function(){

    Post::destroy(3);
});
 */
/* Route::get('/deleteMultiple', function(){

    Post::destroy(4,5);
});
 */



Route::get('/Softdelete', function(){

    Post::destroy(4,5);
});





Route::group(['middleware' => ['wed']], function () {  

});