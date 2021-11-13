<?php
namespace Nrb\UserRolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use Nrb\UserRolePermission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $data = Permission::all();
        return $data;
    }
}

