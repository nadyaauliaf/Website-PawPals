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
                <a class = "active" href='petHotel'>Pet Hotel</a>
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
        <img src="image/petHotel-1.png" alt="">
        <h1>B-Pets</h1>
        <div class="star-1">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Rp. 100.000/day</p>
        <p class="loc">Location : Ruko Permata Taman Palem Blok B5/26, Jakarta Barat</p>

        <div class="BookNow">
            <a href='petHotel/B-Pets Appointment'>Book Now</a>
        </div>
    </div>
    
    <div class="cont-2">
        <img src="image/petHotel-2.png" alt="">
        <h1>Noel Pet Shop</h1>
        <div class="star-2">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Rp. 60.000 - Rp. 100.000/day</p>
        <p class="loc">Location : Jln. Swadaya Raya No. 110, Kavling Polri Blok G, Grogol Petamburan, Jakarta Barat</p>

        <div class="BookNow">
            <a href='petHotel/Noel Pet Shop Appointment'>Book Now</a>
        </div>
    </div>

    <div class="cont-3">
        <img src="image/petHotel-3.png" alt="">
        <h1>The Buntel</h1>
        <div class="star-3">
            <img src="image/4 star.png" alt="">
        </div>
        <p class="price">Rp. 50.000/day</p>
        <p class="loc">Location : Kompleks Ruko Miami Blok B 12 B, City Resort Residence, Cengkareng, Jakarta Barat</p>

        <div class="BookNow">
            <a href='petHotel/The Buntel Appointment'>Book Now</a>
        </div>
    </div>
</body>
</html>