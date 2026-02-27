<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\RoomBookingController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomMasterController;
use App\Http\Controllers\UserInventoryController;
use App\Http\Controllers\AdminRequestsController;
use App\Http\Controllers\ItemRequestController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserManagementController;


Route::middleware('auth')->group(function () {

    Route::get('/myrequest',
        [ItemRequestController::class, 'myRequests'])
        ->name('my.request');

});


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Routes (Auth Required)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

Route::post('/inventory/{inventory}/request', [ItemRequestController::class, 'store'])
    ->name('request.store');


Route::middleware(['auth'])->group(function () {
Route::resource('checklist', ChecklistController::class);

Route::post('/checklist/bulk-update', [ChecklistController::class, 'bulkUpdate'])
    ->name('checklist.bulkUpdate');

Route::get('/user-checklist', [ChecklistController::class, 'userChecklist'])
    ->name('user.checklist')
    ->middleware('auth');
});


    // Admin Dashboard
Route::get('/admindashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');
      // USER DASHBOARD
Route::get('/userdashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard');

//Add New Vendor
Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');
//vendors  connect db
Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');
Route::post('/vendors', [VendorController::class, 'store'])->name('vendors.store');
// Vendors Delete
Route::delete('/vendors/{vendor}', [VendorController::class, 'destroy'])->name('vendors.destroy');
//Vendor Deatil & Transaction
Route::get('/vendors/{vendor}', 
    [VendorController::class, 'show']
)->name('vendors.show');
// vendor Add Transactiion
Route::get('/vendors/{vendor}/add-transaction', [VendorController::class, 'addTransaction'])
    ->name('vendor.addTransaction');

Route::post('/vendors/{vendor}/transactions', [VendorController::class, 'storeTransaction'])
    ->name('vendor.storeTransaction');

    // Profile
    Route::get('/profil', [ProfileController::class, 'index'])
        ->name('profil');
    // Add New Account
  Route::get('/account-management', function () {
    return view('CreateNewAccount');
})->name('account-management.index');

Route::get('/account-management', function () {
    return view('CreateNewAccount');
})->name('account-management.index');

// ✅ simpan ke DB users
Route::post('/account-management', [UserManagementController::class, 'store'])
    ->name('account-management.store');




    // Inventory
    Route::get('/inventory/scan', [InventoryController::class, 'scanForm'])
        ->name('inventory.scan');

    Route::post('/inventory/scan', [InventoryController::class, 'scanStore'])
        ->name('inventory.scan.store');
    Route::get('/inventory/export', [App\Http\Controllers\InventoryController::class, 'export'])
    ->name('inventory.export');

    Route::resource('inventory', InventoryController::class);

    // Other Modules
    Route::get('/assets/scan/{uuid}', [AssetController::class, 'scan'])->name('assets.scan');
    Route::resource('assets', AssetController::class);
    Route::resource('checklist', ChecklistController::class);
    Route::resource('room-booking', RoomBookingController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('reports', ReportController::class);

    // UserInventory
Route::get('/userinventory', [UserInventoryController::class, 'index'])
    ->name('user.inventory');

// MY Request
Route::get('/myrequest/{id}/pdf', [ItemRequestController::class, 'downloadPdf'])
    ->name('request.pdf')
    ->middleware('auth');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/requests', [AdminRequestsController::class, 'index'])
        ->name('admin.requests.index');

    Route::post('/admin/requests/{itemRequest}/approve', [AdminRequestsController::class, 'approve'])
        ->name('admin.requests.approve');

    Route::post('/admin/requests/{itemRequest}/reject', [AdminRequestsController::class, 'reject'])
        ->name('admin.requests.reject');

    Route::get('/admin/requests/export', [AdminRequestsController::class, 'exportCsv'])
        ->name('admin.requests.export');
});

