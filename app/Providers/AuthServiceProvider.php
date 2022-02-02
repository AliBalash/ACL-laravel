<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\ManageRole;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
//         'App\Models\User' => 'App\Policies\ModelPolicy',
         User::class => ManageRole::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPostPolicies();

        //
    }

    private function registerPostPolicies()
    {
        Gate::define('hasAdmin', [ManageRole::class,'hasAdmin']);
    }
}
