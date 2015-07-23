<!DOCTYPE html>
<html>
<head>
<title>Laravel</title>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100">

@if (config('app.debug'))
<!-- build:css(public) css/vendor.css -->
<!-- bower:css -->
<!-- endbower -->
<!-- endbuild -->
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
@else
<link rel="stylesheet" href="{{ elixir("css/vendor.css") }}">
<link rel="stylesheet" href="{{ elixir("css/app.css") }}">
@endif

</head>
<body class="welcome">
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
        </div>
    </div>

@if (config('app.debug'))
<!-- build:js(public) js/vendor.js -->
<!-- bower:js -->
<!-- endbower -->
<!-- endbuild -->
<script src="{{ asset("js/app.js") }}"></script>
@else
<script src="{{ elixir("js/vendor.js") }}"></script>
<script src="{{ elixir("js/app.js") }}"></script>
@endif
</body>
</html>
