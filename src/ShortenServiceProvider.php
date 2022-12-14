<?php

namespace Sunxyw\Shorten;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sunxyw\Shorten\Commands\ShortenCommand;

class ShortenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('unify-shorten')
            ->hasConfigFile()
            ->hasCommand(ShortenCommand::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command->publishConfigFile()->askToStarRepoOnGitHub('sunxyw/unify-shorten');
            });
    }
}
