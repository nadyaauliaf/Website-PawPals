<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/signup.css')}}">
    <title>Sign Up</title>
</head>
<body>
    <div class="frame">
        <a href='welcome'><img src="{{ asset('image/image-removebg-preview (1) 1.png') }}" alt=""></a>
        <form method="POST" action="{{ route('PawPals.store') }}" enctype="multipart/form-data" class="join">
            @csrf
            <div class="joinTitle">
                SIGN UP
            </div>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required>

            <label for="password">Confirm Password</label>
            <input type="password" name="confirm" id="password" placeholder="Confirm Your Password" required>

            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>

    <script src="{{asset('/js/signup.js')}}"></script>
</body>
</html>