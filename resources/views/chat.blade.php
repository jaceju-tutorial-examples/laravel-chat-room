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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Chat Room Demo</h1>

            <!-- 訊息列表 -->
            <div id="chat-room">

            </div>

            <!-- 傳送訊息的表單 -->
            <form id="send-message" method="post" action="/send-message">
                {!! csrf_field() !!}
                <input type="hidden" name="username" value="{{ $username }}" />
                <div class="input-group">
                    <label class="input-group-addon">
                        {{ $username }}
                    </label>
                    <input type="text" value="" name="message" class="form-control" />
                    <span class="input-group-btn">
                        <button class="btn btn-success" id="send">Send</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

@if (config('app.debug'))
<!-- build:js(public) js/vendor.js -->
<!-- bower:js -->
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<!-- endbower -->
<script src="/bower_components/socket.io-client/socket.io.js"></script>
<!-- endbuild -->
<script src="{{ asset("js/app.js") }}"></script>
@else
<script src="{{ elixir("js/vendor.js") }}"></script>
<script src="{{ elixir("js/app.js") }}"></script>
@endif
</body>
</html>
