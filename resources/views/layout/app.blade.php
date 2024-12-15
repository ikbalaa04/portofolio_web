<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')|Ikbal Abdul Aziz </title>
    @include('includes.style')
    @yield('addon-style')

</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        @include('includes.cursor')

        @include('includes.preloader')

        @include('includes.scrollbar')

        @include('includes.menu')

        @include('includes.curtain')

        @include('includes.frame')

        @yield('content')

    </div>
    <!-- wrapper end -->

    @include('includes.script')
    @yield('addon-script')

</body>

</html>
