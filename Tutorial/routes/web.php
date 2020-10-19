<?php
use App\Country;
use App\Http\Controllers\PostController;
use App\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

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
//  return view('welcome');
// });


// use Illuminate\Support\Facades\DB;

// Route::get('/insert', function(){
//   DB::insert('insert into posts (content, body) values (?, ?)', ['why ', 'you do dis']);


// });



// Route::get('admin/example/post',array( 'as'=> 'admin.home',function(){
//   $url=Route('admin.home');
// return "this is the page ". $url;


// }));
// Route::get('/post/{id}', 'PostController@index');

// Route::resource('/posts', 'PostController');

// Route::get('/contact', 'PostController@contact') ;
// Route::get('post/{id}/{name}/{password}', 'PostController@show_post');


// Route::get('/read', function(){

// $results = DB::select('select * from posts where id = ?', [1]);

// return var_dump($results) ;


// });

// Route::get('/update', function(){
// $updated= DB::update('update posts set body = "update body" where id = ?', [1]);

// return $updated;

// });

// Route::get('/findx', function () {
    
//     $posts=Post::all();

//     foreach($posts as $post){

//       return  $post->body;
//     }
    
// });

// Route::get('/findwhere', function () {
//   $posts = Post::where('id',2) -> orderBy('id','desc')->take(1)->get();
//   return $posts;
    
// });



// Route::get('/findmore', function () {

//   // $posts= Post::findOrFail(1);

//   // return  $posts;

//   $posts=Post::where('user_count', '<', 50)->FirstOrFail();
    
// }); 


//BASIC INSERT and SAVING


// Route::get('/basicinsert', function () {

// $post = new Post;

// $post->body='hello i am laravel';
// $post->content= 'i prend';

// $post->save();

    
// });

// Route::get('/basicinsert2', function () {

//   $post = Post::find(5);
  
//   $post->body='hello i am laravel3';
//   $post->content= 'i prend3';
  
//   $post->save();
  
      
//   });


// Route::get('/create', function () {

// Post::create(['body'=> 'the new method','content'=>'which is cool']);

    
// });


// Route::get('/update', function () {
//     Post::where('id', 2)->update(['body'=> 'i am ripon video']);
    
// });

// Route::get('/delete', function () {

//     $post=Post::find(1);
//     $post->delete();
     
    
// });

// Route::get('/delete2', function () {

//     Post::destroy(4);
    
// });

// Route::get('/softdelete', function () {
//     Post::find(2)->delete();
    
// });

// Route::get('/readsoftdelete', function () {
    
    
//     // $post=Post::find(1);

//     // return $post;

//     $post = Post::withTrashed()->where('id', 2)->get();
    
//     return $post;
    
// });

// ELoquent relationships

// Route::get('user/{id}/post', function($id) {

//     factory(\App\User::class)->create();
 
//     return User::find($id)->post->body;
    
// });  

// Route::get('/posts', function () {

//     $user= User::find(1); 
    
// });


//one to many relationship

// Route::get('/posts',function(){

// $user=User::find(1);
// foreach($user->posts as $post){
//    echo $post->body. "<br>";
// }


// });


// MANY TO MANY RELATIONSHIP

// Route::get('/user/{role}/role',function($id){

// $user=User::find($id)->roles()->orderBy('id', 'desc')->get();

// return $user;

// foreach($user->roles as $role){
//     return $role->name; 
 
//}

// });
Route::get('user/pivot',function(){
    $user=User::find(1);
    foreach($user->role as $role){
        return $role->pivot->created_at;
    }

});


Route::get('/user/country',function(){

  $country=Country::find(1);
  foreach($country->posts as $post){
return $post->content;

  }

});