<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proma</title>
    {{-- Tailwind --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Alphine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- flowbite --}}
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>


</head>

<body class="">
    @yield('content')

    <livewireScripts />
</body>

</html>