<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BillingAddresseController;
// use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
// use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TeammemberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\StripePaymentController;


// ADMIN CONTROLLER 
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Orders\OrderController;
// use App\Http\Controllers\Admin\Blog\BlogController;

use App\Http\Controllers\BlogController as UserBlogController;
use App\Http\Controllers\Admin\Blog\BlogController as AdminBlogController;

use App\Http\Controllers\Admin\Category\CategoryController;



use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|s
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::get('/', [HomeController::class, 'cads_data'])->name('home');
// Route::get('/', [HomeController::class, 'feedbacks_on_home']);
use Illuminate\Support\Facades\Mail;

Route::get('/send-test-mail', function () {
    Mail::raw('Yeh test message hai', function ($message) {
        $message->to('apni-email@gmail.com')
                ->subject('Test Email');
    });

    return 'Email bhej diya gaya hai!';
});




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::resource('reservations', ReservationController::class);


Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/about', [TestimonialController::class, 'about_page_show'])->name('about');


// Route::get('/menu', function () {
//     return view('menu');
// })->name('menu');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');


// isma kam hoga 
Route::get('/menu_details', function () {
    return view('menu_details'); 
})->name('menu_details');

// isma kam hoga 

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');


Route::get('/terms_condition', function () {
    return view('terms_condition');
})->name('terms_condition');


Route::get('/dashboards', function () {
    return view('dashboards');
})->name('dashboards');

Route::get('/dashboard_address', function () {
    return view('dashboard_address');
})->name('dashboard_address');

Route::get('/dashboard_order', function () {
    return view('dashboard_order');
})->name('dashboard_order');

Route::get('/dashboard_wishlist', function () {
    return view('dashboard_wishlist');
})->name('dashboard_wishlist');


Route::get('/dashboard_review', function () {
    return view('dashboard_review');
})->name('dashboard_review');



Route::resource('reviews', ReviewsController::class);
Route::get('/menu_details', [ReviewsController::class, 'review_menu_detail'])->name('menu_details');


Route::resource('feedback', FeedbackController::class);

Route::get('/cart_view', [CartController::class, 'showCart'])->name('cart_view');
Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::middleware(['web'])->group(function () {
Route::post('/remove-item', [CartController::class, 'removeItem']);
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('cart.clear');
});



Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout.submit');
Route::get('/checkout-success', [CartController::class, 'checkoutSuccess'])->name('checkout.success');
Route::post('/checkout', [CartController::class, 'checkoutStore'])->name('checkout.store');
Route::get('/checkout-page', [CartController::class, 'checkoutPage'])->name('checkout.page');


// Route::get('/thank-you', fn() => view('thankyou'))->name('thankyou');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');


Route::get('/check_out',[BillingAddresseController::class,'checkout_page_show'])->name('check_out_page');
Route::resource('/billing-addresse', BillingAddresseController::class);
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('check_out');
Route::post('/store-billing-session', [CheckoutController::class, 'storeBillingSession'])->name('checkout.storeBillingSession');
Route::match(['get', 'post'], '/payment-page', [CheckoutController::class, 'paymentPage'])->name('payment.page');
// Route::post('/charge', [PaymentController::class, 'charge'])->name('payment.charge');

