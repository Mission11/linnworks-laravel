<?php

namespace Booni3\Linnworks;

use App\Library\Tools\CsvImport;
use Illuminate\Support\ServiceProvider;

class LinnworksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/linnworks.php' => config_path('linnworks.php'),
        ], 'linnworks');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/../config/linnworks.php', 'linnworks');
        $this->app->singleton(Linnworks::class, function ($app) {

            $config = $app->make('config');

            $applicationId = $config->get('linnworks.applicationId');
            $applicationSecret = $config->get('linnworks.applicationSecret');
            $token = $config->get('linnworks.token');

            return new Linnworks(
                $applicationId,
                $applicationSecret,
                $token);
        });

        $this->app->alias(Linnworks::class, 'linnworks');
    }

}
