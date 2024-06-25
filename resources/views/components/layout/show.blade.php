<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>
        <link href="/assets/css/app.css" type="text/css" rel="stylesheet">
        <link href="/assets/css/table.css" type="text/css" rel="stylesheet">
        <script src="/assets/js/app.js"></script>

    </head>
    <body >
      {{$slot}}
    </body>
</html>
