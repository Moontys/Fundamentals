<?php

use Illuminate\Support\Facades\Route;


// Database Eloquent/ORM (Object–Relational Mapping) & Model
use App\Post;

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



/*
//-----------------------------------------------------------------------
// Database Eloquent/ORM (Object–Relational Mapping)    >App


Route::get('/forcedelete', function() {

    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

});

Route::get('/deleteall', function() {

    Post::withTrashed()->where('is_admin', 0)->forceDelete();

})

Route::get('/restore', function() {

    Post::withTrashed()->where('is_admin', 0)->restore();

});

Route::get('/readsoftdelete', function() {

    //$post = Post::find(16);

    //return $post;


    //$post = Post::withTrashed()->where('is_admin', 0)->get();

    //return $post;


    $post = Post::onlyTrashed()->where('is_admin', 0)->get();

    return $post;

});

Route::get('/softdelete', function() {

    Post::find(14)->delete();

});

Route::get('/delete3', function() {

    Post::destroy([14, 16]);

    //Post::where('is_admin', 0)->delete();

});

Route::get('/delete2', function() {

    Post::destroy(16);

});

Route::get('/delete', function() {

    $post = Post::find(16);

    $post->delete();

});

Route::get('/update', function() {
    //Upadete
    Post::where('id', 11)->where('is_admin', 0)->update(['title'=>'Updated Title!', 'content'=>'PHP & Laravel!']);

});

Route::get('/create', function() {

    Post::create(['title'=>'The Create Method', 'content'=>'Method For Updating Multipal Parameters!']);

});

Route::get('/basicinsert2', function() {
    //Upadete
    $post = Post::find(10);

    $post->title = 'Eloquent! Second TRY!';
    $post->content = 'Works! Yeah!';

    $post->save();

});

Route::get('/basicinsert', function() {

    $post = new Post;

    $post->title = 'New Eloquent title insert';
    $post->content = 'Works!';

    $post->save();

});

Route::get('/findmore', function(){

    //$posts = Post::findOrFail(2);

    //return $posts;

    $posts = Post::where('users_count', '<', 50)->firstOrFail();

});

Route::get('/findwhere', function() {
    //constraints
    $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();

    return $posts;
});

Route::get('/find', function() {

    $post = Post::find(10);

        return $post->title;

});

Route::get('/read', function() {

    $posts = Post::all();

    foreach($posts as $postsList) {
        return $postsList->title;
    }

});

//------------------------------------------------------------------------------
// SQL Raw Queries

Route::get('/delete', function() {

    $deleted = DB::delete('delete from posts where id = ?', [9]);

    return $deleted;

}); 

Route::get('/update', function() {

    $updated = DB::update('update posts set title ="New Updated title - Larave is the Future! Yeah!" where id = ?', [9]);

    return $updated;
});

Route::get('/read', function() {

    $result = DB::select('select * from posts where id = ?', [1]);

    return $result;

    //foreach($result as $resultList) {
        //return $resultList->content;
    //}

});

Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP & Laravel', 'Laravel after year!']);

});

//--------------------------------------------------------------------------
*/


/*
//------------------------------------------------------------------------
// Views + Controllers  >App\resources\views


Route::get('/welcome', function () {
    
    return view('welcome');
});

//Example 2 - contact.blade.php
Route::get('/contact', 'PostsController@contact');

//Example 3 - post.blade.php
Route::get('/post/{id}/{name}', 'PostsController@show_post');

//-----------------------------------------------------------------------------
*/


/*
//-------------------------------------------------------------------------
// Controllers & Routing Controllers    >App\Http\Controllers


Route::get('/post/{id}', 'PostsController@index');

//Route with Resources
Route::resource('posts', 'PostsController');


//----------------------------------------------------------------------
*/


/*
//--------------------------------------------------------------------------
// Routes with Parameters & Naming the Routes 


Route::get('/posts/{id}/{name}', function ($id, $name) {

    return "post: ID - " . $id . ", name -  " . $name;
});

Route::get('admin/posts/example', array('as'=>'admin.home', function () {

    $url = route('admin.home');

    // Crazy EXAMPLE!
    //<a href="route('admin.home')">CLICK HERE</a>;
    // Crazy EXAMPLE!

    return "This url is " . $url;
}));

//---------------------------------------------------------------------------
*/


/*
//---------------------------------------------------------------------------
// Routes   >App\routes


Route::get('/route', function () {
    
    return 'Route!';
});

Route::get('/home', function () {

    return "Home Page";
});

Route::get('/about', function () {

    return "About Page";
});

Route::get('/contact', function () {

    return "Contact Page";
});

---------------------------------
*/

