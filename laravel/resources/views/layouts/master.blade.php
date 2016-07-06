<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {!! Html::script('dist/js/js.min.js') !!}
        {!! Html::style('dist/css/app.min.css') !!}

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        @yield('header')

    </head>

    <body>
	@yield('body')
        <footer>
            @yield('footer')
        </footer>
    </body>

</html>

