<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Posts;
use App\User;
use App\Permission;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        // 'App\Posts' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        $permissions = Permission::with('roles')->get(); 

        foreach ($permissions as $permission) {
        
            Gate::define($permission->name, function ($user) {
                return $user->hasPermission($permission) == $post->user_id;
            });
        }



    }
}
