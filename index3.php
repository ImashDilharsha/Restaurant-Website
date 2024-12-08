<?php
session_start();

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Check if the user is logged in and is a customer
if (!isset($_SESSION['username']) || $_SESSION['type'] != 'customer') {
    header("Location: loginform.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Gallery Cafe - Menu</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Gallery Cafe" name="keywords">
        <meta content="Gallery Cafe" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


        <!-- Stylesheet -->
        <link href="css/index3.css" rel="stylesheet">

        <style>
        .container {
            max-width: 1200px;
            margin-top: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
        .btn-buy {
            background-color: #fbaf32;
            color: #fff;
        }
    </style>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Gallery <span>Cafe</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="team.html" class="nav-item nav-link">Chef</a>
                        <a href="index3.php" class="nav-item nav-link active">Menu</a>
                        <a href="promos.html" class="nav-item nav-link">Promos</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <a href="parking.html" class="nav-item nav-link">Parking</a>
                         
                        <a href="logout.php" class="nav-item nav-link">Log-Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Food Menu</h2>
                    </div>
                     
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Food Start -->
        <div class="food mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-meat"></i>
                            <h2>Appetizers and Starters</h2>
                            <p>
                                Kick off your meal with our delightful appetizers and starters, featuring fresh salads, savory soups, and tempting finger foods. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-fast-food"></i>
                            <h2>Main <br>Courses</h2>
                            <p>
                                Indulge in our diverse main courses, including gourmet burgers, succulent steaks, delicious pastas, and a variety of hearty entrées. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            <h2>Desserts and Beverages</h2>
                            <p>
                                End your meal on a sweet note with our delectable desserts, and enjoy our refreshing beverages, from specialty drinks to classic favorites. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->
        

        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>BROWSE OUR</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#srilankan">Sri Lankan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#italian">Italian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#chinese">Chinese</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Beverages</a>
                        </li>
                    </ul>
                     
                    
                    <div class="tab-content">
                        <div id="srilankan" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-rice.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Rice and Curry</span> <strong>Rs.800</strong></h3>
                                            <p>Traditional rice served with a variety of spicy curries.</p>
                                        </div>
                                        <button id="Rice and Curry" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>

                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-hoppers.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Hoppers</span> <strong>Rs.100</strong></h3>
                                            <p>Delight in crispy hoppers with coconut sambal and dhal curry.</p>
                                        </div>
                                        <button id="Hoppers" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>

                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-kottu.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Chicken Kottu</span> <strong>Rs.850</strong></h3>
                                            <p>Stir-fried chopped roti with vegetables, meat, and spices.</p>
                                        </div>
                                        <button id="Chicken Kottu" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-lamprais.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Lamprais</span> <strong>Rs.900</strong></h3>
                                            <p>Savor this Dutch Burgher-influenced rice dish, wrapped in banana leaves.</p>
                                        </div>
                                        <button id="Lamprais" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-stringh.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>String Hoppers</span> <strong>Rs.200</strong></h3>
                                            <p>Enjoy this string hoppers with a side of onion and chili mix.</p>
                                        </div>
                                        <button id="String Hoppers" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-srilankan-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="italian" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-pizzam.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Margherita Pizza</span> <strong>Rs.1800</strong></h3>
                                            <p>Classic pizza with fresh tomatoes, mozzarella, and basil.</p>
                                        </div>
                                        <button id="Margheritta Pizza" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-spag.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Spaghetti Carbonara</span> <strong>Rs.1900</strong></h3>
                                            <p>Creamy pasta with pancetta, egg, and Parmesan cheese.</p>
                                            </div>
                                            <button id="Spaghetti Carbonara" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-lasagna.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Lasagna</span> <strong>Rs.2000</strong></h3>
                                            <p>Layers of pasta with rich meat sauce and melted cheese.</p>
                                        </div>
                                        <button id="Lasagna" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-risotto.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Risotto al Funghi</span> <strong>Rs.1400</strong></h3>
                                            <p>Creamy risotto with mushrooms and Parmesan.</p>
                                        </div>
                                        <button id="Risotto al Funghi" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-italian-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="chinese" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-chickens.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Sweet and Sour Chicken</span> <strong>Rs.1500</strong></h3>
                                            <p>Crispy chicken in a tangy sweet and sour sauce.</p>
                                        </div>
                                        <button id="Sweet and Sour Chicken" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-prawns.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Kung Pao Prawns</span> <strong>Rs.1800</strong></h3>
                                            <p>Spicy stir-fried prawns with peanuts and vegetables.</p>
                                        </div>
                                        <button id="Kung Pao Prawns" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-frice.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Fried Rice</span> <strong>Rs.950</strong></h3>
                                            <p>Classic Chinese-style fried rice with vegetables and your choice of meat.</p>
                                        </div>
                                            <button id="Fried Rice" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-spring.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                        <div>
                                            <h3><span>Spring Rolls</span> <strong>Rs.750</strong></h3><br>
                                            <p>Crispy rolls filled with vegetables and meat. </p>
                                        </div>
                                        <button id="Spring Rolls" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-dimsum.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                            <div>
                                            <h3><span>Dim Sum Platter</span> <strong>Rs.1400</strong></h3>
                                            <p>An assortment of steamed and fried dumplings.</p>
                                        </div>
                                        <button id="Dim Sum Platter" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-chinese-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-lime.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                            <div>
                                            <h3><span>Fresh Lime Juice</span> <strong>Rs.450</strong></h3>
                                            <p>Refreshing lime juice with a hint of mint.</p>
                                        </div>
                                        <button id="Fresh Lime Juice" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-mango.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                            <div>
                                            <h3><span>Mango Smoothie</span> <strong>Rs.450</strong></h3><br>
                                            <p>Creamy and sweet mango blend.</p>
                                        </div>
                                        <button id="Mango Smoothie" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-ceylontea.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                            <div>
                                            <h3><span>Ceylon Tea</span> <strong>Rs.300</strong></h3><br>
                                            <p>Classic Sri Lankan tea, hot or iced.</p>
                                        </div>
                                        <button id="Ceylon Tea" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-espresso.png" alt="Image">
                                        </div>
                                        <div class="menu-text d-flex flex-column justify-content-between">
                                            <div>
                                            <h3><span>Espresso</span> <strong>Rs.450</strong></h3><br>
                                            <p>Strong and bold shot of espresso.</p>
                                        </div>
                                        <button id="Espresso" class="btn buy-now-btn mt-3" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-beverage-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="buyNowModal" tabindex="-1" role="dialog" aria-labelledby="buyNowModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="buyNowModalLabel">Buy Now Options</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <button class="btn btn-takeaway mb-2">Take Away</button>
                                        <button class="btn btn-preorder mb-2">Pre-Order</button>
                                        <button class="btn btn-uber mb-2">Uber/PickMe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Menu back end code-->
                        <script>
                            let currentItem = '';
                        
                            // Event listener for all Buy Now buttons
                            document.querySelectorAll('.buy-now-btn').forEach(button => {
                                button.addEventListener('click', function() {
                                    currentItem = this.id; // Capture the item name from the button ID
                                });
                            });
                        
                            // Event listener for the Pre-Order button in the modal
                            document.querySelector('.btn-preorder').addEventListener('click', function() {
                                fetch('save_preorder.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify({ item: currentItem })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        alert('Pre-order saved successfully!');
                                    } else {
                                        alert('Failed to save pre-order.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                            });
                        </script>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <br>

        <!-- New Items section -->
                <div class="section-header text-center">
                    <p>BROWSE OUR</p>
                    <h2>New Food Items</h2>
                </div>

                <?php
                // Include database connection
                include 'db_connect.php';

                // Fetch all menu items
                $sql = "SELECT * FROM menu_items";
                $result = mysqli_query($conn, $sql);
                ?>

                <div class="container">
                        <div class="row">
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                            <p class="card-text"><?php echo $row['description']; ?></p>
                                            <p class="card-text">LKR <?php echo $row['price']; ?></p>
                                            <a href="#" class="btn btn-buy">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                </div>



        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>647 De S Kularatne Mawatha, Colombo, Sri Lanka</p>
                                    <p><i class="fa fa-phone-alt"></i>011 846 2554</p>
                                    <p><i class="fa fa-envelope"></i>info@gallerycafe.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Send your email to get the daily news of The Gallery Cafe!
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn custom-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">The Gallery Cafe</a> All Right Reserved.</p>
                    <p>Designed By <a href="">Imash Dilharsha</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
