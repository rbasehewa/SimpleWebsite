<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class=container>
        <div class="col-md-8 col-lg-8">
        @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
        </div>

    </div>
    @yield('content')
    


</body>
</html>


