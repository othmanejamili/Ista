<?php
use App\Http\Middleware\localization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormateurController; 
use App\Http\Controllers\LogController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\IstaController;
use App\Http\Controllers\CVController;
//use App\Http\Controllers\Auth\ForgotPasswordController;
//use App\Http\Controllers\Auth\ResetPasswordController;

// Category routes
//Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
//Route::post('category', [CategoryController::class, 'store'])->name('category.store');
//Route::get('category', [CategoryController::class, 'show'])->name('category.show');
//Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
//Route::put('category/{id}/edit', [CategoryController::class, 'update']);
//Route::get('category/{id}', [CategoryController::class, 'destroy'])->name('category.delet');



// login routes
Route::get('log/create', [LogController::class, 'create'])->name('log.create');
Route::post('log', [LogController::class, 'store'])->name('log.store'); 
Route::get('/logi', [LogController::class, 'show'])->name('log.show');
Route::post('/logi', [LogController::class, 'login'])->name('log.login');
Route::get('/logout', [LogController::class, 'drop'])->name('drop');

Route::get('/Accueil', [AccueilController::class, 'Accueil'])->name('Accueil.show');

// page  routes user 
    Route::get('Formateurs', [FormateurController::class, 'show_user'])->name('Formateur.show_user');
    Route::get('istas', [IstaController::class, 'show_user'])->name('ista.show_user');

//  Les Lauréats
Route::get('/upload-cv', [CVController::class, 'showUploadForm'])->name('cv.upload_cv');
Route::post('/upload-cv', [CVController::class, 'uploadCVFile'])->name('cv.upload_cv');



// Define routes accessible only to admins
Route::middleware(['auth', 'role:admin'])->group(function () {
    // ista routes
    Route::get('ista/create', [IstaController::class, 'create'])->name('ista.create');
    Route::post('ista', [IstaController::class, 'store'])->name('ista.store');
    Route::get('ista', [IstaController::class, 'show'])->name('ista.show');
    Route::get('ista/{id}/edit', [IstaController::class, 'edit'])->name('ista.edit');
    Route::put('ista/{id}/edit', [IstaController::class, 'update']);
    Route::get('ista/{id}', [IstaController::class, 'destroy'])->name('ista.delete');

    // Formateur routes
    Route::get('Formateur/create', [FormateurController::class, 'create'])->name('formateur.create');
    Route::post('Formateur', [FormateurController::class, 'store'])->name('formateur.store');
    Route::get('Formateur', [FormateurController::class, 'show'])->name('formateur.show');
    Route::get('Formateur/{id}/edit', [FormateurController::class, 'edit'])->name('formateur.edit');
    Route::put('Formateur/{id}/edit', [FormateurController::class, 'update']);
    Route::get('Formateur/{id}', [FormateurController::class, 'destroy'])->name('formateur.delete');

    // these routes for download CV and show all people upload theme cv
    Route::get('/download', [CVController::class, 'show'])->name('cv.download');
    Route::get('/download/{id}', [CVController::class, 'downloadPDF'])->name('cv.download');
});






//Auth::routes();
// Password Reset Routes
//Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
//Route::get('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
//Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

//Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
//Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


use App\Http\Controllers\ExcelToJsonController;

// Routes for uploading Excel file and converting to JSON
Route::post('/convert-excel-to-json', [ExcelToJsonController::class, 'convertExcelToJson']);
Route::get('/convert', [ExcelToJsonController::class, 'showConvertForm']);




Route::get('language/{lang}', 'HomeController@language')->name('language');

Route::get('/', 'WelcomeController@index')->name('welcome');
use App\Http\Controllers\LocalizationController;

Route::get('locale/{locale}', [LocalizationController::class, 'setLang'])->name('setLang');




// for schudele
// routes/web.php
Route::get('/upload', 'ImageController@showUploadForm')->name('upload.show');
Route::post('/upload', 'ImageController@store')->name('upload.store');
Route::get('/gallery', 'ImageController@showGallery')->name('activity.gallery');
Route::get('/activity', 'ImageController@showU')->name('actevity.show');
Route::get('/edit/{id}', 'ImageController@edit')->name('activity.edit');
Route::put('/update/{id}', 'ImageController@update')->name('activity.update');
Route::delete('/delete/{id}', 'ImageController@destroy')->name('image.destroy');








