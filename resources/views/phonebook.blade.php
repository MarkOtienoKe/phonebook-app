<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phone Book App</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>

    </style>
</head>
<body>
<div id="app">
    <Myheader></Myheader>
    <div class="container">
        <router-view></router-view>

    </div>
    <Myfooter></Myfooter>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
