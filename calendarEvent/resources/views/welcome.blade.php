<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>CalendarEvents</title>
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>     
    
    <script>
      </script>
        <div id="app">
            <app></app>
        </div>
        
        <noscript>
            This website relies on JavaScript, which you appear to have disabled. You will not be
            able to use many of this website's features without JavaScript enabled.
        </noscript>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>