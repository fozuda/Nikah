<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nikah | Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.1/examples/blog/blog.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
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


</html>