<?php

namespace Topic;
use Illuminate\Support\ServiceProvider;

class TopicServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'topicview');
        $this->publishes([
            __DIR__.'/public' => public_path('topicpub'),
        ], 'public');     
    }

    public function register()
    {
        $this->app->make('Topic\Http\Controllers\UploadController');
    }
}