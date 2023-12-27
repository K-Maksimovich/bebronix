<?php

use App\Services\Router;
use App\Controllers\Auth;

Router::page('/', 'home');
Router::page('/ribbon', 'ribbon');
Router::page('/business', 'business');
Router::page('/finance', 'finance');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');

Router::page('/my_business', 'my_business');
Router::page('/add_business_one', 'add_business_one');
Router::page('/add_business_two', 'add_business_two');

Router::post('/auth/register', Auth::class, 'register', true, false);
Router::post('/auth/login', Auth::class, 'login', true, false);
Router::post('/auth/logout', Auth::class, 'logout', true, false);
Router::post('/auth/imgprofile', Auth::class, 'imgprofile', true, true);



Router::enable();

