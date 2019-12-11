<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Roboto&display=swap" rel="stylesheet">

    {{--Style--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    {{--fontawesome--}}
    <script src="https://kit.fontawesome.com/7d75c9db00.js" crossorigin="anonymous"></script>


</head>
<body>
<div id="app">
    <App></App>
</div>

</body>
</html>
