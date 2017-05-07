<?php

namespace Mojoblanco\Domainos;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class DomainosServiceProvider extends ServiceProvider
{
    /**
     * Default error message.
     *
     * @var string
     */
    protected $message = 'Sorry, this domain is not allowed on this application';

    /**
     * Bootstrap the domainos services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishes config file for the domains 
        $this->publishes([
            __DIR__.'/../config/domainos.php' => config_path('domainos.php')
        ], 'config');

        // Custom validation for the domains
        Validator::extend('domainos', function ($attribute, $value, $parameters, $validator) {
            $domain = substr(strrchr($value, "@"), 1);

            switch ($parameters[0]) {
                case 'block':
                    $domain_list = config('domainos.block');
                    return !in_array($domain, $domain_list);
                    break;
                case 'allow':
                    $domain_list = config('domainos.allow');
                    return in_array($domain, $domain_list);
                    break;
                default:
                    # code...
                    break;
            }
            
        }, $this->message);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
