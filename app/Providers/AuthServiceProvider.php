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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // define a admin user role
        // returns true if user role is set to admin
        //in blade use @can('isAdmin') or @cannot('isAdmin'), @can('isAdmin'), @elsecan('isAuthor')
        // in controller if (Gate::allows('isAdmin')) ,  if (Gate::denies('isRegistered')),  $this->authorize('isAdmin');
        // in middleware Route::get('/post/delete', 'PostController@delete')->middleware('can:isAdmin')->name('post');

        Gate::define('isSuperAdmin', function($user) {
            return $user->role == 'super-admin';
        });

        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        // define a author user role
        // returns true if user role is set to author
        //in blade use @can('isSupervisor') or @cannot('isSupervisor')
        Gate::define('isSupervisor', function($user) {
            return $user->role == 'supervisor';
        });

        // define a author user role
        // returns true if user role is set to author
        //in blade use @can('isRegistered') or @cannot('isRegistered')
        Gate::define('isRegistered', function($user) {
            return $user->role == 'registered';
        });
    }
}
