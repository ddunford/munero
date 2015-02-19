<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Laravel 4 - Tutorial
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS are placed here -->
    {{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('packages/bootstrap/css/bootstrap-theme.css') }}

    <style>
        @section('styles')
        body {
            padding-top: 60px;
        }
        @show
    </style>
</head>

<body>
<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">Laravel</a>
        </div>
        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{{ URL::to('') }}}">Home</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Container -->
<div class="container">

    <!-- Content -->
    @yield('content')

</div>

<!-- Scripts are placed here -->
{{ HTML::script('packages/jquery//jquery.min.js') }}
{{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}

</body>
</html>