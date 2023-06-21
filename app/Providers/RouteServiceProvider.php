<?php

namespace App\Providers;

use App\Exceptions\InsuraModelNotFoundException;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    const HOME = 'http://127.0.0.1:8000/dashboard';
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });

        Route::bind('broker', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('brokers.message.error.missing');
            }
        });
        Route::bind('client', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('clients.message.error.missing');
            }
        });
        Route::bind('recipient', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('users.message.error.missing');
            }
        });
        Route::bind('sender', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('users.message.error.missing');
            }
        });
        Route::bind('staff', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('staff.message.error.missing');
            }
        });
        Route::bind('user', function ($value) {
            try {
                return \App\Models\User::withStatus()->findOrFail($value);
            } catch (ModelNotFoundException $e) {
                throw new InsuraModelNotFoundException('users.message.error.missing');
            }
        });
        Route::model('attachment', 'App\Models\Attachment', function () {
            throw new InsuraModelNotFoundException('attachments.message.error.missing');
        });
        Route::model('chat', 'App\Models\Chat', function () {
            throw new InsuraModelNotFoundException('chats.message.error.missing');
        });
        Route::model('company', 'App\Models\Company', function () {
            throw new InsuraModelNotFoundException('companies.message.error.missing');
        });
        Route::model('email', 'App\Models\Email', function () {
            throw new InsuraModelNotFoundException('communication.message.error.missing.email');
        });
        Route::model('note', 'App\Models\Note', function () {
            throw new InsuraModelNotFoundException('notes.message.error.missing');
        });
        Route::model('policy', 'App\Models\Policy', function () {
            throw new InsuraModelNotFoundException('policies.message.error.missing');
        });
        Route::model('product', 'App\Models\Product', function () {
            throw new InsuraModelNotFoundException('products.message.error.missing');
        });
        Route::model('reminder', 'App\Models\Reminder', function () {
            $exc = new InsuraModelNotFoundException('reminders.message.errors.missing');
            $exc->setBack(true);
            throw $exc;
        });
        Route::model('text', 'App\Models\Text', function () {
            throw new InsuraModelNotFoundException('communication.message.error.missing.text');
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
//        RateLimiter::for('api', function (Request $request) {
//            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
//        });
    }
}
