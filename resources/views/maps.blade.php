<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paw Maps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/maps.css') }}">    
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
                <a href='grooming'>Grooming</a>
                <a class = "active" href="">Paw Maps</a>
            </div>

            <div class="logo-right">
                <img src="{{ asset('images/shopping-cart 2.png') }}" alt="">
                <a href='profile'><img src="{{ asset('/images/user 2.png') }}" alt=""></a>
            </div>                
        </div>
    </nav>
    
    <div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-title">
						<h4><span>Petshop</span> Near You</h2>
					</div>
					<div class="searchbox">
						<form class="d-flex" role="search">
						  <i class="bi bi-search"></i>
						  <input class="form-control me-2" type="search" placeholder="Find your location" aria-label="Search">
						</form>
					  </div>
				</div>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="map-area">
					<iframe href="maps.html" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.416106107474!2d106.7632105746415!3d-6.208719693779145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f838138e6f%3A0x4ad1040ecb24eb63!2sFayos%20Petstore!5e0!3m2!1sen!2sid!4v1686716660287!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="contact-form">
						<form>
							<div class="form-group">
								<input class="form-control" placeholder="Contact Us Here" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Your Name" type="email">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Email" type="email">
							</div>
							<div class="form-group">
								<textarea class="form-control" cols="30" placeholder="Message" rows="10"></textarea>
							</div>
							<button class="btn" type="submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>