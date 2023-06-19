<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/css/addressBook.css')}}">
    <title>Address Book</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-inner">
            <div class="logo">
                <a href='/'><img src="image/image-removebg-preview (1) 1.png" alt=""></a>
            </div>
            
            <div class="line"></div>

            <div class="logo-right">
                <img src="{{ asset('images/shopping-cart 2.png') }}" alt="">
                <a href="profile.html"><img src="{{ asset('/images/user 2.png') }}" alt=""></a>
            </div>                
        </div>
    </nav>

    

    <div class="content">
        <div class="container1">
            <div class="tr1">
                <h3>Home 1</h3>
                <p>Harry Styles</p>
                <p>081211223344</p>
                <p>Jl. Kemanggisan No. 2, Jakarta Pusat, 10220</p>
            </div>
        
            <div class="tr2">
                <h3>Home 2</h3>
                <p>Emma Watson</p>
                <p>081211223344</p>
                <p>Jl. Kemanggisan No. 2, Jakarta Pusat, 10220</p>
            </div>
        </div>

        <div class="container2">
            <h3>Add Address:</h3>
            <form action="#" method="post" class="newAddress">
                <div>
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" placeholder="Insert your name here*" required>
                 </div> 
     
                <div>
                     <label for="name">Address</label>
                     <input type="text" name="address" id="address" placeholder="Insert your address here*" required>
                 </div> 

                <div>
                     <label for="name">State/Province</label>
                     <input type="text" name="state" id="state" placeholder="Insert your state/province here*" required>
                 </div> 

                <div>
                     <label for="name">City/District</label>
                     <input type="text" name="city" id="city" placeholder="Insert your city here*" required>
                 </div> 

                <div>
                     <label for="name">Postal Code</label>
                     <input type="text" name="code" id="code" placeholder="Insert your postal code here*" required>
                 </div> 

                 <div>
                     <label for="name">Phone Number</label>
                     <input type="text" name="phone" id="phone" placeholder="Insert your phone number here*" required>
                 </div> 

                 <button type="submit" class="btn">Save</button>
             </form>
        </div>
    </div>
</body>
</html>