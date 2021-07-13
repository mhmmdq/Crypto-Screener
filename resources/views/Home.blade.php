<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="_appname" content="{{ env('app_name') }}">
    <meta name="site_url" , content="{{ url('/') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</head>
<body>
<?php
//$All = file_get_contents('https://cpr.mhmmdq.ir/api/get');
//// Or
//$BTC = file_get_contents('https://cpr.mhmmdq.ir/api/get/btc');
//?>
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