Route::get('/stripe-payment-page', [StripePaymentController::class, 'paymentPage'])->name('stripe.payment.page');
Route::post('/stripe/payment', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::get('/checkout-session', [StripePaymentController::class, 'createCheckoutSession'])->name('stripe.session');
Route::get('/payment-success', [StripePaymentController::class, 'paymentSuccess'])->name('payment.success');


Route::get('/thankyou', function () {
    if (!session()->has('order_id')) {
        return redirect('/')->with('error', 'Invalid access.');
    }

    $order_id = session('order_id');
    Session::forget('order_id'); 
    return view('thankyou', compact('order_id'));
})->name('thankyou.page');

Route::get('/payment-cancel', function () {
    return redirect()->back()->with('error', 'Payment cancelled.');
})->name('payment.cancel');


Route::get('/payment', [PaymentController::class, 'index'])->name('payment');


Route::get('/contact', [ContactController::class,'contactus'])->name('contact');
Route::resource('contacts', ContactController::class); // plural


Route::get('/category-form',[CategorieController::class,'categorie_form_show'])->name('category-form');
Route::resource('/category-submit',CategorieController::class);

// ✅ Admin category routes
Route::get('admin/all-category', [CategoryController::class, 'index'])->name('admin.all_category');
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');




Route::get('/coupon-form',[CouponController::class,'coupon_form'])->name('coupon-form');
Route::resource('/coupon-submit',CouponController::class);


Route::get('/item-form',[ItemController::class,'item_form_show'])->name('item-form');
Route::resource('/item-submit',ItemController::class);


Route::get('/chef',[TeammemberController::class,'chefs_page'])->name('chefs');
Route::get('/teammember-form',[TeammemberController::class,'teammember_form_show'])->name('teammember-form');
Route::resource('/teammember-submit',TeammemberController::class);


Route::get('/testimonial',[TestimonialController::class,'testimonial_page_show'])->name('testimonial_page');
Route::get('/testimonial-form',[TestimonialController::class,'testimonial_form_show'])->name('testimonial-form');
Route::resource('/testimonial-submit',TestimonialController::class);


// Route::get('/blog-form', [BlogController::class, 'blog_form_show'])->name('blog-form');
// Route::get('/blog', [BlogController::class, 'blogs'])->name('blog_page_show');
// Route::resource('/blog-submit',BlogController::class);
// Route::get('/blog/{slug}', [BlogController::class, 'show_blog_details'])->name('blog_page');
Route::get('/blog-form', [UserBlogController::class, 'blog_form_show'])->name('blog-form');
Route::get('/blog', [UserBlogController::class, 'blogs'])->name('blog_page_show');
Route::resource('/blog-submit', UserBlogController::class);
Route::get('/blog/{slug}', [UserBlogController::class, 'show_blog_details'])->name('blog_page');





Route::get('/sign-up',[RegisteredUserController::class,'create'])->name('auth.register');
Route::post('/register',[RegisteredUserController::class,'store'])->name('register');


Route::get('/sign-in',[AuthenticatedSessionController::class,'create'])->name('auth.login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('admin_dashboard');


// Route::get('/admin/dashboard', [UserController::class, 'index'])
//     ->middleware(['auth'])
//     ->name('admin_dashboard');
Route::get('/admin/dashboard', [UserController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.dashboard'); // ✅ change this line

Route::get('admin/all_users',[UserController::class,'all_user'])->name('all_users');
Route::get('admin/users/edit/{id}', [UserController::class, 'edit_user']);
// Route::get('admin/users/delete/{id}', [UserController::class, 'delete_user']);
Route::post('admin/users/update/{id}', [UserController::class, 'update'])->name('update_user');
Route::delete('admin/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('admin/users', [UserController::class, 'all_user'])->name('admin.user.index');

// Route::get('admin/dashboard', [OrderController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('/admin/order-dashboard', [OrderController::class, 'dashboard'])->name('admin.order_dashboard');
Route::get('admin/orders/pending', [OrderController::class, 'pendingOrders'])->name('admin.orders.pending');
Route::get('admin/orders/completed', [OrderController::class, 'completedOrders'])->name('admin.orders.completed');
Route::post('/admin/orders/complete/{id}', [OrderController::class, 'markAsCompleted'])->name('admin.orders.complete');
Route::delete('/admin/orders/delete/{id}', [OrderController::class, 'destroy'])->name('admin.orders.delete');
Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');


Route::get('/admin/all-blogs', [UserController::class, 'allBlogs'])->name('admin.all_blogs');
// Route::get('admin/blogs/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
// Route::post('admin/blogs/update/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
// Route::delete('admin/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
// ✅ Admin blog routes
Route::get('admin/blogs/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
Route::post('admin/blogs/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('admin/blogs/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
Route::get('/admin/all-blogs', [AdminBlogController::class, 'index'])->name('admin.all_blogs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('auth.login');
});




require __DIR__.'/auth.php';
