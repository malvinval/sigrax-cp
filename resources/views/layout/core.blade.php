<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
    <link rel="stylesheet" href="/css/style.css">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    
</head>
<body>
    @include('partials/navbar')

    @yield("container")

    @include('partials/footer')
</body>
{{-- Navbar Javascript --}}
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</html>