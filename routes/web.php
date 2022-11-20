<?php

// use App\Http\Controllers\Founder\ProfileController;
// use App\Models\FounderProfile;

use App\Models\ProjectPostHiringTag;
use App\Models\ProjectPostIndustryTag;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);


// Founder Profile
Route::get('/dashboard/profile/founder', [App\Http\Controllers\Founder\ProfileController::class, 'index'])->middleware('auth', 'founder')->name('dashboard-profile');

Route::post('/dashboard/profile/founder/create', [App\Http\Controllers\Founder\ProfileController::class, 'store'])->middleware('auth', 'founder')->name('create-profile');

Route::get('/dashboard/profile/founder/create', ['middleware' => 'founder', function() {
    return view('founder.profile.create');
}]);

Route::get('/founder/profile/{founderprofile}', [App\Http\Controllers\Founder\ProfileController::class, 'edit'])->middleware('auth', 'founder')->name('founder-profile-edit-view');

Route::put('/founder/profile/{id}', [App\Http\Controllers\Founder\ProfileController::class, 'update'])->middleware('auth', 'founder')->name('founder-profile-update');

Route::put('/founder/account-info/{user}', [App\Http\Controllers\Founder\ProfileController::class, 'updateAccount'])->middleware('auth', 'founder')->name('founder-account-update');


// Skilled Profile

Route::get('/dashboard/profile/skilled', [App\Http\Controllers\Skilled\ProfileController::class, 'index'])->middleware('auth', 'skilled')->name('dashboard-profile-skilled');

Route::post('/dashboard/profile/skilled/create', [App\Http\Controllers\Skilled\ProfileController::class, 'store'])->middleware('auth', 'skilled')->name('create-profile-skilled');

Route::get('/dashboard/profile/skilled/create', ['middleware' => 'skilled', function() {
    $hiringtagg = ProjectPostHiringTag::all();
    $industrytagg = ProjectPostIndustryTag::all();
    return view('skilled.profile.create', compact('hiringtagg', 'industrytagg'));
}]);

Route::get('/skilled/profile/{skilledprofile}', [App\Http\Controllers\Skilled\ProfileController::class, 'edit'])->middleware('auth', 'skilled')->name('skilled-profile-edit-view');

Route::put('/skilled/profile/{skilledprofile}', [App\Http\Controllers\Skilled\ProfileController::class, 'update'])->middleware('auth', 'skilled')->name('skilled-profile-update');

Route::put('/skilled/account-info/{user}', [App\Http\Controllers\Skilled\ProfileController::class, 'updateAccount'])->middleware('auth', 'skilled')->name('skilled-account-update');



// Investor Profile
Route::get('/dashboard/profile/investor', [App\Http\Controllers\Investor\ProfileController::class, 'index'])->middleware('auth', 'investor')->name('dashboard-profile-investor');

Route::get('/dashboard/profile/investor/create', [App\Http\Controllers\Investor\ProfileController::class, 'create'])->middleware('auth', 'investor')->name('view-profile-investor');

Route::post('/dashboard/profile/investor/create', [App\Http\Controllers\Investor\ProfileController::class, 'store'])->middleware('auth', 'investor')->name('create-profile-investor');

Route::get('/investor/profile/{investorprofile}', [App\Http\Controllers\Investor\ProfileController::class, 'edit'])->middleware('auth', 'investor')->name('investor-profile-edit-view');

Route::put('/investor/profile/{id}', [App\Http\Controllers\Investor\ProfileController::class, 'update'])->middleware('auth', 'investor')->name('investor-profile-update');

Route::put('/investor/account-info/{user}', [App\Http\Controllers\Investor\ProfileController::class, 'updateAccount'])->middleware('auth', 'investor')->name('investor-account-update');


// Admin Profile

// Actions related Users
Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->middleware('auth', 'admin')->name('admin-users-index');

