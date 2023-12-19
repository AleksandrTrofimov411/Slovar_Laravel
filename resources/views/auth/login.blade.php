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
<body   class="bg-register" style="background-image: url({{asset('icons/bg.jpg')}})">
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="container">
    <div class="row mt-5">
        <div class="col-4"> </div>
        <div class="col-4">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control" aria-describedby="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div id="email" class="form-text">We will never share your email address or login with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control"  aria-describedby="password">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div id="password" class="form-text">Input your password</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="w-100 btn btn-success">Sign Up</button>
                </div>

            </form>
        </div>
        <div class="col-4">
            <a class="bg-green btn btn-success" href="{{route('register')}}">Register</a>
        </div>
    </div>
</div>
</body>
</html>
