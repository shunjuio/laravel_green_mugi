<?php

namespace App\Providers;

use App\Jobs\SendTestMailJob;
use Illuminate\Support\ServiceProvider;

class SendTestMailProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bindMethod(SendTestMailJob::class.'@handle',
      function($job, $app)
      {
        return $job->handle();
      });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
