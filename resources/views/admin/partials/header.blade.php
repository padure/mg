<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" >
        <link href="{{ asset("adminstyle/adminstyle.css") }}" rel="stylesheet" >
        <link href="{{ asset("adminstyle/adminstyle_valentin.css") }}" rel="stylesheet" >
        <link href="{{ asset("adminstyle/ghcss.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
        <!-- token-->
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <script type="text/javascript">
        $.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        </script>
    </head>
    <body>
        @yield("header")
    </body>
</html>