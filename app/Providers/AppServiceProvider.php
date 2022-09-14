<?php

namespace App\Providers;

use App\Filament\Resources\UserResource;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Filament::registerTheme(mix('css/app.css'));
        Filament::serving(function () {
            if (Auth::user()){
                Filament::registerUserMenuItems([
                    'account'=>UserMenuItem::make()
                        ->label('Your profile')
                        ->url(UserResource::getUrl('edit',['record'=>auth()->user()])),
                    UserMenuItem::make()
                        ->label('Manage users')
                        ->url(UserResource::getUrl())
                        ->icon('heroicon-s-users'),
                    // ...
                ]);
            }
        });
    }
}
