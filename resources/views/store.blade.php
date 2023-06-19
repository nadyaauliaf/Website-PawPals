<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
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
                <a class = "active" href='store'>Store</a>
                <a href='petHotel'>Pet Hotel</a>
                <a href='veterinary'>Veterinary</a>
                <a href='grooming'>Grooming</a>
                <a href='Maps'>Paw Maps</a>
            </div>

            <div class="logo-right">
                <a href='MyCart'><img src="{{asset('images/shopping-cart 2.png')}}" alt=""></a>
                <a href='profile'><img src="./images/user 2.png" alt=""></a>
            </div>                
        </div>
    </nav>

    <div class="cont-1">
        <img src="image/store-1.png" alt="">
        <h1>Pal 7 Petshop</h1>
        <div class="star-1">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Operational hour 08.00 - 18:00</p>
        <p class="loc">Jalan Kebayoran Lama PAL 7 No.1, RT.3/RW.13, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan</p>

        <div class="BookNow">
            <a href='product'>Order Now</a>
        </div>
    </div>
    
    <div class="cont-2">
        <img src="image/store-2.png" alt="">
        <h1>Fayos Petstore</h1>
        <div class="star-2">
            <img src="image/3 star.png" alt="">
        </div>
        <p class="price">Operational hour 10.00 - 19:00</p>
        <p class="loc">Location : RT.4/RW.8, Srengseng, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11550, Gg. Lada, Jl. H. Kelik RT.004/RW.08 Kelapa Dua, sebelah bengkel las</p>

        <div class="BookNow">
            <a href='product'>Order Now</a>
        </div>
    </div>

    <div class="cont-3">
        <img src="image/store-3.png" alt="">
        <h1>Golden Petshop</h1>
        <div class="star-3">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Operational hour 09.00 - 20:00</p>
        <p class="loc">Location : Jl. Raya Kby. Lama No.365, RT.1/RW.11, Sukabumi Utara, Kec. Kb. Jeruk, Kota Jakarta Barat</p>

        <div class="BookNow">
            <a href='product'>Order Now</a>
        </div>
    </div>
</body>
</html>