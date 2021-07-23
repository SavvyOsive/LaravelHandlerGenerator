<?php

namespace Savvyosive\HandlerGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Savvyosive\HandlerGenerator\Commands\HandlerGeneratorCommand;

class HandlerGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('handler-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_handler-generator_table')
            ->hasCommand(HandlerGeneratorCommand::class);
    }
}
