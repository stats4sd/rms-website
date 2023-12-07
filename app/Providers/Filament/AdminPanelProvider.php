<?php

namespace App\Providers\Filament;

use ChrisReedIO\Socialment\Models\ConnectedAccount;
use ChrisReedIO\Socialment\Socialment;
use ChrisReedIO\Socialment\SocialmentPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Notifications\Notification;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use function RectorPrefix202308\Symfony\Component\DependencyInjection\Loader\Configurator\param;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->darkMode(false)
            ->id('filament')
            ->path('filament')
            ->login()
            ->authGuard('web')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                SocialmentPlugin::make(),
            ]);
    }


    public function boot(): void
    {


        \ChrisReedIO\Socialment\Facades\Socialment::postLogin(function (ConnectedAccount $connectedAccount) {

            if(! Str::contains($connectedAccount->email, '@stats4sd.org' ) ) {
                Auth::logout();

                Notification::make()
                    ->title('Login Error')
                    ->body('You must use a stats4sd.org email address to login.')
                    ->danger()
                    ->send();

                return redirect('/filament/login');
            }

            // Handle custom post login logic here.
            Log::info('User logged in with ' . $connectedAccount->provider . ' account', [
                'connectedAccount' => $connectedAccount,
            ]);
        });

    }
}
