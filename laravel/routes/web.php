<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ShopController;

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
Route::get('tests/test',[ TestController::class, 'index']);

// Route::resource('contacts', ContactFormController::class);
Route::get('contacts',[ ContactFormController::class, 'index'])->name('contacts.index');
Route::get('contacts/create',[ ContactFormController::class, 'create'])->name('contacts.create');
Route::post('contacts/create',[ ContactFormController::class, 'store'])->name('contacts.store');
Route::get('contacts/{id}',[ ContactFormController::class, 'show'])->name('contacts.show');
Route::get('contacts/{id}/edit',[ ContactFormController::class, 'edit'])->name('contacts.edit');
Route::post('contacts/{id}',[ ContactFormController::class, 'update'])->name('contacts.update');
Route::post('contacts/{id}/destroy',[ ContactFormController::class, 'destroy'])->name('contacts.destroy');


// Route::prefix('contacts')->middleware(['auth'])
// ->controller(ContactFormController::class)
// ->name('contacts.')
// ->group(function(){
//     Route::get('/', 'index')->name('index');
   
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('shops',[ ShopController::class, 'index'])->name('shops.index');
