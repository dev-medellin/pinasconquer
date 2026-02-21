<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Middleware\ThrottleRequests;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;

Route::view('/', 'pages.home')->name('home');
// Show registration form (GET)

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::post('/profile/change-email', [ProfileController::class, 'changeEmail'])->name('profile.changeEmail');
    // Shop route for logged-in users only
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
});

// Show register form
Route::view('/AutoPatch/index', 'pages.AutoPatch')->name('AutoPatch');

// // Handle registration
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::view('/rank', 'pages.rank')->name('rank');
Route::view('/download', 'pages.download')->name('download');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/db-insert-test', function () {
//     try {
//         $uniqueUser = 'test_user_' . time(); // Unique username every time
        
//         $inserted = DB::table('accounts')->insert([
//             'username' => $uniqueUser,
//             'Password' => 'plain_text_pass', // Note: Using plain text as per your earlier logic
//             'email'    => $uniqueUser . '@example.com',
//             'IP'       => request()->ip(),
//             // Add other required columns here if they don't have default values
//         ]);

//         if ($inserted) {
//             // Verify it was actually saved
//             $check = DB::table('accounts')->where('username', $uniqueUser)->first();
            
//             return response()->json([
//                 'status' => 'Success',
//                 'message' => 'Data inserted and verified!',
//                 'inserted_user' => $check
//             ]);
//         }

//     } catch (\Exception $e) {
//         return response()->json([
//             'status' => 'Error',
//             'message' => $e->getMessage()
//         ], 500);
//     }
// });
// Route::get('/db-test', function () {
//     try {
//         // 1. Check if the connection is alive
//         DB::connection()->getPdo();
//         $dbName = DB::connection()->getDatabaseName();
        
//         // 2. Try to fetch the first account
//         $firstAccount = DB::table('accounts')->first();

//         return response()->json([
//             'status' => 'Success',
//             'database' => $dbName,
//             'data_found' => $firstAccount ? 'Yes' : 'Table is empty',
//             'sample_data' => $firstAccount
//         ]);

//     } catch (\Exception $e) {
//         // Log the exact error for debugging
//         Log::error("DB Test Failed: " . $e->getMessage());

//         return response()->json([
//             'status' => 'Error',
//             'message' => $e->getMessage(),
//             'hint' => 'Check your .env file credentials and Hostinger Remote MySQL settings.'
//         ], 500);
//     }
// });