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


//Clear route cache:
 Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:cache');
     return 'Routes cache cleared';
 });

 //Clear config cache:
 Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache cleared';
 }); 

// Clear application cache:
 Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache cleared';
 });

 // Clear view cache:
 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache cleared';
 });


Route::get('/', 'PageController@home');
Route::get('/shop-register', 'PageController@ShopRegister');
Route::POST('/save-shop-register', 'PageController@saveShopRegister');
Route::POST('/shop-validate', 'PageController@ShopValidate');
Route::get('/shop-create-password/{id}', 'PageController@shopCreatePassword');
Route::POST('/shop-update-password', 'PageController@shopUpdatePassword');
Route::POST('/update-login', 'PageController@updateLogin');
Route::get('/get-area/{id}', 'PageController@getArea');

Route::get('/home-page', 'PageController@Home');
Route::get('/about-us', 'PageController@aboutUs');
Route::get('/services', 'PageController@Services');
Route::get('/contact-us', 'PageController@contactUs');
Route::get('/body-wash', 'PageController@bodyWash');
Route::get('/interior-cleaning', 'PageController@interiorCleaning');
Route::get('/engine-detailing', 'PageController@engineDetailing');
Route::get('/car-polish', 'PageController@carPolish');

Route::POST('/contact-mail', 'PageController@contactMail');

Route::get('/customer-create-password/{id}', 'PageController@customerCreatePassword');
Route::POST('/customer-update-password', 'PageController@customerUpdatePassword');

