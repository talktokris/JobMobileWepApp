<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';







Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboradController::class, 'index'])->name('admin-home');
   /*
    Route::match(array('GET','POST'),'/admin/create-news-post', [App\Http\Controllers\Admin\AdminNewsController::class, 'createNewsPost'])->name('create-new-post');
    Route::get('/admin/search-news-posts', [App\Http\Controllers\Admin\AdminNewsController::class, 'searchNewsPosts'])->name('search-news-post');
    Route::get('/admin/news/delete/{hash_id}', [App\Http\Controllers\Admin\AdminNewsController::class, 'deleteNewsPost'])->name('delete-news-post');
    Route::match(array('GET','POST'),'/admin/news/edit/{hash_id}', [App\Http\Controllers\Admin\AdminNewsController::class, 'editNewsPost'])->name('edit-new-post');
    Route::match(array('GET','POST'),'/admin/news-image-upload/{hash_id}', [App\Http\Controllers\Admin\AdminNewsController::class, 'newsImageUpload'])->name('news-image-upload');

    Route::match(array('GET','POST'),'/admin/upload-images', [App\Http\Controllers\Admin\AdminGalleryController::class, 'uploadImages'])->name('upload-images');
    Route::match(array('GET','POST'),'/admin/manage-gallery-images', [App\Http\Controllers\Admin\AdminGalleryController::class, 'manageGalleryImages'])->name('manage-galley-images');
    Route::get('/admin/gallery-image/delete/{hash_id}', [App\Http\Controllers\Admin\AdminGalleryController::class, 'deleteGalleryImage'])->name('delete-galley-image');

    Route::match(array('GET','POST'),'/admin/manage-gallery-categories', [App\Http\Controllers\Admin\AdminGalleryController::class, 'manageGalleryCategories'])->name('manage-galley-categories');
    Route::post('/admin/create-gallery-category', [App\Http\Controllers\Admin\AdminGalleryController::class, 'createGalleryCategory'])->name('create-galley-category');
    Route::get('/admin/gallery-category/delete/{hash_id}', [App\Http\Controllers\Admin\AdminGalleryController::class, 'deleteGalleryCategory'])->name('create-galley-category');
    Route::match(array('GET','POST'),'/admin/gallery-category/edit/{hash_id}', [App\Http\Controllers\Admin\AdminGalleryController::class, 'editGalleryCategory'])->name('edit-galley-category');

    Route::match(array('GET','POST'),'/admin/create-team-member', [App\Http\Controllers\Admin\AdminTeamController::class, 'createTeamMember'])->name('create-team-member');
    Route::get('/admin/manage-team-members', [App\Http\Controllers\Admin\AdminTeamController::class, 'manageTeamMembers'])->name('manage-team-members');
    Route::get('/admin/team-member/delete/{hash_id}', [App\Http\Controllers\Admin\AdminTeamController::class, 'deleteTeamMember'])->name('delete-team-member');
    Route::match(array('GET','POST'),'/admin/team-member/edit/{hash_id}', [App\Http\Controllers\Admin\AdminTeamController::class, 'editTeamMember'])->name('edit-team-member');
    Route::match(array('GET','POST'),'/admin/team-member-image/{hash_id}', [App\Http\Controllers\Admin\AdminTeamController::class, 'teamUploadImages'])->name('team-image-upload');

    Route::match(array('GET','POST'),'/admin/create-contact', [App\Http\Controllers\Admin\AdminContactController::class, 'createContact'])->name('create-contact');
    Route::get('/admin/manage-contacts', [App\Http\Controllers\Admin\AdminContactController::class, 'manageContacts'])->name('manage-contact');
    Route::get('/admin/contact/delete/{hash_id}', [App\Http\Controllers\Admin\AdminContactController::class, 'deleteContact'])->name('delete-team-member');
    Route::match(array('GET','POST'),'/admin/contact/edit/{hash_id}', [App\Http\Controllers\Admin\AdminContactController::class, 'editContact'])->name('edit-team-member');
*/
});
