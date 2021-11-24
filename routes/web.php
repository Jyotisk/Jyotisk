<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



//-----Homepage Routes-----

    //Admin Routes
    Route::get('/', [HomeController::class, 'index']);

    // For About 
    Route::get('/about_us', [HomeController::class, 'aboutUs']);
    Route::get('/about_us_mac_area', [HomeController::class, 'about_Us_Mac_Area']);
    Route::get('/about_us_mac', [HomeController::class, 'aboutUsMac']);
    Route::get('/about_us_mac_act', [HomeController::class, 'about_UsMac_Act']);
    Route::get('/about_us_missing', [HomeController::class, 'about_Us_Missing']);
    Route::get('/about_us_power', [HomeController::class, 'aboutUsPower']);
    Route::get('/about_us_formulation', [HomeController::class, 'about_Us_Formulation']);

    //For Gallery Page
    Route::get('/gallery', [HomeController::class, 'view_Gallery']);

    //FAQ
    Route::get('/faq', [HomeController::class, 'Faq']);

    //For Departrment
    Route::get('/executive', [HomeController::class, 'Executive']);
    Route::get('/gen_member', [HomeController::class, 'Gen_Member']);
    Route::get('/staff', [HomeController::class, 'Staff']);
    Route::get('/schemes-programes', [HomeController::class, 'Schemes']);
    Route::get('/announcement', [HomeController::class, 'Announcement']);
    Route::get('/scopeofworks', [HomeController::class, 'Scopeofworks']);
    Route::get('/funding', [HomeController::class, 'Funding']);

    //For Announcement
    Route::get('/livelihood', [HomeController::class, 'Livelihood']);

    //Contact us
    Route::get('/contactus', [HomeController::class, 'ContactUs']);

//-----End Home page Routes-----




Auth::routes();
Route::middleware(['admin'])->group(function(){
    Route::get('/dash', [AdminController::class, 'dashboard']);

    //Gallery Section
    Route::get('/admin/gallery', [AdminController::class, 'gallery']);
    Route::post('/post/gallery', [AdminController::class, 'postGallery']);

    //Documents Section
    Route::get('/admin/document', [AdminController::class, 'documents']);
    Route::post('/post/document', [AdminController::class, 'postDocuments']);

    //Department Section
    Route::get('/admin/departments', [AdminController::class, 'departments'])->name('admin.departments');
    Route::post('/post/departments', [AdminController::class, 'postDepartments']);
    Route::post('/post/subdepartments', [AdminController::class, 'postSubDepartments']);
    Route::get('/admin/manage-dept', [AdminController::class, 'manageDepartment']);

    Route::get('/admin/{id}/edit', 'HomeController@updateDepartment')->name('admin.update');
    Route::post('/admin/{id}', 'HomeController@editDepartment')->name('admin.edit');

    Route::get('/admin/schemes', [AdminController::class, 'manageSchemes']);
    Route::post('/post/schemes', [AdminController::class, 'postSchemes']);

    //Funds Section
    Route::get('/admin/funds', [AdminController::class, 'manageFunds']);
    Route::post('/post/funds', [AdminController::class, 'postFunds']);

    //Events Section
    Route::get('/admin/event', [AdminController::class, 'event']);
    Route::post('/post/event', [AdminController::class, 'postEvent']);

    //Council & Designation SEction
    Route::get('/admin/council', [AdminController::class, 'council']);
    Route::post('/post/council', [AdminController::class, 'postCouncil']);
    Route::post('/post/councilmember', [AdminController::class, 'postCouncilMember']);

    //Scopes & Works SEction
    Route::get('/admin/scope', [AdminController::class, 'scope']);
    Route::get('/admin/scope_images', [AdminController::class, 'scopeImages']);
    Route::post('/post/scope', [AdminController::class, 'postScope']);
    Route::post('/post/scopework', [AdminController::class, 'postScopeWork']);

    //Testimonial SEction
    Route::get('/admin/testimonial', [AdminController::class, 'testimonial']);
    Route::post('/post/testimonial', [AdminController::class, 'posttestimonial']);

    //Contact Us SEction
    Route::get('/admin/contact', [AdminController::class, 'contactInfo']);
    Route::post('/post/contact', [AdminController::class, 'postcontactinfo']);

    //About Us Section
    Route::get('/admin/about_us', [AdminController::class, 'aboutUsAdmin']);
    Route::post('/post/about_us_categories', [AdminController::class, 'postAboutCategory']);
    Route::post('/post/about_us_details', [AdminController::class, 'postAboutDetail']);
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');
