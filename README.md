# sints-verlanglijstje
Gestart met Sint's Verlanglijstje project.

22-11-2018

Aanpak:
Richt mij eerst op de stappen die Renée in zijn repo heeft doorlopen m.b.t. Ajax (json).

11:40 uur
Model Ads en migration tabel aangemaakt
$ php artisan make:model Ad -m

## 11:45 uur
migration tabel aangepast

11:50 uur
probeerde migratie uit te voeren, foutmeldingen!
Waarom? Omdat je nog geen database aangemaakt had!
$ php artisan migrate

11:55 uur
datase sint aangemaakt in PHPMyAdmin

12:00 uur
pas .env file aan met gegevens database

12:05 uur
probeerde migration opnieuw uit te voeren. Foutmelding!
bug fix uitgevoerd
in AppServiceProvider.php volgende toegevoegd:
use Illuminate\Support\Facades\Schema;
public function boot()
    {
        Schema::defaultStringLength(191);
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
ook gelijk bugfix toegepast voor weergave css in http en https

12:20 uur
migration opnieuw, nu gelukt
$ php artisan migrate:fresh
$ php artisan migrate

12:30 uur--
Pauze


