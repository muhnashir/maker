<?php
namespace Muhnashir\Maker;

use Illuminate\Support\ServiceProvider;
use Muhnashir\Maker\Commands\MakeService;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class,
            ]);
        }
    }
}