Route::get('/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->middleware('auth', 'admin')->name('admin-users-create');

Route::get('/users/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->middleware('auth', 'admin')->name('admin-users-edit-view');

Route::post('/users/create', [App\Http\Controllers\Admin\UserController::class, 'store'])->middleware('auth', 'admin')->name('admin-users-store');

Route::put('/users/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->middleware('auth', 'admin')->name('admin-users-update');

Route::delete('/users/delete/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-users-delete');

// Actions related Project Posts
Route::get('/admin/project-posts', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->middleware('auth', 'admin')->name('admin-project-posts-index');
Route::delete('/admin/project-posts/{projectpostt}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-project-posts-delete');

// Project Hiring Tag
Route::get('/project/hiring-tags', [App\Http\Controllers\ProjectHiringTagController::class, 'index'])->middleware('auth', 'admin')->name('admin-tags-projecthiring');

Route::post('/project/hiring-tags', [App\Http\Controllers\ProjectHiringTagController::class, 'store'])->middleware('auth', 'admin')->name('admin-tags-projecthiring-store');

Route::get('/hiring-tags/update/{tag}', [App\Http\Controllers\ProjectHiringTagController::class, 'edit'])->middleware('auth', 'admin')->name('admin-hiring-edit-view');

Route::put('/hiring-tags/update/{tag}', [App\Http\Controllers\ProjectHiringTagController::class, 'update'])->middleware('auth', 'admin')->name('admin-hiring-update');

Route::delete('/hiring-tags/delete/{tag}', [App\Http\Controllers\ProjectHiringTagController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-hiring-delete');

// Project Industry Tag
Route::get('/project/industry-tags', [App\Http\Controllers\ProjectIndustryTagController::class, 'index'])->middleware('auth', 'admin')->name('admin-tags-projectindustry');

Route::post('/project/industry-tags', [App\Http\Controllers\ProjectIndustryTagController::class, 'store'])->middleware('auth', 'admin')->name('admin-tags-projectindustry-store');

Route::get('/industry-tags/update/{tag}', [App\Http\Controllers\ProjectIndustryTagController::class, 'edit'])->middleware('auth', 'admin')->name('admin-industry-edit-view');

Route::put('/industry-tags/update/{tag}', [App\Http\Controllers\ProjectIndustryTagController::class, 'update'])->middleware('auth', 'admin')->name('admin-industry-update');

Route::delete('/industry-tags/delete/{tag}', [App\Http\Controllers\ProjectIndustryTagController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-industry-delete');

// Project Post
Route::get('/project/posts', [App\Http\Controllers\Founder\ProjectPostController::class, 'index'])->middleware('auth', 'founder')->name('founder-project-posts-index');

Route::get('/project/posts/create', [App\Http\Controllers\Founder\ProjectPostController::class, 'create'])->middleware('auth', 'founder')->name('founder-project-posts-create');

Route::post('/project/posts/create', [App\Http\Controllers\Founder\ProjectPostController::class, 'store'])->middleware('auth', 'founder')->name('founder-project-posts-store');

Route::get('/founder/project-posts/{post}', [App\Http\Controllers\Founder\ProjectPostController::class, 'edit'])->middleware('auth', 'founder')->name('founder-post-edit-view');

Route::put('/founder/project-posts/{post}', [App\Http\Controllers\Founder\ProjectPostController::class, 'update'])->middleware('auth', 'founder')->name('founder-post-update');

Route::delete('/project-posts/delete/{post}', [App\Http\Controllers\Founder\ProjectPostController::class, 'destroy'])->middleware('auth', 'founder')->name('founder-project-delete');


// Skilled Post
Route::get('/skilled/posts', [App\Http\Controllers\Skilled\SkilledPostController::class, 'index'])->middleware('auth', 'skilled')->name('skilled-posts-index');

Route::get('/skilled/posts/create', [App\Http\Controllers\Skilled\SkilledPostController::class, 'create'])->middleware('auth', 'skilled')->name('skilled-posts-create');

Route::post('/skilled/posts/create', [App\Http\Controllers\Skilled\SkilledPostController::class, 'store'])->middleware('auth', 'skilled')->name('skilled-posts-store');

Route::get('/skilled/posts/{post}', [App\Http\Controllers\Skilled\SkilledPostController::class, 'edit'])->middleware('auth', 'skilled')->name('skilled-post-edit-view');

Route::put('/skilled/posts/{post}', [App\Http\Controllers\Skilled\SkilledPostController::class, 'update'])->middleware('auth', 'skilled')->name('skilled-post-update');

Route::delete('/skilled-posts/delete/{post}', [App\Http\Controllers\Skilled\SkilledPostController::class, 'destroy'])->middleware('auth', 'skilled')->name('skilled-project-delete');

// Public Project Posts

// Route::get('/founder/project-posts', [App\Http\Controllers\ProjectPostController::class, 'index', 'searchIndex'])->middleware('auth')->name('project-post-public');
Route::get('/founder/project-posts', [App\Http\Controllers\ProjectPostController::class, 'index', 'searchIndex'])->name('project-post-public');
// Route::get('/founder/project-posts', [App\Http\Controllers\ProjectPostController::class, 'searchIndex'])->middleware('auth')->name('project-post-public-search-by-title');
Route::get('/founder-posts/{post}',[App\Http\Controllers\ProjectPostController::class, 'show'])->middleware('auth')->name('auth-founder-posts-show');

// Route::get('/founder/project-posts/search',[App\Http\Controllers\ProjectPostController::class, 'searchindex'])->middleware('auth')->name('auth-founder-posts-search');


// Comments

Route::post('comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
Route::get('/admin/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
Route::delete('/comments/delete/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-comment-delete');

// Public Skilled Posts

// Route::get('/skilled/hiring-posts', [App\Http\Controllers\SkilledPostController::class, 'index'])->middleware('auth')->name('skilled-post-public');
Route::get('/skilled/hiring-posts', [App\Http\Controllers\SkilledPostController::class, 'index'])->name('skilled-post-public');

Route::get('/skilled-posts/{post}',[App\Http\Controllers\SkilledPostController::class, 'show'])->middleware('auth')->name('auth-skilled-posts-show');

Route::get('/download/{file}', [App\Http\Controllers\Skilled\SkilledPostController::class, 'download']);

Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index']);

Route::post('/charge', [App\Http\Controllers\PaymentController::class, 'charge']);

// Favorites

// Route::resource('/favorites', [App\Http\Controllers\Investor\FavoriteController::class, ['except' => ['create', 'edit', 'show', 'update']]]);

// Route::post('/favorites', [App\Http\Controllers\Investor\FavoriteController::class, 'store'])->middleware('auth', 'investor')->name('add-to-favorite');

// Route::get('/favorite-posts', [App\Http\Controllers\Investor\FavoriteController::class, 'index'])->name('index-favorite');



// Route::group(['middleware'=>['auth', 'investor']], function() {
//     Route::post('favorite/add', [\App\Http\Controllers\Investor\FavoriteController::class, 'add'])->name('post.favorite');
// });

Route::post('/project-post/add/{id}', [\App\Http\Controllers\Investor\FavoriteController::class, 'add'])->name('post-favorite');
// Route::get('/founder/posts', [\App\Http\Controllers\Investor\FavoriteController::class, 'favIndex'])->name('get-favorites');



// Report problem
Route::get('/reported-problems', [\App\Http\Controllers\ProblemController::class, 'index'])->middleware('auth', 'admin')->name('admin-reported-problems');

Route::get('/report-problem', [\App\Http\Controllers\ProblemController::class, 'create'])->middleware('auth')->name('user-report-problem-create');

Route::post('/report-problem', [\App\Http\Controllers\ProblemController::class, 'store'])->middleware('auth')->name('user-report-problem-store');

Route::delete('/reported-problem/delete/{problem}', [App\Http\Controllers\ProblemController::class, 'destroy'])->middleware('auth', 'admin')->name('admin-problem-delete');

// Specific founder profile

Route::get('/founder/{profile}', [App\Http\Controllers\Founder\ProfileController::class, 'show'])->middleware('auth')->name('founder-profile-public');

Route::get('/skilled/{profile}', [App\Http\Controllers\Skilled\ProfileController::class, 'show'])->middleware('auth')->name('skilled-profile-public');


Route::get('/favorite/project-posts', [App\Http\Controllers\Investor\FavoriteController::class, 'index'])->middleware('investor')->name('favorite-posts-list');

Route::delete('/favorite/project-posts/{id}', [App\Http\Controllers\Investor\FavoriteController::class, 'destroy'])->middleware('auth', 'investor')->name('investor-favorite-delete');



// Search project posts

// Route::get('/search/project-postsss', [App\Http\Controllers\SearchController::class, 'indexxx'])->middleware('auth')->name('search-project-postsss');

Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'create'])->name('contact-us-page');
Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-us-post');
Route::get('/admin/messages', [App\Http\Controllers\ContactController::class, 'index'])->name('admin-messages-index');
Route::delete('/admin/messages/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('admin-messages-delete');