<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;


//------------------- FRONTEND --------------------------

    //-------------------home----------------------

    Route::get('/',[
        'uses'=>'HotelController@showHomePage',
        'as'=>'/'
    ]);

    //-------------------auth---------------------

    Route::get('/customer/sign-in',[
        'uses'=>'CheckoutController@showSignIn',
        'as'=>'sign-in'
    ]);
    Route::post('/customer/signIn',[
        'uses'=>'CheckoutController@loginCustomer',
        'as'=>'customer-sign-in'
    ]);
    Route::post('/customer/sign-out',[
        'uses'=>'CheckoutController@signOutCustomer',
        'as'=>'customer-sign-out'
    ]);
    Route::get('/customer/sign-up',[
        'uses'=>'HotelController@showSignUp',
        'as'=>'sign-up'
    ]);
    Route::post('/customer/signup',[
        'uses'=>'HotelController@saveCustomerInfo',
        'as'=>'customer-signup'
    ]);
    Route::post('/customer/register',[
        'uses'=>'CheckoutController@saveCustomer',
        'as'=>'customer-sign-up'
    ]);
    Route::post('/customer/singUp',[
        'uses'=>'CheckoutController@signUpCustomer',
        'as'=>'new-customer-sign-up'
    ]);
    Route::post('/customer/singIn',[
        'uses'=>'CheckoutController@singInCustomer',
        'as'=>'new-customer-sign-in'
    ]);

    //------------------hotel-------------------

    Route::get('/hotel/available',[
        'uses'=>'HotelController@showAvailableHotel',
        'as'=>'available-hotel'
    ]);

    //------------------room--------------------

    Route::get('/room/choose/{id}',[
        'uses'=>'RoomController@showRooms',
        'as'=>'choose-room'
    ]);
    Route::get('/room/change/{id}',[
        'uses'=>'RoomController@changeRoom',
        'as'=>'change-room'
    ]);
    //------------------booking-------------------

    Route::get('/booking/details',[
        'uses'=>'BookingController@showBookingDetails',
        'as'=>'booking-details'
    ]);
    Route::post('/booking/payment',[
        'uses'=>'BookingController@saveBookingInfo',
        'as'=>'new-booking-payment'
    ]);
    Route::get('/booking/complete',[
        'uses'=>'BookingController@completeBooking',
        'as'=>'complete-booking'
    ]);

    //------------------checkout--------------------

    Route::get('/checkout',[
        'uses'=>'CheckoutController@showCheckOut',
        'as'=>'checkout-payment'
    ]);
    Route::get('/checkout/confirmation',[
        'uses'=>'CheckoutController@showCheckOutConfirmation',
        'as'=>'checkout-confirmation'
    ]);

    //-------------------blog-----------------------

    Route::get('/blog',[
        'uses'=>'BlogController@showBlog',
        'as'=>'view-blog'
    ]);
    Route::get('/blog/read/{id}',[
        'uses'=>'BlogController@showBlogDetails',
        'as'=>'read-blog'
    ]);





