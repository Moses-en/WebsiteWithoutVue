<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--Font-Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    @yield('head')

    <div class="topnav" id="myTopnav">

        <a href="/Contact">CONTACT ME</a>
        <a href="/Projects">Projects</a>
        <a href="/Skills">Skills</a>
        <a href="/">Home</a>

    </div>
</head>

<body>

    @yield('body')


</body>

</html>
