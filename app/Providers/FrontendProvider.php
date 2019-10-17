<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class FrontendProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(['*'], function ($view){
           $view->with('settings',$this->getSettings());
        });
    }

    private function getSettings(){
        $settingsCollection = Setting::query()->where('locale_id',session()->get('current_locale'))
            ->get();
        $settings =[];
        foreach ( $settingsCollection as $setting){
            $settings[$setting->key] = $setting->value;
        }
        return $settings;
     }
}
