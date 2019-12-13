<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/ckeditor.js')}}"></script>
        <title>{{ config('app.name', 'LSAPP') }}</title>
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @include('inc.messages')
        @yield('content')
      </div>
      <script>
        ClassicEditor
          .create( document.querySelector( '#article-ckeditor' ) )
          .catch( error => {
              console.error( error );
          });
        </script>
    </body>
</html>