Route::group(['prefix' => 'admin'],function(){

	Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
	  // Password reset routes
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


	Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

	//shop
	Route::POST('/save-shop', 'ShopController@saveShop');
	Route::POST('/update-shop', 'ShopController@updateShop');
	Route::get('/shop/{id}', 'ShopController@editShop');
	Route::get('/shop', 'ShopController@Shop');
	Route::get('/shop-delete/{id}', 'ShopController@deleteShop');

	Route::get('/view-shop/{id}', 'ShopController@viewShop');
	Route::get('/shop-login/{id}', 'Vendor\HomeController@ShopLogin');
	
	Route::get('/get-package-plan/{id}', 'ShopController@getPackagePlan');
	Route::POST('/update-plan', 'ShopController@updatePlan');

	//addservice
	Route::POST('/save-addservice', 'ShopController@saveAddService');
	Route::POST('/update-addservice', 'ShopController@updateAddService');
	Route::get('/addservice/{id}', 'ShopController@editAddService');
	Route::get('/addservice-delete/{id}', 'ShopController@deleteAddService');
	
	Route::get('/shop-notification', 'ShopController@shopNotification');
	Route::get('/update-shop-notification/{id}/{id1}', 'ShopController@updateShopNotification');

	Route::POST('/update-time', 'ShopController@updateTime');

	Route::POST('/shop-send-email', 'ShopController@shopSendEmail');
	Route::POST('/shop-add-password', 'ShopController@shopAddPassword');


	//package
	Route::POST('/save-shop-package', 'PackageController@saveShopPackage');
	Route::POST('/update-shop-package', 'PackageController@updateShopPackage');
	Route::get('/shop-package/{id}', 'PackageController@editShopPackage');
	Route::get('/shop-package', 'PackageController@ShopPackage');
	Route::get('/shop-package-delete/{id}', 'PackageController@deleteShopPackage');
	
	Route::get('/get-shop-package-item/{id}', 'PackageController@getShopPackageItem');


	//service
	Route::POST('/save-service', 'ServiceController@saveService');
	Route::POST('/update-service', 'ServiceController@updateService');
	Route::get('/service/{id}', 'ServiceController@editService');
	Route::get('/service', 'ServiceController@Service');
	Route::get('/service-delete/{id}', 'ServiceController@deleteService');
	Route::get('/new-service', 'ServiceController@newService');
	Route::get('/update-new-service/{id}/{id1}', 'ServiceController@updateNewService');

	//city
	Route::POST('/save-city', 'AreaController@saveCity');
	Route::POST('/update-city', 'AreaController@updateCity');
	Route::get('/city/{id}', 'AreaController@editCity');
	Route::get('/city', 'AreaController@City');
	Route::get('/city-delete/{id}', 'AreaController@deleteCity');

	//area
	Route::POST('/save-area', 'AreaController@saveArea');
	Route::POST('/update-area', 'AreaController@updateArea');
	Route::get('/edit-area/{id}', 'AreaController@editArea');
	Route::get('/area/{id}', 'AreaController@Area');
	Route::get('/area-delete/{id}', 'AreaController@deleteArea');

	//user
	Route::POST('/save-user', 'AdminController@saveUser');
	Route::POST('/update-user', 'AdminController@updateUser');
	Route::get('/user/{id}', 'AdminController@editUser');
	Route::get('/user', 'AdminController@User');
	Route::get('/user-delete/{id}', 'AdminController@deleteUser');

	Route::get('/customer', 'CustomerController@Customer');
	Route::get('/view-customer/{id}', 'CustomerController@viewCustomerDetails');

	Route::POST('/save-customer', 'CustomerController@saveCustomer');
	Route::POST('/update-customer', 'CustomerController@updateCustomer');
	Route::get('/customer/{id}', 'CustomerController@editCustomer');
	Route::get('/customer-delete/{id}', 'CustomerController@deleteCustomer');

	Route::POST('/customer-password-send', 'CustomerController@customerPasswordSend');
	Route::POST('/customer-update-password', 'CustomerController@customerUpdatePassword');

	Route::get('/review', 'ReviewController@Review');

	//notification
	Route::POST('/save-notification', 'NotificationController@saveNotification');
	Route::POST('/update-notification', 'NotificationController@updateNotification');
	Route::get('/notification/{id}', 'NotificationController@editNotification');
	Route::get('/push-notification', 'NotificationController@Notification');
	Route::get('/notification-delete/{id}', 'NotificationController@deleteNotification');

	Route::post('change-password', 'AdminController@changePassword');
	Route::get('view-user/{id}', 'AdminController@viewUser');

	Route::post('settlement-period', 'AdminController@updateSettlementPeriod');
	Route::get('settlement-period', 'AdminController@getSettlementPeriod');

	// coupon Management
	Route::get('/coupon','CouponController@index');
	Route::get('/addCoupon','CouponController@addCoupon');
	Route::get('/viewCoupon/{id}','CouponController@viewCoupon');
	Route::post('/CouponSave','CouponController@CouponSave');
	Route::post('/CouponUpdate','CouponController@CouponUpdate');
	Route::get('/CouponEdit/{id}','CouponController@CouponEdit');
	Route::get('/CouponDelete/{id}','CouponController@CouponDelete');
	Route::get('/get_coupon_service/{id}','CouponController@get_coupon_service');
	Route::get('/get_coupon_user/{id}','CouponController@get_coupon_user');

	Route::get('/new-coupon', 'CouponController@newCoupon');
	Route::get('/update-new-coupon/{id}/{id1}', 'CouponController@updateNewCoupon');


	//slider
	Route::POST('/save-slider', 'SettingsController@saveSlider');
	Route::POST('/update-slider', 'SettingsController@updateSlider');
	Route::get('/slider/{id}', 'SettingsController@editSlider');
	Route::get('/slider', 'SettingsController@Slider');
	Route::get('/slider-delete/{id}', 'SettingsController@deleteSlider');

	//promotion banner
	Route::POST('/save-banner', 'SettingsController@saveBanner');
	Route::POST('/update-banner', 'SettingsController@updateBanner');
	Route::get('/banner/{id}', 'SettingsController@editBanner');
	Route::get('/banner', 'SettingsController@Banner');
	Route::get('/banner-delete/{id}', 'SettingsController@deleteBanner');

	//application settings
	Route::get('/application-settings', 'SettingsController@applicationSettings');
	Route::POST('/update-application-settings', 'SettingsController@updateApplicationSettings');

	//application settings
	Route::get('/terms-and-condition', 'SettingsController@termsAndCondition');
	Route::POST('/update-terms-and-condition', 'SettingsController@updateTermsAndCondition');


	Route::get('/chat-to-customer', function () {
    	return view('admin.chat_to_customer');
	});

	Route::get('/chat-to-customer', 'AdminController@chatToCustomer');
	Route::get('/chat-to-shop', 'AdminController@chatToShop');


	//roles
	Route::POST('/save-role', 'RoleController@saveRole');
	Route::POST('/update-role', 'RoleController@updateRole');
	Route::get('/role/{id}', 'RoleController@editRole');
	Route::get('/role', 'RoleController@Role');
	Route::get('/role-delete/{id}', 'RoleController@deleteRole');


});


