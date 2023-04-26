
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "cms";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

?>
<?php
	// check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

 
echo '<script> alert("Your donation has been successfully filed ")</script>';
}
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trial-2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&amp;family=Open+Sans:wght@400;500&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Font%20Awesome%205%20Brands.css">
    <link rel="stylesheet" href="assets/css/Font%20Awesome%205%20Free.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/css/lib/animate/animate.min.css">
    <link rel="stylesheet" href="assets/css/css/lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/css/lib/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/css/style.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery-baguetteBox.min.css">
</head>

<body>
    <div class="container-fluid text-light bg-dark px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 text-start px-5">
                <div class="d-inline-flex align-items-center h-100 me-4"><span class="fa fa-phone-alt me-2"></span><span>+012 345 6789</span></div>
                <div class="d-inline-flex align-items-center h-100"><span class="far fa-envelope me-2"></span><span>info@example.com</span></div>
            </div>
            <div class="col-lg-5 text-end px-5">
                <div class="d-inline-flex align-items-center h-100 mx-n2"><span>Follow Us:</span><a class="btn btn-link text-light" role="button" href=""><i class="fab fa-facebook-f"></i></a><a class="btn btn-link text-light" role="button" href=""><i class="fab fa-twitter"></i></a><a class="btn btn-link text-light" role="button" href=""><i class="fab fa-linkedin-in"></i></a><a class="btn btn-link text-light" role="button" href=""><i class="fab fa-instagram"></i></a></div>
            </div>
        </div>
    </div>
    <nav class="bg-white navbar navbar-expand-lg navbar-light sticky-top p-0"><a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="index.html"><h1 class="m-0">Sansar</h1></a><button class="navbar-toggler me-4" data-bs-toggle="collapse" type="button" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="ms-auto navbar-nav p-4 p-lg-0"><a href="index.html" class="nav-item nav-link active">Home</a><a class="nav-item nav-link" href="#about1">About</a><a class="nav-item nav-link" href="#services1">Services</a><a class="nav-item nav-link" href="#team1">Team</a>
                <div class="nav-item dropdown">
                    <div class="bg-light dropdown-menu m-0"><a href="feature.html" class="dropdown-item">Features</a><a href="quote.html" class="dropdown-item">Free Quote</a><a href="team.html" class="dropdown-item">Our Team</a><a href="testimonial.html" class="dropdown-item">Testimonial</a><a href="404.html" class="dropdown-item">404 Page</a></div>
                </div><a href="contact.html" class="nav-item nav-link">Contact</a>
            </div><a class="btn btn-primary d-none d-lg-block py-4 px-lg-4 rounded-0" role="button" href="">Register</a>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Clothes Donation Pick-Up</h2>
                <p>&nbsp;Before you book a pick-up please ensure the following standards are met from your side for a quick and beneficial donation.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Stack-Clean-Color-Shirts-White-Basket_Tide-Life-Objects_SIDE-ANGLE-282_1440x812.jpg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Clean And Intact Clothes</h4>
                        <p class="card-text">Check the condition of the clothes: Donated clothes should be clean, free of holes, tears, or stains. Clothes that are too worn out should not be donated as they may not be usable by others. .Prior to donating wash clothes and fold them neatly.</p>
                        <div class="d-flex">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="carousel slide" data-bs-ride="false" id="carousel-1">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/bag1.jpeg" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/clothes-plastic-bags-everyday-clothes-packed-plastic-bags-179130836.jpg" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Clothes-donation.max-784x410.jpg" alt="Slide Image"></div>
                            </div>
                            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                        <h4 class="card-title">Pack Clothes in Carton Boxes or Bags</h4>
                        <p class="card-text">You can pack your donations in any carton boxes or blue disposable bags or any shopping bags. Please refer to images packing done by our donors.</p>
                        <div class="d-flex">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/fashion-closet-clothing.jpeg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Clothing that are not accepted</h4>
                        <p class="card-text">Some items, such as undergarments or swimsuits, are not suitable for donation. Make sure to only donate items that can be reused.</p>
                        <div class="d-flex">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center ms-md-">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4" style="--bs-body-bg: var(--primary);background: var(--bs-white);">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5 mt-md- me-md-0 ms-md-" style="--bs-body-bg: var(--secondary);background: var(--primary);">
                            <h2 class="text-center mb-4">Pick-Up Request</h2>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
                                <label for="name">Name:</label>
		<input type="text" id="name" name="name" required="required"><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required="required"><br><br>

		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required="required"><br><br>

		<label for="address">Address:</label>
		<input type="text" id="address" name="address" required="required"><br><br>

		<label for="check1">T-Shirts</label>
		<input type="checkbox" id="check1" name="check[]" value="1">
		<label for="count1">Count :</label>
		<input type="number" id="count1" name="count[]" value="0"><br><br>

		<label for="check2">Pants</label>
		<input type="checkbox" id="check2" name="check[]" value="2">
		<label for="count2">Count :</label>
		<input type="number" id="count2" name="count[]" value="0"><br><br>

		<label for="check3">Jackets/Shawls</label>
		<input type="checkbox" id="check3" name="check[]" value="3">
		<label for="count3">Count :</label>
		<input type="number" id="count3" name="count[]" value="0"><br><br>

		<label for="check4">Kurtas</label>
		<input type="checkbox" id="check4" name="check[]" value="4">
		<label for="count4">Count :</label>
		<input type="number" id="count4" name="count[]" value="0"><br><br>

		<label for="check5">Sarees</label>
		<input type="checkbox" id="check5" name="check[]" value="5">
		<label for="count5">Count :</label>
		<input type="number" id="count5" name="count[]" value="0"><br><br>

		<input type="submit" value="Submit">
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid text-light bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fas fa-map-marker-alt me-3"></i>St Joseph Engineering College</p>
                    <p class="mb-2"><i class="fas fa-phone-alt me-3"></i>91 6361147087</p>
                    <p class="mb-2"><i class="fas fa-envelope me-3"></i>sansarinnovate@gmail.com</p>
                    <div class="d-flex pt-2"><a class="btn btn-outline-light btn-square rounded-circle me-2" role="button" href=""><i class="fab fa-twitter"></i></a><a class="btn btn-outline-light btn-square rounded-circle me-2" role="button" href=""><i class="fab fa-facebook-f"></i></a><a class="btn btn-outline-light btn-square rounded-circle me-2" role="button" href=""><i class="fab fa-youtube"></i></a><a class="btn btn-outline-light btn-square rounded-circle me-2" role="button" href=""><i class="fab fa-linkedin-in"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="text-white mb-4">Services</h4><a class="btn btn-link" role="button" href="">Schedule A Pickup</a><a class="btn btn-link" role="button" href="">Donate Books</a><a class="btn btn-link" role="button" href="index.html">Donate Clothes</a><a class="btn btn-link" role="button" href="">Latest News</a><a class="btn btn-link" role="button" href="">Recycler helper</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="text-white mb-4">Quick Links</h4><a class="btn btn-link" role="button" href="index.html">About Us</a><a class="btn btn-link" role="button" href="">Contact Us</a><a class="btn btn-link" role="button" href="index.html">Our Services</a><a class="btn btn-link" role="button" href="index.html">Terms &amp; Condition</a><a class="btn btn-link" role="button" href="index.html">Support</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Join our newsletter and stay updated about all things green and environmentally friendly in mangalore</p>
                    <div class="position-relative w-100"><input class="bg-light border-light form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"><button class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" type="button">SignUp</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0"><span> © </span><a class="border-bottom" href="#">Sansar</a><span>, All Right Reserved. </span></div>
                <div class="col-md-6 text-center text-md-end"><span>&nbsp;</span></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/js/bs-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/js/lib/wow/wow.min.js"></script>
    <script src="assets/js/js/lib/easing/easing.min.js"></script>
    <script src="assets/js/js/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/js/js/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/js/js/lib/counterup/counterup.min.js"></script>
    <script src="assets/js/js/lib/parallax/parallax.min.js"></script>
    <script src="assets/js/js/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/js/lib/lightbox/js/lightbox.min.js"></script>
    <script src="assets/js/js/js/main.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>
 