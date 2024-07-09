<?php
use Processton\ProcesstonOrg\Http\Controllers\ProcesstonOrgController;

Route::middleware([
    'web'
])->group(function () {

    Route::get('/resolve/{type}', [ProcesstonOrgController::class, 'index'])->name('processton-app-org.index');    
    
});


Route::middleware([
    'api'
])->group(function () {

    Route::get('/resolve/{type}', [ProcesstonOrgController::class, 'index'])->name('processton-app-org.index');


});