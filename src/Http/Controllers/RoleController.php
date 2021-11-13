<?php
namespace Nrb\UserRolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use Nrb\UserRolePermission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::all();
        return $data;

    }

}
