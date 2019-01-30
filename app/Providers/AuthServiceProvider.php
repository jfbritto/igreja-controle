<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {

            if(auth()->user()->isAdmin)
                return true;
            
 
            return false;
 
         });
 
         Gate::define('church', function ($user) {
 
            if(!is_null(auth()->user()->idChurch_fk))
                return true;
            
 
            return false;
 
         });
    }
}
