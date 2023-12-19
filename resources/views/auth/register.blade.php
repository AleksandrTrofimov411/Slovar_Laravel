<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body   class="bg-register" style="background-image: url({{asset('icons/bg.jpg')}})">
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="container">
    <div class="row mt-5">
        <div class="col-4"> </div>
        <div class="col-4">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control" aria-describedby="name">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input value="{{old('password')}}" type="password" class="form-control" id="password" name="password">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="confirmPassword">Confirm password</label>
                    <input value="{{old('confirmPassword')}}" type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                    @error('confirmPassword')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="w-100 btn btn-success">Sign Up</button>
                </div>

            </form>
        </div>
        <div class="col-4">
            <a class="btn btn-success" href="{{route('login')}}">Log in</a>
        </div>
    </div>
</div>

</body>
</html>
