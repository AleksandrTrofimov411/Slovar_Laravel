<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<header>
    <div class="up">
        <div class="row">

            <div class="mt-1 col-xl-4 col-md-6 col-sm-12 text-end">
                <a class="link-offset-2 link-underline link-underline-opacity-0 text-white"
                   href="{{route('word.index')}}">Words</a>
            </div>

            <div class="mt-1 col-xl-4 col-md-6 col-sm-12 text-center">
                <a class="link-offset-2 link-underline link-underline-opacity-0 text-white"
                   href="{{route('word.create')}}">Add word</a>
            </div>

            <div class="col-4 btn-group">
                <a class="mt-1 link-offset-2 link-underline link-underline-opacity-0 text-white">{{Auth::user()->name}}</a>
                <button style="height: 10px" type="button"
                        class="text-start border-0 btn text-white dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="border-0 dropdown-menu mt-3">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
                </ul>
            </div>


            <div class="row">
                <div class="slovar mt-3">
                    <h1 class="col-xl-12 col-md-12 col-sm-12 text-center text-white">Славянский словарь</h1>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
</body>
</html>
