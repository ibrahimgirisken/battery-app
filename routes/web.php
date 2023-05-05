<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Blogs\BlogsController;
use App\Http\Controllers\Menus\MenusController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Sliders\SlidersController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\HomeGetController;
use App\Http\Controllers\HomePageController;
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

// Route::get('/',[HomeController::class, 'index'])->name('index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix("admin")->group(function(){
    Route::get('/home',[HomeGetController::class,'index'])->name('index');

    Route::get('/blogs',[BlogsController::class,'getBlogs'])->name('blogs');
    Route::get('/blog-add',[BlogsController::class,'blogAdd'])->name('blog-add');
    Route::get('/blog-edit',[BlogsController::class,'blogEdit'])->name('blog-edit');
    Route::get('/blog-category',[BlogsController::class,'blogCategory'])->name('blog-category');
    Route::get('/blog-category-add',[BlogsController::class,'blogCategoryAdd'])->name('blog-category-add');
    Route::get('/blog-category-edit',[BlogsController::class,'blogCategoryEdit'])->name('blog-category-edit');
   
    Route::get('/pages',[PagesController::class,'getPages'])->name('pages');
    Route::get('/page-add',[PagesController::class,'pageAdd'])->name('page-add');
    Route::get('/page-edit',[PagesController::class,'pageEdit'])->name('page-edit');
   
    Route::get('/sliders',[SlidersController::class,'getSliders'])->name('sliders');
    Route::get('/slider-add',[SlidersController::class,'sliderAdd'])->name('slider-add');
    Route::get('/slider-edit',[SlidersController::class,'sliderEdit'])->name('selider-edit');
   
    Route::get('/menus',[MenusController::class,'getMenus'])->name('menus');
    Route::get('/menu-add',[MenusController::class,'menuAdd'])->name('menu-add');
    Route::get('/menu-edit',[MenusController::class,'menuEdit'])->name('menu-edit');
    
    Route::get('/users',[UsersController::class,'getUsers'])->name('users');
    Route::get('/user-add',[UsersController::class,'userAdd'])->name('user-add');
    Route::get('/user-edit',[UsersController::class,'userEdit'])->name('user-edit');
    
    Route::get('/settings',[SettingsController::class,'getSettings'])->name('settings');
    Route::get('/setting-edit',[SettingsController::class,'settingEdit'])->name('setting-edit');
});

Route::prefix("/")->group(function(){
    Route::get("",[HomePageController::class,'index'])->name('home');
    Route::get("services",[HomePageController::class,'services'])->name('services');
    Route::get("projects",[HomePageController::class,'projects'])->name('projects');
    Route::get("blog",[HomePageController::class,'blog'])->name('blog');
    Route::get("contact",[HomePageController::class,'contact'])->name('contact');
    Route::get("about",[HomePageController::class,'about'])->name('about');
});  