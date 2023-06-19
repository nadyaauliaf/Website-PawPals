<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Store</title>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    {{-- <nav class="navbar">
        <img src="images/image-removebg-preview__1__7-removebg-preview.png" class="navbar-logo">

        <div class="navbar-nav">
            <a href="#" style="border-bottom: 4px solid #6b5048;">STORE</a>
            <a href="#">PET HOTEL</a>
            <a href="#">VETERINARY</a>
            <a href="#">GROOMING</a>
            <a href="#">PAW MAPS</a>
        </div>

        <div class="navbar-extra">
            <i data-feather="settings" class="i"></i>
            <i data-feather="shopping-cart" class="i"></i>
            <i data-feather="user" class="i"></i>
        </div>
    </nav> --}}

    {{-- <header>
        <center><img src="images/7757278.jpg" class="header"></center>
    </header> --}}

    <section class="container">
        <div class="content">
            <img src="{{ asset('image/prod.png') }}" class="img">
            <div class="desc">
                <h1>Pedigree 5 KG</h1>
                <div class="star">
                    {{-- <img src="images/Star 56.png">
                    <img src="images/Star 59.png">
                    <img src="images/Star 62.png">
                    <img src="images/Star 65.png">
                    <img src="images/Star 68.png"> --}}
                    <img src="{{ asset('image/4 star.png') }}">
                </div>
                <h2>Rp. 492.500</h2>
                <span>Details</span>
                <p>Pedigree Good for skin health & makes coat shine. Maintains healthy & strong bones Maintains dog's
                    digestive health Makes muscles stronger Contains the right nutrients to build a good immune system.
                </p>
            </div>
        </div>

        <div class="content-2">
            <div class="flex-1">
                <h1>Condition</h1>
                <h2>NEW</h2>
            </div>
            <div class="flex-2">
                <h1>Weight</h1>
                <h2>5 KG</h2>
            </div>
            <div class="flex-3">
                <h1>Min Order</h1>
                <h2>1 Piece</h2>
            </div>
        </div>

        <div class="content-3">
            <h1>Taking Order Receipt</h1>
            <div class="count">
                <div class="counter">
                    <div id="increment-count" class="ic">
                        <i data-feather="minus" class="i-1"></i>
                    </div>
                    <div id="total-count" class="tc">
                    </div>
                    <div id="decrement-count" class="dc">
                        <i data-feather="plus" class="i-1"></i>
                    </div>
                </div>
                <div class="stock">
                    <p>Total Stock : <span>666</span></p>
                </div>
            </div>
            <div class="button-1">
                <h1>Add to Chart</h1>
            </div>
            <div class="button-2">
                <h1>Buy Now</h1>
            </div>
            <div class="total">
                <p>Subtotal &nbsp;&nbsp;&nbsp;&nbsp;<span>Rp. 492.500</span></p>
            </div>
            <div class="deliv">
                <h1>Delivery</h1>
                <table>
                    <td>Select Delivery</td>
                    <td class="i-i"><i data-feather="chevron-down"></i></td>
                </table>
            </div>
        </div>
    </section>

    <script>
        feather.replace();

        const totalCount = document.getElementById("total-count");
        var count = 0;
        totalCount.innerHTML = count;
        const handleIncrement = () => {
            count--;
            totalCount.innerHTML = count;
        };
        const handleDecrement = () => {
            count++;
            totalCount.innerHTML = count;
        };
        const incrementCount = document.getElementById("increment-count");
        const decrementCount = document.getElementById("decrement-count");
        incrementCount.addEventListener("click", handleIncrement);
        decrementCount.addEventListener("click", handleDecrement);
    </script>
</body>

</html>