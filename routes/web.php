 <?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\RecycleController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\BlogController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [websiteController::class, 'index'])->name('');
Route::get('/blog-post', [websiteController::class, 'blogpost'])->name('');
Route::get('/blog', [websiteController::class, 'blog'])->name('');
Route::get('/cart', [websiteController::class, 'cart'])->name('');
Route::get('/product', [websiteController::class, 'product'])->name('');
Route::get('/product', [websiteController::class, 'product'])->name('');
Route::get('/contact', [websiteController::class, 'contact'])->name('');
Route::get('/shop', [websiteController::class, 'shop'])->name('');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/Profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Website routes


//Admin panel routes.
Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('admin/user', [UserController::class, 'index'])->name('admin.user');
Route::get('admin/user/add', [UserController::class, 'add'])->name('admin.user.add');
Route::post('admin/user/submit', [UserController::class, 'insert'])->name('admin.user.insert');
//All BAnner Route
Route::get('admin/banner', [BannerController::class, 'index'])->name('admin.banner');
Route::get('admin/banner/add', [BannerController::class, 'add'])->name('admin.banner.add');
Route::post('admin/banner/submit', [BannerController::class, 'insert'])->name('admin.banner.submit');
Route::get('admin/banner/view/{slug}', [BannerController::class, 'view'])->name('admin.banner.view');
Route::get('admin/banner/edit/{slug}', [BannerController::class, 'edit'])->name('admin.banner.edit');
Route::post('admin/banner/update', [BannerController::class, 'update'])->name('');

//All Blog Post Route
Route::get('admin/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::get('admin/blog/add', [BlogController::class, 'add'])->name('admin.blog.add');
Route::post('admin/blog/submit', [BlogController::class, 'insert'])->name('admin.blog.submit');


Route::get('admin/general/basic', [GeneralController::class, 'basic'])->name('admin.general.basic');
Route::post('admin/general/basic/update', [GeneralController::class, 'basic_update'])->name('admin.general.basic.update');
Route::get('admin/general/social', [GeneralController::class, 'social'])->name('admin.general.social');
Route::post('admin/general/social/update', [GeneralController::class, 'social_update'])->name('admin.general.social.update');
Route::get('admin/general/contact', [GeneralController::class, 'contact'])->name('admin.general.contact');
Route::post('admin/general/contact/update', [GeneralController::class, 'contact_update'])->name('admin.general.update');

Route::get('admin/contactus', [ContactusController::class, 'index'])->name('');
Route::post('admin/contactus/submit', [ContactusController::class, 'insert'])->name('admin.contactus.submit');
Route::get('admin/contactus/view/{slug}', [ContactusController::class, 'view'])->name('');
Route::post('admin/contactus/softdel', [ContactusController::class, 'soft_delete'])->name('');
Route::post('admin/contactus/restore', [ContactusController::class, 'restore'])->name('');
Route::post('admin/contactus/delete', [ContactusController::class, 'delete'])->name('');

Route::get('admin/recycle', [RecycleController::class, 'index'])->name('');
Route::get('admin/recycle/contact', [RecycleController::class, 'contact'])->name('');

Route::get('admin/error/access', [ErrorController::class, 'access'])->name('');


require __DIR__.'/auth.php';
