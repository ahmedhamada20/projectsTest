<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\BestSellerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificatesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerReviewsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\FeaturesPackagesController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PreviousWorkController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SerivesCoursesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ZoomController;
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

require __DIR__ . '/auth.php';

Route::get('information', [HomeController::class, 'information'])->name('information');
Route::post('settingSave', [SettingController::class, 'store'])->name('settingSave');


Route::middleware(['auth', 'checkInformation'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/getSubcrations', [HomeController::class, 'getSubcrations'])->name('getSubcrations');
    Route::get('/getSubcrationsexam/{customer_id}/{cousrs_id}', [HomeController::class, 'getSubcrationsexam'])->name('getSubcrationsexam');
    Route::post('/editExamCousrs', [HomeController::class, 'editExamCousrs'])->name('editExamCousrs');
    Route::post('/photoExamCousrs', [HomeController::class, 'photoExamCousrs'])->name('photoExamCousrs');
    Route::post('/deletedgetSubcrationsexam', [HomeController::class, 'deletedgetSubcrationsexam'])->name('deletedgetSubcrationsexam');

    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::post('setting/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::post('setting_remove_image', [SettingController::class, 'setting_remove_image'])->name('setting_remove_image');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);


    
    Route::resource('ads', AdsController::class);
    Route::get('updateAdsStatus', [AdsController::class, 'changeStatus'])->name('updateAdsStatus');
    Route::post('ads_photo_remove_image', [AdsController::class, 'ads_photo_remove_image'])->name('ads_photo_remove_image');

    Route::resource('news', NewsController::class);
    Route::get('updateNewsStatus', [NewsController::class, 'changeStatus'])->name('updateNewsStatus');
    Route::post('news_photo_remove_image', [NewsController::class, 'news_photo_remove_image'])->name('news_photo_remove_image');

    Route::resource('event', EventController::class);
    Route::get('updateEventStatus', [EventController::class, 'changeStatus'])->name('updateEventStatus');
    Route::post('event_photo_remove_image', [EventController::class, 'event_photo_remove_image'])->name('event_photo_remove_image');

    Route::resource('aboutUs', AboutUsController::class);
    Route::get('/updateaboutusstatus', [AboutUsController::class, 'changeStatus'])->name('updateaboutusstatus');
    Route::post('aboutUs_remove_image', [AboutUsController::class, 'aboutUs_remove_image'])->name('aboutUs_remove_image');
    Route::post('aboutUs_photo_remove_image', [AboutUsController::class, 'aboutUs_photo_remove_image'])->name('aboutUs_photo_remove_image');

    Route::resource('previousWork', PreviousWorkController::class);
    Route::get('updatePreviousWorkStatus', [PreviousWorkController::class, 'changeStatus'])->name('updatePreviousWorkStatus');
    Route::post('previousWork_remove_image', [PreviousWorkController::class, 'previousWork_remove_image'])->name('previousWork_remove_image');
    Route::post('previousWork_photo_remove_image', [PreviousWorkController::class, 'previousWork_photo_remove_image'])->name('previousWork_photo_remove_image');

    Route::resource('packages', PackagesController::class);
    Route::resource('featuresPackages', FeaturesPackagesController::class);
    Route::get('updatePackagesStatus', [PackagesController::class, 'changeStatus'])->name('updatePackagesStatus');
    Route::post('packages_photo_remove_image', [PackagesController::class, 'packages_photo_remove_image'])->name('packages_photo_remove_image');

    Route::resource('category', CategoryController::class);
    Route::post('import-category', [CategoryController::class, 'import_category'])->name('import-category');
    Route::get('updateCategoryStatus', [CategoryController::class, 'changeStatus'])->name('updateCategoryStatus');
    Route::post('question_remove_image', [CategoryController::class, 'question_remove_image'])->name('question_remove_image');
    Route::post('question_photo_remove_image', [CategoryController::class, 'question_photo_remove_image'])->name('question_photo_remove_image');

    Route::resource('course', CourseController::class);
    Route::get('updateCourseStatus', [CourseController::class, 'changeStatus'])->name('updateCourseStatus');
    Route::post('course_remove_image', [CourseController::class, 'course_remove_image'])->name('course_remove_image');
    Route::post('course_photo_remove_image', [CourseController::class, 'course_photo_remove_image'])->name('course_photo_remove_image');

   
    Route::resource('serivesCourses', SerivesCoursesController::class);
    Route::get('updateSerivesCoursesStatus', [SerivesCoursesController::class, 'changeStatus'])->name('updateSerivesCoursesStatus');
    // Route::post('course_remove_image', [CourseController::class, 'course_remove_image'])->name('course_remove_image');
    // Route::post('course_photo_remove_image', [CourseController::class, 'course_photo_remove_image'])->name('course_photo_remove_image');

   
    Route::resource('number', NumberController::class);
    Route::get('updateNumberStatus', [NumberController::class, 'changeStatus'])->name('updateNumberStatus');
    Route::post('number_photo_remove_image', [NumberController::class, 'number_photo_remove_image'])->name('number_photo_remove_image');


    Route::resource('gallery', GalleryController::class);
    Route::get('updateGalleryStatus', [GalleryController::class, 'changeStatus'])->name('updateGalleryStatus');
    Route::post('gallery_remove_image', [GalleryController::class, 'gallery_remove_image'])->name('gallery_remove_image');
    Route::post('gallery_photo_remove_image', [GalleryController::class, 'gallery_photo_remove_image'])->name('gallery_photo_remove_image');

    Route::resource('blog', BlogController::class);
    Route::get('updateBlogStatus', [BlogController::class, 'changeStatus'])->name('updateBlogStatus');
    Route::post('blog_remove_image', [BlogController::class, 'blog_remove_image'])->name('blog_remove_image');
    Route::post('blog_photo_remove_image', [BlogController::class, 'blog_photo_remove_image'])->name('blog_photo_remove_image');


    Route::resource('zoom',ZoomController::class);

    Route::resource('exam',ExamController::class);
    Route::get('updateExamStatus', [ExamController::class, 'changeStatus'])->name('updateExamStatus');




  
    Route::resource('product', ProductController::class);
    Route::get('updateProductStatus', [ProductController::class, 'changeStatus'])->name('updateProductStatus');
    Route::post('product_remove_image', [ProductController::class, 'product_remove_image'])->name('product_remove_image');
    Route::post('product_photo_remove_image', [ProductController::class, 'product_photo_remove_image'])->name('product_photo_remove_image');

  
    Route::resource('customerReviews', CustomerReviewsController::class);
    Route::get('updateCustomerReviewsStatus', [CustomerReviewsController::class, 'changeStatus'])->name('updateCustomerReviewsStatus');
    Route::post('customerReviews_remove_image', [CustomerReviewsController::class, 'customerReviews_remove_image'])->name('customerReviews_remove_image');
    Route::post('customerReviews_photo_remove_image', [CustomerReviewsController::class, 'customerReviews_photo_remove_image'])->name('customerReviews_photo_remove_image');

  
   
   
    // Route::resource('bestSeller', BestSellerController::class);
    // Route::get('updateBestSellerStatus', [BestSellerController::class, 'changeStatus'])->name('updateBestSellerStatus');
    // Route::post('bestSeller_photo_remove_image', [BestSellerController::class, 'bestSeller_photo_remove_image'])->name('bestSeller_photo_remove_image');

  
   
    // Route::resource('question', QuestionController::class);
    // Route::get('updateQuestionStatus', [QuestionController::class, 'changeStatus'])->name('updateQuestionStatus');
    // Route::post('question_remove_image', [QuestionController::class, 'question_remove_image'])->name('question_remove_image');
    // Route::post('question_photo_remove_image', [QuestionController::class, 'question_photo_remove_image'])->name('question_photo_remove_image');


  
});
