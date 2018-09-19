<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>;
            if('serviceWorker' in navigator) {
              navigator.serviceWorker
                       .register('/serviceworker.js')
                       .then(function() { console.log("Service Worker Registered"); });
            }
            </script>
        <title>Lyon Street Graff</title>

        
    </head>
    <body>
        

            @extends('components.header')
@section('header')
    
@endsection

      
           
    </body>
</html>
