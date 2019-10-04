<?php

namespace Interneduclub\Ckeditor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/ckeditor.js' => public_path('vendor/interneduclub/laravel-ckeditor/ckeditor.js'),
                __DIR__ . '/config.js' => public_path('vendor/interneduclub/laravel-ckeditor/config.js'),
                __DIR__ . '/styles.js' => public_path('vendor/interneduclub/laravel-ckeditor/styles.js'),
                __DIR__ . '/contents.css' => public_path('vendor/interneduclub/laravel-ckeditor/contents.css'),
                __DIR__ . '/adapters' => public_path('vendor/interneduclub/laravel-ckeditor/adapters'),
                __DIR__ . '/lang' => public_path('vendor/interneduclub/laravel-ckeditor/lang'),
                __DIR__ . '/skins' => public_path('vendor/interneduclub/laravel-ckeditor/skins'),
                __DIR__ . '/plugins' => public_path('vendor/interneduclub/laravel-ckeditor/plugins'),
            ],
            'ckeditor'
        ); 
    }

    public function register()
    {

    }
}
