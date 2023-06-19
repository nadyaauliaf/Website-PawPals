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
        <img src="{{ asset('image/image-removebg-preview (1) 1.png') }}" alt="">
        <form method="GET" action="" class="join">
            @csrf
            <div class="joinTitle">
                LOGIN
            </div>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required>

            <button type="submit" class="btn">Login</button>
            <a href='SignUp' class="text-center p-2">Don't have an account yet? Click here</a> 
        </form>
    </div>
</body>
</html>