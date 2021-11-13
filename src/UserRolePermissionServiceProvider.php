<?php

namespace Nrb\UserRolePermission;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class UserRolePermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $basePath = dirname(__DIR__);
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
/*        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom($basePath.'/publishable/config/userrolepermission.php', 'user_role_permission');*/
    }

    public function register()
    {
        $this->regisPublishAbles();
    }

    public function regisPublishAbles()
    {
        $basePath = dirname(__DIR__);
        $arrayPublishAble = [
            'config' => [
                "$basePath/publishable/config/userrolepermission.php"  => config_path('userrolepermission.php')
            ],
            'migrations' => [
                "$basePath/publishable/database/migrations"  => database_path('migrations')
            ]
        ];

        foreach ($arrayPublishAble as $group=>$paths){
            $this->publishes($paths, $group);
        }
    }

    public function auth_user()
    {
        $data = "test";
        return $data;
    }
}
