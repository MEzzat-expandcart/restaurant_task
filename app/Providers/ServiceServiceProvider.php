<?php

namespace App\Providers;

use App\Repositories\EloquentImpl\ResetPassword\ResetPasswordRepository;
use App\Repositories\EloquentImpl\Store\StoreRepository;
use App\Repositories\EloquentImpl\User\UserRepository;
use App\Services\Auth\AuthService;
use App\Services\Contracts\IAuthService;
use App\Services\Contracts\IMailService;
use App\Services\Contracts\IResetPasswordService;
use App\Services\Contracts\IStoreService;
use App\Services\Contracts\IUserService;
use App\Services\Mail\MailService;
use App\Services\ResetPassword\ResetPasswordService;
use App\Services\Store\StoreService;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    private array $map = [
        IStoreService::class =>[
            'service'=>StoreService::class,
            'repository'=>StoreRepository::class
        ]
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        foreach ($this->map as $abstract => $class) {
            $this->app->bind($abstract, function ($app) use ($class) {
                $serviceInstance = $app->make($class['service']);
                if (method_exists($serviceInstance, 'repository') &&
                    $serviceInstance->repository() && $class['repository']) {
                    $serviceInstance->setRepository($app->make($class['repository']));
                }
                return $serviceInstance;
            });
        }
    }
}
