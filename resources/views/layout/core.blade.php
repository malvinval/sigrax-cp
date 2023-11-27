<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="{{ url('images/sigrax-logo.webp')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../../../dist/output.css">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>
<body>
    @include('partials/navbar')

    @yield("container")
</body>
{{-- Navbar Javascript --}}
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

{{-- Dashboard sidebar js --}}
<script type="text/javascript">
    function dropdown(id) {
      document.querySelector(id).classList.toggle("hidden");
      document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
      document.querySelector(".sidebar").classList.toggle("hidden");
    }
</script>

{{-- Dashboard alert js --}}
<script type="text/javascript">
  function closeAlert() {
    document.querySelector(".flash-alert").classList.toggle("hidden");
  }
</script>
</html>

