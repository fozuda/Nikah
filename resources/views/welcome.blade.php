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

        <div class="row g-5">
            @include('partials.post')

            <div class="col-md-4">
                @include('partials.sidebar')
            </div>

        </div>
    </main>


</body>
<div class="container">
    @include('partials.footer')
</div>