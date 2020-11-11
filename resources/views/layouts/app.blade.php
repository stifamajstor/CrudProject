<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'CrudProject')}}</title>
    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <br>
            <div class="container">
                {{-- @include('inc.messages') --}}
                @yield('content')
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor' );
        </script>   
    </body>
</html>
