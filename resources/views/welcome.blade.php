@extends('master')

<body>
    <title>Home </title>
    <div class="container">
        @include('partials.header')
        @include('partials.nav')
    </div>
    <main class="container">
        @include('partials.banner')
        <div class="row mb-2">
            @include('partials.featured')
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-md-6 col-lg-8">
                    @include('partials.post')
                </div>
                <div class="col-sm-3 col-md-6 col-lg-4">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
    </main>
</body>

<div class="container">
    @include('partials.footer')
</div>