<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bengkel Gendut - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/custom.css')}}">
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


    <script type="text/javascript" src="{{url('js/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/vendor/bootstrap/bootstrap.min.js')}}"></script>
    @stack('scripts')
  </body>
</html>
