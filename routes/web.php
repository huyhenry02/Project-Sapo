<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\Attribute_ValueController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return redirect()->route('show_login.index');
});
//login
Route::prefix('auth_login')->group(function () {
    //show
    Route::get('/login', [AuthAdminController::class, 'show_login'])->name('show_login.index');
    Route::get('/change_pass', [AuthAdminController::class, 'show_change_pass'])->name('show_change_pass.index');
    Route::get('/verified_email', [AuthAdminController::class, 'show_verified_email'])->name('show_verified_email.index');
    Route::get('/send_email_forgot_pass', [AuthAdminController::class, 'show_send_email_forgot_pass'])->name('show_send_email_forgot_pass.index');
    //post
    Route::post('/login', [AuthAdminController::class, 'login'])->name('login.post');
    Route::get('/actived/{user}/{token}', [AuthAdminController::class, 'actived'])->name('actived.admin');

});
//Page
Route::prefix('page')->middleware(['auth'])->group(function () {
    //Dashboard
    Route::prefix('dashboard')->group(function (){
        Route::get('/default', [DashboardController::class, 'show_default'])->name('show_default.index');
        Route::get('/alternative', [DashboardController::class, 'show_alternative'])->name('show_alternative.index');
    });
    //User
    Route::prefix('user')->group(function (){
        Route::get('logout',[AuthAdminController::class, 'logout'])->name('logout.admin');
        //show
        Route::get('/show_list_user', [UserController::class, 'show_list_user'])->name('show_list_user.index');
        Route::get('/show_add_user', [UserController::class, 'show_add_user'])->name('show_add_user.index');
        Route::get('/show_edit_user', [UserController::class, 'show_edit_user'])->name('show_edit_user.index');

        //post
        Route::post('/add_user', [UserController::class, 'add_user'])->name('add_user.post');

    });
    Route::prefix('customer')->group(function (){
        // show
        Route::get('/show_list_customer', [CustomerController::class, 'show_list_customer'])->name('show_list_customer.index');
        Route::get('/show_add_customer', [CustomerController::class, 'show_add_customer'])->name('show_add_customer.index');
        Route::get('/show_edit_customer', [CustomerController::class, 'show_edit_customer'])->name('show_edit_customer.index');
        Route::get('/show_profile_customer', [CustomerController::class, 'show_profile_customer'])->name('show_profile_customer.index');

        //post
        Route::post('/add_customer', [CustomerController::class, 'add_customer'])->name('add_customer.post');

    });
    //Statistic
    Route::prefix('statistic')->group(function (){
        Route::get('/show_statistic_order', [StatisticController::class, 'show_statistic_order'])->name('show_statistic_order.index');
        Route::get('/show_statistic_revenue', [StatisticController::class, 'show_statistic_revenue'])->name('show_statistic_revenue.index');
    });
    //Brand
    Route::prefix('brand')->group(function (){
        //show
        Route::get('/show_list_brand', [BrandController::class, 'show_list_brand'])->name('show_list_brand.index');
        Route::get('/show_add_brand', [BrandController::class, 'show_add_brand'])->name('show_add_brand.index');
        Route::get('/show_edit_brand', [BrandController::class, 'show_edit_brand'])->name('show_edit_brand.index');
        //post
        Route::post('/add_brand', [BrandController::class, 'add'])->name('add_brand.post');
        Route::get('/delete_brand/{id}', [BrandController::class, 'destroy'])->name('brand.delete');
    });
    //Category
    Route::prefix('category')->group(function (){
        //show
        Route::get('/show_list_category', [CategoryController::class, 'show_list_category'])->name('show_list_category.index');
        Route::get('/show_add_category', [CategoryController::class, 'show_add_category'])->name('show_add_category.index');
        Route::get('/show_edit_category', [CategoryController::class, 'show_edit_category'])->name('show_edit_category.index');

        //post
        Route::post('/add_category', [CategoryController::class, 'add'])->name('add_category.post');
        Route::get('/delete_category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    });
    //Company
    Route::prefix('company')->group(function (){
        Route::get('/show_list_company', [CompanyController::class, 'show_list_company'])->name('show_list_company.index');
        Route::get('/show_add_company', [CompanyController::class, 'show_add_company'])->name('show_add_company.index');
    });
    //Order
    Route::prefix('order')->group(function (){
        Route::get('/show_list_order', [OrderController::class, 'show_list_order'])->name('show_list_order.index');
        Route::get('/show_add_order', [OrderController::class, 'show_add_order'])->name('show_add_order.index');
        Route::get('/show_edit_order', [OrderController::class, 'show_edit_order'])->name('show_edit_order.index');
    });
    //Product
    Route::prefix('product')->group(function (){
        //show
        Route::get('/show_list_product', [ProductController::class, 'show_list_product'])->name('show_list_product.index');
        Route::get('/show_add_product', [ProductController::class, 'show_add_product'])->name('show_add_product.index');
        Route::get('/show_edit_product', [ProductController::class, 'show_edit_product'])->name('show_edit_product.index');

        //post
        Route::post('/add_product', [ProductController::class, 'add'])->name('add_product.post');
        Route::get('/delete_product/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    });
    //Vendor
    Route::prefix('vendor')->group(function (){
        //show
        Route::get('/show_list_vendor', [VendorController::class, 'show_list_vendor'])->name('show_list_vendor.index');
        Route::get('/show_add_vendor', [VendorController::class, 'show_add_vendor'])->name('show_add_vendor.index');
        Route::get('/show_edit_vendor', [VendorController::class, 'show_edit_vendor'])->name('show_edit_vendor.index');
        //post
        Route::post('/add_vendor', [VendorController::class, 'add'])->name('add_vendor.post');
        Route::get('/delete_vendor/{id}', [VendorController::class, 'destroy'])->name('vendor.delete');
    });
    //Attribute
    Route::prefix('attribute')->group(function (){
        //show
        Route::get('/show_list_attribute', [AttributeController::class, 'show_list_attribute'])->name('show_list_attribute.index');
        Route::get('/show_add_attribute', [AttributeController::class, 'show_add_attribute'])->name('show_add_attribute.index');
        Route::get('/show_edit_attribute', [AttributeController::class, 'show_edit_attribute'])->name('show_edit_attribute.index');

        //post
        Route::post('/add_attribute', [AttributeController::class, 'add'])->name('add_attribute.post');
        Route::get('/delete_attribute/{id}', [AttributeController::class, 'destroy'])->name('attribute.delete');

        //show attribute value
        Route::get('/show_list_value/{id}', [Attribute_ValueController::class, 'show_list_value'])->name('show_list_value.index');
        Route::get('/show_add_value/{id}', [Attribute_ValueController::class, 'show_add_value'])->name('show_add_value.index');
        Route::get('/show_edit_value', [Attribute_ValueController::class, 'show_edit_value'])->name('show_edit_value.index');

        //post_value
        Route::post('/add_attribute_value/{attributeId}', [Attribute_ValueController::class, 'add_value'])->name('add_attribute_value.post');
        Route::get('/delete_attribute_value/{attributeId}', [Attribute_ValueController::class, 'destroy'])->name('attribute_value.delete');

    });
    //Vendor
    Route::prefix('role')->group(function (){
        //show
        Route::get('/show_list_role', [RoleController::class, 'show_list_role'])->name('show_list_role.index');
        Route::get('/show_add_role', [RoleController::class, 'show_add_role'])->name('show_add_role.index');
        Route::get('/show_edit_role', [RoleController::class, 'show_edit_role'])->name('show_edit_role.index');
        //post
        Route::post('/add_role', [RoleController::class, 'add'])->name('add_role.post');
        Route::get('/delete_role/{id}', [RoleController::class, 'destroy'])->name('role.delete');
    });
});


