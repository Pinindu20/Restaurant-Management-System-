<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;



Route::get("/",[HomeController::class,"index"]);

Route::get("/menu",[HomeController::class,"menu"]);

Route::get("/gallery",[HomeController::class,"gallery"]);

Route::get("/about",[HomeController::class,"about"]);

Route::get("/contact",[HomeController::class,"contact"]);

Route::get("/reservation",[HomeController::class,"reservation"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/remove/{id}",[HomeController::class,"remove"]);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/redirects",[HomeController::class,"redirects"]);


Route::get("/table_details/{id}",[HomeController::class,"table_details"]);

Route::post("/add_booking/{id}",[HomeController::class,"add_booking"]);


Route::get("/show_order",[HomeController::class,"show_order"]);


Route::get("/bill/{id}",[HomeController::class,"print"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});







Route::get("/users",[AdminController::class,"user"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/orders",[AdminController::class,"orders"]);

Route::get("/search",[AdminController::class,"search"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/create_table",[AdminController::class,"create_table"]);

Route::post("/add_table",[AdminController::class,"add_table"]);

Route::get("/table_delete/{id}",[AdminController::class,"table_delete"]);

Route::get("/table_update/{id}",[AdminController::class,"table_update"]);

Route::post("/edit_table/{id}",[AdminController::class,"edit_table"]);

Route::get("/delete_reservation/{id}",[AdminController::class,"delete_reservation"]);

Route::get("/approve_book/{id}",[AdminController::class,"approve_book"]);

Route::get("/reject_book/{id}",[AdminController::class,"reject_book"]);



Route::controller(HomeController::class)->group(function(){
    Route::get('stripe/{subtotal}', 'stripe');
    Route::post('stripe/{subtotal}', 'stripePost')->name("stripe.post");
});


// Route::controller(HomeController::class)->group(function(){
//     Route::get('stripe', 'stripe')->name('stripe');  // Add name for clarity
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// });


// Route::get("/stripe",[HomeController::class,"stripe"]);
// Route::get('/stripe/{subtotal}', [HomeController::class, 'stripe']);
