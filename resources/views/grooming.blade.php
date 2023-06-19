<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/feature.css')}}">
</head>
<body>
    <nav class="navbar">
        <div class="nav-inner">
            <div class="logo">
                <a href='/'><img src="image/image-removebg-preview (1) 1.png" alt=""></a>
            </div>

            <div class="buttonNav">
                <a href='store'>Store</a>
                <a href='petHotel'>Pet Hotel</a>
                <a href='veterinary'>Veterinary</a>
                <a class = "active" href='grooming'>Grooming</a>
                <a href='Maps'>Paw Maps</a>
            </div>

            <div class="logo-right">
                <img src="{{ asset('/images/settings (1) 1.png') }}" alt="">
                <img src="{{ asset('images/shopping-cart 2.png') }}" alt="">
                <a href='profile'><img src="{{ asset('/images/user 2.png') }}" alt=""></a>
            </div>                
        </div>
    </nav>

    <div class="cont-1">
        <img src="image/grooming-1.png" alt="">
        <h1>Happy Pets Petshop & Grooming</h1>
        <div class="star-1">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Operational hour: 08.00 - 21.00</p>
        <p class="loc">Location : Jl Raya Kebayoran Lama 11540 Kebon Jeruk Jakarta Raya</p>

        <div class="BookNow">
            <a href='grooming/Happy Pets Petshop & Grooming'>Book Now</a>
        </div>
    </div>
    
    <div class="cont-2">
        <img src="image/grooming-2.png" alt="">
        <h1>Pet Kingdom</h1>
        <div class="star-2">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Operational hour: 10.00 - 20.00</p>
        <p class="loc">Location : Location :  Lippo mall, RT.11RW.p5, Bangka, Kec. Mampang Prapatan, Kota Jkt. Selatan, Daerah Khusus Ibukota Jakarta</p>

        <div class="BookNow">
            <a href='grooming/Pet Kingdom'>Book Now</a>
        </div>
    </div>

    <div class="cont-3">
        <img src="image/grooming-3.png" alt="">
        <h1>JakPetz</h1>
        <div class="star-3">
            <img src="image/5 star.png" alt="">
        </div>
        <p class="price">Operational hour: 09.00 - 17.00</p>
        <p class="loc">Location : Location : Jl. Kemang Sel. No.125, RW.2, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</p>

        <div class="BookNow">
            <a href='grooming/JakPetz'>Book Now</a>
        </div>
    </div>
</body>
</html>