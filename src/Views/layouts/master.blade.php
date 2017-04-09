<!DOCTYPE html>
<html lang="{!! Lang::getLocale() !!}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

        <title>Siravel: {{ ucfirst(request()->segment(2)) }}</title>

        <link rel="icon" type="image/ico" href="{!! Siravel::asset('images/favicon.ico', 'image/ico') !!}?v2">
        <link rel="icon" type="image/png" sizes="32x32" href="{!! Siravel::asset('images/favicon-32x32.png', 'image/png') !!}?v2">
        <link rel="icon" type="image/png" sizes="96x96" href="{!! Siravel::asset('images/favicon-96x96.png', 'image/png') !!}?v2">
        <link rel="icon" type="image/png" sizes="16x16" href="{!! Siravel::asset('images/favicon-16x16.png', 'image/png') !!}?v2">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap Theme -->
        <link rel="stylesheet" type="text/css" href="{!! Siravel::asset('themes/bootstrap-'.Config::get('siravel.backend-theme', 'united').'.css', 'text/css') !!}">

        <!-- App style -->
        <link rel="stylesheet" type="text/css" href="{!! Siravel::asset('dist/css/all.css', 'text/css') !!}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('stylesheets')

        <script type="text/javascript">

            var _token = '{!! csrf_token() !!}';
            var _url = '{!! url("/") !!}';
            var _pixabayKey = '{!! config('siravel.pixabay', '') !!}';

        </script>
    </head>
    <body>

        @include('siravel::layouts.loading-overlay')

        <div class="siravel-notification">
            <div class="siravel-notify">
                <p class="siravel-notify-comment"></p>
            </div>
            <div class="siravel-notify-closer">
                <span class="glyphicon glyphicon-remove siravel-notify-closer-icon"></span>
            </div>
        </div>

        @yield("navigation")

        <div class="container-fluid raw-margin-bottom-72">
            <div class="row">
                @yield("page-content")
            </div>
        </div>

        <script type="text/javascript">
            var _apiKey = '{!!  config("siravel.api-key") !!}';
            var _apiToken = '{!!  config("siravel.api-token") !!}';
        </script>
        <script type="text/javascript" src="{!! Siravel::asset('js/jquery.min.js', 'application/javascript') !!}"></script>
        <script type="text/javascript" src="{!! Siravel::asset('dist/js/all.js', 'application/javascript') !!}"></script>
        <script type="text/javascript">
            @include('siravel::notifications')
        </script>
        @yield("javascript")
    </body>
</html>