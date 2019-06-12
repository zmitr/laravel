<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

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
       User::creating(function ($data){
           //dd($data);
            $email = $data ->email;
            $tema = "Спасибо за регистрацию";
            $body = 'Вы зарегестрировались на сайте  под именем '.$data->name;
            $headers = "Content-Type: text/plain; charset=utf-8 \r\n";
            mail($email,$tema,$body,$headers);
       });
    }
}
