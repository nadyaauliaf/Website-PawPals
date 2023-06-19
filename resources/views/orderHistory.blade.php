<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/css/orderHistory.css')}}">
    <title>Order History</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-inner">
            <div class="logo">
                <a href='/'><img src="image/image-removebg-preview (1) 1.png" alt=""></a>
            </div>

            <div class="logo-right">
                <a href='MyCart'><img src="{{asset('images/shopping-cart 2.png')}}" alt=""></a>
                <a href='profile'><img src="{{ asset('/images/user 2.png') }}" alt=""></a>
            </div>                
        </div>
    </nav>

    <div class="line"></div>

    <div class="searchbox">
        <form class="d-flex" role="search">
          <i class="bi bi-search"></i>
          <input class="form-control me-2" type="search" placeholder="Find your transaction..." aria-label="Search">
        </form>
    </div>

    <div class="tr1">
        <h2>Order #00001</h2>
        <p>Status: Shipped</p>
        <h5>Total Rp 647.000</h5>
        <p>Detail:</p>
        <pre>
            Pedegree 5kg                                1x                      Rp 450.000<br>
            Pedegree 1kg                                2x                      Rp 197.000
        </pre>
    </div>

    <div class="tr2">
        <h2>Order #00002</h2>
        <p>Status: Shipped</p>
        <h5>Total Rp 132.500</h5>
        <p>Detail:</p>
        <pre>
            Whiskas Junior 450gr                       2x                      Rp 110.000<br>
            Whiskas Stick 36gr                            1x                      Rp 22.500
        </pre>
    </div>


    <div class="tr3">
        <h2>Order #00003</h2>
        <p>Status: Shipped</p>
        <h5>Total Rp 30.000</h5>
        <p>Detail:</p>
        <pre>
            Superfood Treats 100gr                   1x                      Rp 30.000
        </pre>
    </div>
</body>
</html>