<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/changePass.css') }}">
    <title>Change Password</title>
</head>
<body>
    <div class="frame">
        <a href='/'><img src="image/image-removebg-preview (1) 1.png" alt=""></a>
        <form method="POST" action="" enctype="multipart/form-data" class="join">
            {{-- {{ route('PawPals.edit', $PawPal) }} --}}
            @csrf
            @method('UPDATE')
            <div class="joinTitle">
                Change Password
            </div>
            
            <div class="profile-pict">
                <img src="./images/man 6.png" alt="">
            </div>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>

            <label for="password">New Password</label>
            <input type="password" name="ConfPassword" id="password" placeholder="New Password" required>
            @method('PUT')
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>
</html>