<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/grAppointment.css')}}">
    <title>Happy Pets Petshop & Grooming</title>
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
                <a href='MyCart'><img src="{{asset('images/shopping-cart 2.png')}}" alt=""></a>
                <a href='profile'><img src="{{ asset('/images/user 2.png') }}" alt=""></a>
            </div>                
        </div>
    </nav>

    <div class="cont-1">
        <img src="{{ asset('image/grooming-3.png') }}" alt="">
        <h1>JakPetz</h1>
        <div class="star-1">
            <img src="{{ asset('image/5 star.png') }}" alt="">
        </div>
        <p class="price">Operational hour: 09.00 - 17.00</p>
        <p class="loc">Location : Location : Jl. Kemang Sel. No.125, RW.2, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730</p>

        <div class="cont-2">
            <p>Pet's Information</p>
        </div>

        <form method="POST" action="{{ route('BookingGrooming3.store') }}" enctype="multipart/form-data" class="booking">
            @csrf
           <div>
                <label for="name">Pet Name</label>
                <input type="text" name="namePet" id="namePet" placeholder="Insert your pet name here*" required>
            </div> 

           <div>
                <label for="name">Age</label>
                <input type="text" name="agePet" id="agePet" placeholder="Insert your pet age here*" required>
            </div> 

           <div>
                <label for="name">Breed</label>
                <input type="text" name="breedPet" id="breedPet" placeholder="Insert your pet breed here*" required>
            </div> 

            <div class="cont-3">
                <p>Pet Owner Detail</p>
            </div>

            <div>
                 <label for="name">Pet Owner Name</label>
                 <input type="text" name="ownPet" id="ownPet" placeholder="Insert your name here*" required>
             </div> 
 
            <div>
                 <label for="name">Phone Number</label>
                 <input type="text" name="number" id="number" placeholder="Insert your phone number here*" required>
             </div> 
 
            <div>
                 <label for="name">Address</label>
                 <input type="text" name="address" id="address" placeholder="Insert your address here*" required>
             </div> 

            <div class="cont-4">
                <p>Grooming Detail</p>
            </div>

            <div>
                 <label for="name">Grooming Instructions</label>
                 <input type="text" name="GrIns" id="GrIns" placeholder="Insert your grooming instructions here*" required>
             </div> 
 
            <div>
                 <label for="name">Date & Time</label>
                 <input type="datetime-local" name="date" id="date" required>
             </div> 

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>