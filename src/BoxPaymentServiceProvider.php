<?php
namespace BoxPayment;

use Illuminate\Support\ServiceProvider;

class BoxPaymentServiceProvider extends ServiceProvider
{
      /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('boxpayment.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'config'
        );
    }
}