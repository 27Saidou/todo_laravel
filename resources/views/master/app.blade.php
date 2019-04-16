<html>
    <head>
        <title>Koukoutana - @yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css">
    </head>
    <body>
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque vitae obcaecati optio et consequuntur error eaque minima, magni explicabo ex molestias reprehenderit maiores quisquam inventore fugit at fuga. At, nobis!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <div class="col sm-6" style="padding-top: 0px;">
                    @if(Session::has('success'))
                    <span class="alert alert-info">
                        {{Session::get('success')}}
                    </span>
                @endif
            </div>
        <div class="container-fluid" style="padding-top: 5px;">
            @yield('content')
        </div>
    </body>
</html>
