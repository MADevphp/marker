<?php

namespace App\Providers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Order;
use App\Policies\OrderPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    protected $policies = [Order::class => OrderPolicy::class];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole(['admin']) ? true : null;
        });

        $this->app['router']->aliasMiddleware('admin', AdminMiddleware::class);
    }
}
