<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    AdminController,
    BarangController,
    DashboardController,
    CustomerController,
    DirekturController,
    SupplierController,
};
use App\Models\Barang;

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::group([
    'middleware' => ['auth', 'role:admin,customer']
], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // // Rute yang dapat diakses oleh admin dan customer
    // Route::resource('/kservis', KategoriServisController::class);
    // Route::resource('/kbarang', KategoriBarangController::class);
    // Route::resource('/supplier', SupplierController::class);
    // Route::resource('/dbarang', DaftarBarangController::class);
    // Route::resource('/bmasuk', BarangMasukController::class);
    // Route::resource('/bkeluar', BarangKeluarController::class);
    // Route::resource('/servismasuk', ServisMasukController::class)->except(['show']);
    // Route::delete('/servismasuk/{id}', [ServisMasukController::class, 'destroy'])->name('servismasuk.delete');
    // Route::get('/servismasuk/{servismasuk}/edit', [ServisMasukController::class, 'edit'])->name('servismasuk.edit');

    Route::group([
        'middleware' => 'role:admin'
    ], function () {

        // Rute yang hanya dapat diakses oleh admin
        // Route::resource('/pengguna', PenggunaController::class);
        //rute customer
        Route::resource('/customer', CustomerController::class)->except(['show']);
        // Route::get('/daftarbarang/pdf', [DaftarBarangController::class, 'generatePDF'])->name('dbarang.pdf');
        Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');
        Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
        // Route::get('karyawan/print', [KaryawanController::class, 'printEmployees'])->name('karyawan.print');

        //rute direktur
        Route::resource('/direktur', DirekturController::class)->except(['show']);
        Route::delete('/direktur/{id}', [DirekturController::class, 'destroy'])->name('direktur.delete');
        Route::get('/direktur/{direktur}/edit', [DirekturController::class, 'edit'])->name('direktur.edit');

        //rute admin
        Route::resource('/admin', AdminController::class)->except(['show']);
        Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
        Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');

        //rute barang
        Route::resource('/barang', BarangController::class)->except(['show']);
        Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
        Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');

        // Rute laporan
        // Route::get('/laporan/barang', [DaftarBarangController::class, 'laporanBarang'])->name('laporan.barang');
        // Route::get('/laporan/servis', [KategoriServisController::class, 'laporanServis'])->name('laporan.servis');
        // Route::get('/laporan/karyawan', [KaryawanController::class, 'laporanKaryawan'])->name('laporan.karyawan');
        // Route::get('/servismasuk/print', [ServisMasukController::class, 'printServis'])->name('servismasuk.print');
    });
});
