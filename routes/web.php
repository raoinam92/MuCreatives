<?php


    

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
//     return view('Layout.app');
// });

Route::group(['middleware' => 'forceSsl'], function () {
    Route::get('/', 'AdminController@index' )->name('admin.logo');
    Route::get('/about-us', 'AdminController@about' )->name('admin.about');

Route::get('/services', 'AdminController@services' )->name('admin.services');

Route::get('/industries', 'AdminController@industries' )->name('admin.industries');

Route::get('/partnership', 'AdminController@partnership' )->name('admin.partnership');

Route::get('/mission_vision', 'AdminController@mission_vision' )->name('admin.mission_vision');

Route::get('/google5ebfd155bb9f7e32.html', 'AdminController@google5ebfd155bb9f7e32' )->name('admin.google5ebfd155bb9f7e32');

// Graphic Design
Route::get('/graphic-design-michigan/', 'AdminController@graphicDesign' )->name('admin.graphicDesign');

Route::get('/graphic-design/website-design', 'AdminController@userExperience' )->name('admin.userExperience');

Route::get('/graphic-design/digital-design', 'AdminController@digitalDesign' )->name('admin.digitalDesign');

Route::get('/graphic-design/logo-design', 'AdminController@logoDesign' )->name('admin.logoDesign');

Route::get('/graphic-design/packaging-design', 'AdminController@packagingDesign' )->name('admin.packagingDesign');

Route::get('/graphic-design/print-design', 'AdminController@printDesign' )->name('admin.printDesign');

Route::get('/graphic-design/illustration', 'AdminController@illustration' )->name('admin.illustration');

Route::get('graphic-design/niche-artwork', 'AdminController@nicheArt' )->name('admin.nicheArt');

// Route::get('/Digitaldesign', 'AdminController@digitalDesign' )->name('admin.digitalDesign');

Route::get('/graphic-design/product-design', 'AdminController@productDesign' )->name('admin.productDesign');

Route::get('/graphic-design/web-design-mi/', 'AdminController@websiteDesignui' )->name('admin.websiteDesignui');

Route::get('/graphic-design/branding ', 'AdminController@branding' )->name('admin.branding');

// Digital Marketing

Route::get('/digital-marketing-agency-michigan/', 'AdminController@digitalmarket' )->name('admin.digitalmarket');

Route::get('/digital-marketing/online-reputation-managment', 'AdminController@reputation' )->name('admin.reputation');

Route::get('/digital-marketing/local-seo', 'AdminController@localSeo' )->name('admin.localSeo');

Route::get('/digital-marketing/public-relations', 'AdminController@publicRelation' )->name('admin.publicRelation');

Route::get('/digital-marketing/app-marketing', 'AdminController@appMarketing' )->name('admin.appMarketing');

Route::get('/digital-marketing/michigan-ppc/', 'AdminController@ppc' )->name('admin.ppc');

Route::get('/digital-marketing/social-media-marketing-michigan/', 'AdminController@smm' )->name('admin.smm');

Route::get('/digital-marketing/michigan-seo-company/', 'AdminController@seo' )->name('admin.seo');

Route::get('/digital-marketing/content-marketing', 'AdminController@contentMarketing' )->name('admin.contentMarketing');

// Website Development

Route::get('/web-developer-grand-rapids-mi/', 'AdminController@webdevelopment' )->name('admin.webdevelopment');
Route::get('/website-development/cms/wordpress-developer-grand-rapids-michigan/', 'AdminController@wordpress')->name('admin.wordpress');
Route::get('/website-development/cms/wix', 'AdminController@wix')->name('admin.wix');
Route::get('/website-development/cms/joomla', 'AdminController@joomla')->name('admin.joomla');
Route::get('/website-development/cms/drupal', 'AdminController@drupal')->name('admin.drupal');
Route::get('/website-development/framework/angularjs-development-company/', 'AdminController@angularjs')->name('admin.angularjs');

Route::get('/website-development/framework/php/', 'AdminController@php')->name('admin.php');

Route::get('/website-development/framework/javascript/', 'AdminController@javascript')->name('admin.javascript');

Route::get('/website-development/framework/java/', 'AdminController@java')->name('admin.java');

Route::get('/website-development/framework/cake-php/', 'AdminController@cakephp')->name('admin.cakephp');
Route::get('/website-development/framework/dotnet/', 'AdminController@dotnet')->name('admin.dotnet');
Route::get('/website-development/framework/codeigniter/', 'AdminController@codeigniter')->name('admin.codeigniter');
Route::get('/website-development/framework/zend/', 'AdminController@zend')->name('admin.zend');
Route::get('/website-development/framework/laravel/', 'AdminController@laravel')->name('admin.laravel');
Route::get('/website-development/cms-website-development-michigan/', 'AdminController@cms')->name('admin.cms');
Route::get('/website-development/language', 'AdminController@language')->name('admin.language');
Route::get('/website-development/framework', 'AdminController@framework')->name('admin.framework');

// web Applications
Route::get('/web-application/csd', 'AdminController@csd' )->name('admin.csd');
Route::get('/web-application/cmssystem','AdminController@cmssystem')->name('admin.cmssystem');
Route::get('/web-application/socialnetworking','AdminController@socialnetworking')->name('admin.socialnetworking');
Route::get('/web-application/customerp','AdminController@customerp')->name('admin.customerp');


// Mobile Applications
Route::get('/mobile-application', 'AdminController@mobileapplication' )->name('admin.mobileapplication');
Route::get('/mobile-application/iphone','AdminController@iphone')->name('admin.iphone');
Route::get('/mobile-application/android','AdminController@android')->name('admin.android');
Route::get('/mobile-application/hybrid','AdminController@hybrid')->name('admin.hybrid');

// Web Applications
Route::get('/web-applications', 'AdminController@webapplication' )->name('admin.webapplication');

// E-Commerce
Route::get('/ecommerce-website-development-michigan/', 'AdminController@ecommerce' )->name('admin.ecommerce');
Route::get('/ecommerce/big-commerce', 'AdminController@bigcommerce' )->name('admin.bigcommerce');
Route::get('/ecommerce/magento', 'AdminController@magento' )->name('admin.magento');
Route::get('/ecommerce/shopify', 'AdminController@shopify' )->name('admin.shopify');
Route::get('/ecommerce/woocommerce', 'AdminController@woocommerce' )->name('admin.woocommerce');

Route::get('/landing_page', 'AdminController@landingpage' )->name('admin.landingpage');
Route::get('/seo_landing_page', 'AdminController@seolandingpage' )->name('admin.seolandingpage');
Route::get('/smm', 'AdminController@smmpage' )->name('admin.smmpage');
Route::get('/web_dev', 'AdminController@webdev' )->name('admin.webdev');
Route::get('/custom_dev', 'AdminController@customdev' )->name('admin.customdev');



Route::get('/contact', 'AdminController@contact')->name('admin.contact');
Route::get('/sendemail', 'SendEmailController@index');
});

Route::get('/clear', function() {

Artisan::call('cache:clear');
Artisan::call('config:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');

return "Cleared!";

});

Route::post('/landingpage/send', 'SendEmailController@send_lamdingpage');
Route::post('/sendemail/send', 'SendEmailController@send');
Route::get('send','mailController@send');
Route::get('/send/email', 'HomeController@mail');
Route::get('/get/ip','AdminController@get_ip')->name('getip');


Route::get('/video/review','ReviewController@show');
Route::post('/video/upload','ReviewController@upload')->name('uploadvideo');

