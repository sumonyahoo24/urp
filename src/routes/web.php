<?php

use Nrb\UserRolePermission\Http\Controllers\PermissionController;
use Nrb\UserRolePermission\Http\Controllers\RoleController;




Route::get('/role', [RoleController::class, 'index'])->name('role_list');
Route::get('/permission', [PermissionController::class, 'index'])->name('permission_list');

