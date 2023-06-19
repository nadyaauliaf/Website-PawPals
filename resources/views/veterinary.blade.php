<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/veterinary.css')}}">
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
                <a class = "active" href='veterinary'>Veterinary</a>
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
        <img src="image/vet profile.png" alt="">
        <h1>Drh Agnes Wulandari</h1>
        <p class="titleVet-1">Senior Veterinarian</p>
        <p class="price">Location : Jakarta Vet</p>
        <p class="loc">Addres: Jl. Cideng Timur No.11 H, Petojo Utara, Kec. Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta | 10130</p>

        <div class="BookNow">
            <a href='veterinary/vet1'>Book Now</a>
        </div>
    </div>
    
    <div class="cont-2">
        <img src="image/vet profile.png" alt="">
        <h1>Drh Gunawan</h1>
        <p class="titleVet-2">Senior Veterinarian</p>
        <p class="price">Location : Groovy Pet Center Radio</p>
        <p class="loc">Addres: Jl. Radio III No.1, RT.1/RW.4, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130</p>

        <div class="BookNow">
            <a href='veterinary/vet2'>Book Now</a>
        </div>
    </div>

    <div class="cont-3">
        <img src="image/vet profile.png" alt="">
        <h1>Drh Indah Pratiwi</h1>
        <p class="titleVet-3">Junior Veterinarian</p>
        <p class="price">Location : Pet Vet</p>
        <p class="loc">Addres: Front of Sudirman Park Apartment 10220, Jakarta Pusat, Daerah Khusus Ibukota Jakarta</p>

        <div class="BookNow">
            <a href='veterinary/vet3'>Book Now</a>
        </div>
    </div>
</body>
</html>