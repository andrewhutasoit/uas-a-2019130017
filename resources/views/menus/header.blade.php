<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cijerah's Resto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #bigsize {
            font-size: 26px;
            font-weight: bolder;
            background-color: rgb(189, 189, 41);
        }

        body {
            background-color: rgb(171, 42, 42);
        }

        .text {
            font-size: 26px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><strong>Cijerah's Resto</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('products') ? 'active' : '' }}"
                        href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}"
                        href="{{ route('testimonials') }}">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </nav>