//  ----------------------- ADMIN ----------------------

    //----------------------location--------------------

    Route::get('/location/add',[
        'uses'=>'LocationController@showAddLocation',
        'as'=>'add-location'
    ]);
    Route::get('/location/manage',[
        'uses'=>'LocationController@showManageLocation',
        'as'=>'manage-location'
    ]);
    Route::post('/location/save',[
        'uses'=>'LocationController@saveLocation',
        'as'=>'new-location'
    ]);
    Route::get('/location/delete/{id}',[
        'uses'=>'LocationController@deleteLocation',
        'as'=>'delete-location'
    ]);

    //----------------------hotel--------------------

    Route::get('/hotel/add',[
        'uses'=>'HotelController@showAddHotel',
        'as'=>'add-hotel'
    ]);
    Route::get('/hotel/manage',[
        'uses'=>'HotelController@showManageHotel',
        'as'=>'manage-hotel'
    ]);
    Route::post('/hotel/save',[
        'uses'=>'HotelController@saveHotel',
        'as'=>'new-hotel'
    ]);
    Route::get('/hotel/image/add',[
        'uses'=>'HotelController@showAddHotelImage',
        'as'=>'add-hotel-image'
    ]);
    Route::post('/hotel/image/save/',[
        'uses'=>'HotelController@saveHotelImage',
        'as'=>'new-hotel-image'
    ]);
    Route::get('/hotel/image/manage/',[
        'uses'=>'HotelController@showManageHotelImage',
        'as'=>'manage-hotel-image'
    ]);
    Route::get('/hotel/image/delete/{id}',[
        'uses'=>'HotelController@deleteImage',
        'as'=>'delete-image'
    ]);

    Route::get('/hotel/details/{id}',[
        'uses'=>'HotelController@showHotelDetails',
        'as'=>'hotel-details'
    ]);
    Route::get('/hotel/edit/{id}',[
        'uses'=>'HotelController@editHotel',
        'as'=>'edit-hotel'
    ]);
    Route::post('/hotel/update',[
        'uses'=>'HotelController@updateHotelInfo',
        'as'=>'update-hotel'
    ]);
    Route::get('/hotel/delete/{id}',[
        'uses'=>'HotelController@deleteHotel',
        'as'=>'delete-hotel'
    ]);

    //----------------------room--------------------

    Route::get('/room/add',[
        'uses'=>'RoomController@showAddRoom',
        'as'=>'add-room'
    ]);
    Route::get('/room/manage',[
        'uses'=>'RoomController@showManageRoom',
        'as'=>'manage-room'
    ]);
    Route::get('/get/hotels/{id}','RoomController@getHotels');

    Route::post('/room/add',[
        'uses'=>'RoomController@saveRoom',
        'as'=>'new-room'
    ]);
    Route::get('/room/details/{id}',[
        'uses'=>'RoomController@showRoomDetails',
        'as'=>'room-details'
    ]);
    Route::get('/room/book/{id}',[
        'uses'=>'RoomController@bookRoom',
        'as'=>'book-room'
    ]);
    Route::get('/room/unbooked/{id}',[
        'uses'=>'RoomController@unbookedRoom',
        'as'=>'unbooked-room'
    ]);
    Route::get('/room/edit/{id}',[
        'uses'=>'RoomController@showEditRoom',
        'as'=>'edit-room'
    ]);
    Route::post('/room/update',[
        'uses'=>'RoomController@updateRoomInfo',
        'as'=>'update-room'
    ]);
    Route::get('/room/delete/{id}',[
        'uses'=>'RoomController@deleteRoom',
        'as'=>'delete-room'
    ]);

    //----------------------blog--------------------

    Route::get('/blog/add',[
        'uses'=>'BlogController@showAddBlog',
        'as'=>'add-blog'
    ]);
    Route::get('/blog/manage',[
        'uses'=>'BlogController@showManageBlog',
        'as'=>'manage-blog'
    ]);
    Route::post('/blog/add',[
        'uses'=>'BlogController@saveBlog',
        'as'=>'new-blog'
    ]);
    Route::get('/blog/published/{id}',[
        'uses'=>'BlogController@publisheBlog',
        'as'=>'published-blog'
    ]);
    Route::get('/blog/unpublished/{id}',[
        'uses'=>'BlogController@unpublishBlog',
        'as'=>'unpublished-blog'
    ]);
    Route::get('/blog/edit/{id}',[
        'uses'=>'BlogController@showEditBlog',
        'as'=>'edit-blog'
    ]);
    Route::post('/blog/update',[
        'uses'=>'BlogController@updateBlogInfo',
        'as'=>'update-blog'
    ]);
    Route::get('/blog/delete/{id}',[
        'uses'=>'BlogController@deleteBlog',
        'as'=>'delete-blog'
    ]);

    //----------------------booking--------------------

    Route::get('/booking/manage',[
        'uses'=>'BookingController@showManageBooking',
        'as'=>'manage-booking'
    ]);
    Route::get('/booking/view/{id}',[
        'uses'=>'BookingController@showBookingDetailsView',
        'as'=>'view-booking'
    ]);
    Route::get('/booking/confirm/view/{id}',[
        'uses'=>'BookingController@showConfirmBooking',
        'as'=>'confirm-booking'
    ]);
    Route::get('/booking/release/{id}',[
        'uses'=>'BookingController@showConfirmRelease',
        'as'=>'confirm-release'
    ]);
    Route::get('/booking/not-confirmed',[
        'uses'=>'BookingController@confirmNot',
        'as'=>'not-confirmed'
    ]);
    Route::get('/booking/confirmed',[
        'uses'=>'BookingController@confirm',
        'as'=>'confirmed'
    ]);
    Route::get('/booking/released',[
        'uses'=>'BookingController@release',
        'as'=>'released'
    ]);
    Route::post('/booking/confirm',[
        'uses'=>'BookingController@confirmBooking',
        'as'=>'confirm-new-booking'
    ]);
    Route::get('/booking/delete/{id}',[
        'uses'=>'BookingController@deleteBooking',
        'as'=>'delete-booking'
    ]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

    // Google Login
    Route::get('/login/google',[
        'uses'=>'Auth\LoginController@redirectToGoogle',
        'as'=>'login-google'
    ]);
    Route::get('/login/google/callback',[
        'uses'=>'Auth\LoginController@handleGoogleCallback',
    ]);

    // Facebook Login
    Route::get('/login/facebook',[
        'uses'=>'Auth\LoginController@redirectToFacebook',
        'as'=>'login-facebook'
    ]);
    Route::get('/login/facebook/callback',[
        'uses'=>'Auth\LoginController@handleFacebookCallback',
    ]);

    // Github Login
    Route::get('/login/github',[
        'uses'=>'Auth\LoginController@redirectToGithub',
        'as'=>'login-github'
    ]);
    Route::get('/login/github/callback',[
        'uses'=>'Auth\LoginController@handleGithubCallback',
    ]);

