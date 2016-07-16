<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {!! Buster::style('dist/app_c.min.css') !!}
        {!! Html::style('dist/app_lib_c.min.css') !!}

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        @yield('header')

    </head>

    <body>
	@yield('body')
        <footer>
            @yield('footer')
        </footer>

    {!! Html::script('dist/app_c.min.js') !!}
    {!! Html::script('dist/app_lib_c.min.js') !!}

    </body>

</html>

