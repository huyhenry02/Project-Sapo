<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
       $this->registerPolicies();
       Gate::define('view-all',function ($user){
           return $user->roles()->select('roles.id')->pluck('id')->contains(5);
       });
        Gate::define('view-product-order-attribute',function ($user){
           $allRoles= [2,3,10];
          return $user->roles()->whereIn('id', $allRoles)->exists();
       });
        Gate::define('view-attribute-category-vendor-category-brand',function ($user){
            $allRoles= [10,9,6,7];
            return $user->roles()->whereIn('id', $allRoles)->exists();
        });
        Gate::define('view-statistic-company',function ($user){
            $allRoles= [4,8];
            return $user->roles()->whereIn('id', $allRoles)->exists();
        });
    }
}
