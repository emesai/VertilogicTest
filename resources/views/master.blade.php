<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}} - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://unpkg.com/ionicons@4.4.2/dist/css/ionicons.min.css')}}">
    <style type="text/css">
      #map{
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
      }
      #map iframe{
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
      }
    </style>
    <script>
        option = {
            baseUrl : "{{URL::to('/')}}",
            token:"{{ csrf_token() }}",
        }
    </script>
  </head>
  <body>
    @include('sidebar')
    <div class="content" style="padding: 15px;">
      @yield('content')
    </div>
    @stack('scripts')
  </body>
</html>