Route::group(['prefix' => 'vendor'],function(){


	Route::get('/appointment', function () {
    	return view('vendor.appointment');
	});


	Route::get('/dashboard', 'Vendor\HomeController@dashboard');

	//notification
	Route::POST('/save-notification', 'Vendor\NotificationController@saveNotification');
	Route::POST('/update-notification', 'Vendor\NotificationController@updateNotification');
	Route::get('/notification/{id}', 'Vendor\NotificationController@editNotification');
	Route::get('/push-notification', 'Vendor\NotificationController@Notification');
	Route::get('/notification-delete/{id}', 'Vendor\NotificationController@deleteNotification');
	Route::get('/get_notification_customer/{id}', 'Vendor\NotificationController@getNotificationCustomer');

	//service
	Route::POST('/save-service', 'Vendor\ServiceController@saveService');
	Route::POST('/update-service', 'Vendor\ServiceController@updateService');
	Route::get('/service/{id}', 'Vendor\ServiceController@editService');
	Route::get('/new-service', 'Vendor\ServiceController@Service');
	Route::get('/service-delete/{id}', 'Vendor\ServiceController@deleteService');


	// coupon Management
	Route::get('/coupon','Vendor\CouponController@index');
	Route::get('/addCoupon','Vendor\CouponController@addCoupon');
	Route::get('/viewCoupon/{id}','Vendor\CouponController@viewCoupon');
	Route::post('/CouponSave','Vendor\CouponController@CouponSave');
	Route::post('/CouponUpdate','Vendor\CouponController@CouponUpdate');
	Route::get('/CouponEdit/{id}','Vendor\CouponController@CouponEdit');
	Route::get('/CouponDelete/{id}','Vendor\CouponController@CouponDelete');
	Route::get('/get_coupon_service/{id}','Vendor\CouponController@get_coupon_service');
	Route::get('/get_coupon_user/{id}','Vendor\CouponController@get_coupon_user');


	Route::POST('/save-workers', 'Vendor\WorkersController@saveWorkers');
	Route::POST('/update-workers', 'Vendor\WorkersController@updateWorkers');
	Route::get('/workers/{id}', 'Vendor\WorkersController@editWorkers');
	Route::get('/workers', 'Vendor\WorkersController@Workers');
	Route::get('/workers-delete/{id}', 'Vendor\WorkersController@deleteWorkers');
	Route::get('/get_workers_services/{id}', 'Vendor\WorkersController@getWorkersServices');

	Route::get('/review', 'Vendor\ReviewController@Review');
	Route::get('/report', 'Vendor\ReportController@Report');

	//roles
	Route::POST('/save-role', 'Vendor\RoleController@saveRole');
	Route::POST('/update-role', 'Vendor\RoleController@updateRole');
	Route::get('/role/{id}', 'Vendor\RoleController@editRole');
	Route::get('/role', 'Vendor\RoleController@Role');
	Route::get('/role-delete/{id}', 'Vendor\RoleController@deleteRole');

	Route::get('/calendar', function () {
    	return view('vendor.calendar');
	});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
