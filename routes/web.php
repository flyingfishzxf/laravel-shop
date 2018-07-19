<?php

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    // 开始
    Route::group(['middleware' => 'email_verified'], function () {
        // 收货地址
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
        // 商品
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
        // 购物车
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        // 订单相关
        Route::post('orders', 'OrdersController@store')->name('orders.store');
        Route::get('orders', 'OrdersController@index')->name('orders.index');
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
        Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
        Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
        Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');

        // 支付
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        // 前端回调页面
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
    });
});
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
// 支付宝支付服务器回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');