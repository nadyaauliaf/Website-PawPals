<!doctype html>
<html lang="en">
<head>
    <title> Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="{{asset('css/cart.css')}}">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <!-- <nav class="navbar">
			<div class="nav-inner">
				<div class="logo">
					<img src="./images/image-removebg-preview (1) 1.png" alt="">
				</div>
	
				<div class="buttonNav">
					<a href="">Store</a>
					<a href="">Pet Hotel</a>
					<a href="">Veterinary</a>
					<a href="">Grooming</a>
					<a href="">Paw Maps</a>
				</div>
	
				<div class="logo-right">
					<img src="./images/settings (1) 1.png" alt="">
					<img src="./images/shopping-cart 2.png" alt="">
					<img src="./images/user 2.png" alt="">
				</div>                
			</div>
		</nav> -->
		
		<h3 class="my-cart">My Cart</h3>

   	  <div class="keranjang">
        <div class="container">
            <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     					 <img src="{{ asset('images/Rectangle 89.png')}}" alt="">
                                    </div>
                                    <div class="des">
                                        <p>Pedegree 5 KG</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>Rp. 492.500</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>Rp. 492.500</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     					 <img src="{{ asset('images/image 11.png')}}"  alt="">
                                    </div>
                                    <div class="des">
                                        <p>Whiskas stick 36 gr</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>Rp. 22.500</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>Rp. 22.500</h6>
                            </td>
                        </tr>                 
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
	<div class="payment">
		<div class="col-lg-4 offset-lg-4">
			<div class="checkout">
				<ul>
					<li class="cart-total">Total
					<span>Rp. 515.000</span></li>
				</ul>
				<a href="#"class="proceed-btn">Checkout</a>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>