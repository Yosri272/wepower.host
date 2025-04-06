@php
    $generaleSetting = App\Models\GeneraleSetting::first();

<<<<<<< HEAD
    $title = $generaleSetting?->title ?? 'Razin Commerce';
=======
    $title = $generaleSetting?->title ?? config('app.name', 'ReadyEcommerce');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    $favicon = $generaleSetting?->favicon ?? asset('assets/favicon.png');
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="app-url" content="{{ url('/') }}">
<<<<<<< HEAD
=======
    
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!-- description -->
    <meta name="description" content="ecommerce website">

    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">
<<<<<<< HEAD
=======
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
    

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    @vite('resources/css/app.css')
</head>

<body>
    <div id="app"></div>

    @vite('resources/js/app.js')
</body>

</html>
