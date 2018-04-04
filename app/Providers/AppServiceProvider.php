<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        setlocale(LC_TIME, "tr-TR");
        Carbon::setLocale("tr");

        config()->set("ayarlar", \App\Ayar::lists("value", "name")->all());

        $this->app["form"]->component('bsText', 'form_component.text', ['name', 'label_name', 'value' => null, 'attributes' => []]);
        $this->app["form"]->component('bsFile', 'form_component.file', ['name', 'label_name']);
        $this->app["form"]->component('bsPassword', 'form_component.password', ['name', 'label_name', 'attributes' => []]);
        $this->app["form"]->component('bsSubmit', 'form_component.submit', ['name', 'url' => URL::previous()]);
        $this->app["form"]->component('bsCheckbox', 'form_component.checkbox', ['name', 'label_name', 'elemanlar' => []]);
        $this->app["form"]->component('bsSelect', 'form_component.select', ['name', 'label_name', "value", 'liste' => [], "placeholder"]);
        $this->app["form"]->component('bsTextArea', 'form_component.textarea', ['name', 'label_name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
