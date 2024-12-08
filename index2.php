<?php
session_start();

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['type'] != 'staff') {
    header("Location: loginform.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Gallery Cafe - Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Gallery Cafe" name="keywords">
        <meta content="Gallery Cafe" name="description">

        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
            body {
                padding: 20px;
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
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <a href="promos.html" class="nav-item nav-link">Promos</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <a href="parking.html" class="nav-item nav-link">Parking</a>
                        <a href="index2.php" class="nav-item nav-link active">Staff-Dash</a>
                        <a href="logout.php" class="nav-item nav-link">Log-Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Staff Dashboard</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Dashboard start -->
        <div class="container" style="background-color: #dddddd; padding: 20px; border-radius: 5px;">
            <h2>Reservation Management</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guests</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="reservationTable">
                    <!-- Reservations will be dynamically inserted here -->
                </tbody>
            </table>
        </div>
        
        <!-- Modal for Updating Reservation -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="updateForm">
                  <input type="hidden" id="updateId" name="id">
                  <div class="form-group">
                    <label for="updateName">Name</label>
                    <input type="text" class="form-control" id="updateName" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="updateEmail">Email</label>
                    <input type="email" class="form-control" id="updateEmail" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="updateMobile">Mobile</label>
                    <input type="text" class="form-control" id="updateMobile" name="mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="updateDate">Date</label>
                    <input type="date" class="form-control" id="updateDate" name="date" required>
                  </div>
                  <div class="form-group">
                    <label for="updateTime">Time</label>
                    <input type="time" class="form-control" id="updateTime" name="time" required>
                  </div>
                  <div class="form-group">
                    <label for="updateGuests">Guests</label>
                    <input type="number" class="form-control" id="updateGuests" name="guests" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script>
        $(document).ready(function() {
            fetchReservations();
        
            // Fetch Reservations
            function fetchReservations() {
                $.ajax({
                    url: 'fetch_reservations.php',
                    method: 'GET',
                    success: function(response) {
                        var reservations = JSON.parse(response);
                        var reservationTable = $('#reservationTable');
                        reservationTable.empty();
                        reservations.forEach(function(reservation) {
                            var row = '<tr>' +
                                '<td>' + reservation.id + '</td>' +
                                '<td>' + reservation.name + '</td>' +
                                '<td>' + reservation.email + '</td>' +
                                '<td>' + reservation.mobile + '</td>' +
                                '<td>' + reservation.date + '</td>' +
                                '<td>' + reservation.time + '</td>' +
                                '<td>' + reservation.guests + '</td>' +
                                '<td>' +
                                    '<button class="btn btn-success btn-sm confirm-btn" data-id="' + reservation.id + '">Confirm</button>' +
                                    ' <button class="btn btn-warning btn-sm update-btn" data-id="' + reservation.id + '">Update</button>' +
                                    ' <button class="btn btn-danger btn-sm delete-btn" data-id="' + reservation.id + '">Delete</button>' +
                                '</td>' +
                            '</tr>';
                            reservationTable.append(row);
                        });
                    }
                });
            }
        
            // Handle Confirm Reservation
            $(document).on('click', '.confirm-btn', function() {
                var id = $(this).data('id');
                // Implement confirmation logic here (e.g., update status in the database)
                alert('Reservation confirmed: ' + id);
            });
        
            // Handle Update Reservation
            $(document).on('click', '.update-btn', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'fetch_reservations.php',
                    method: 'GET',
                    success: function(response) {
                        var reservations = JSON.parse(response);
                        var reservation = reservations.find(function(r) { return r.id == id; });
                        if (reservation) {
                            $('#updateId').val(reservation.id);
                            $('#updateName').val(reservation.name);
                            $('#updateEmail').val(reservation.email);
                            $('#updateMobile').val(reservation.mobile);
                            $('#updateDate').val(reservation.date);
                            $('#updateTime').val(reservation.time);
                            $('#updateGuests').val(reservation.guests);
                            $('#updateModal').modal('show');
                        }
                    }
                });
            });
        
            // Handle Delete Reservation
            $(document).on('click', '.delete-btn', function() {
                if (confirm('Are you sure you want to delete this reservation?')) {
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'delete_reservation.php',
                        method: 'POST',
                        data: { id: id },
                        success: function(response) {
                            alert(response);
                            fetchReservations();
                        }
                    });
                }
            });
        
            // Handle Update Form Submission
            $('#updateForm').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'update_reservation.php',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert(response);
                        $('#updateModal').modal('hide');
                        fetchReservations();
                    }
                });
            });
        });
        </script>


        <!--Order management-->
        <div class="container mt-5" style="background-color: #fbaf32; padding: 20px; border-radius: 5px;">
            <h2>Pre-order Management</h2>
            <table class="table table-bordered" id="preorder-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Food Item</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Pre-orders will be dynamically added here -->
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function(){
                function fetchPreorders() {
                    $.ajax({
                        url: 'fetch_preorders.php',
                        method: 'GET',
                        success: function(response) {
                            let preorders = JSON.parse(response);
                            let tableBody = $('#preorder-table tbody');
                            tableBody.empty();
                            if (preorders.length > 0) {
                                preorders.forEach(function(preorder) {
                                    tableBody.append(`
                                        <tr>
                                            <td>${preorder.id}</td>
                                            <td>${preorder.item}</td>
                                            <td>
                                                <button class="btn btn-success btn-confirm" data-id="${preorder.id}">Confirm</button>
                                                <button class="btn btn-primary btn-modify" data-id="${preorder.id}">Modify</button>
                                                <button class="btn btn-danger btn-delete" data-id="${preorder.id}">Delete</button>
                                            </td>
                                        </tr>
                                    `);
                                });
                            } else {
                                tableBody.append('<tr><td colspan="3">No pre-orders found</td></tr>');
                            }
                        }
                    });
                }
    
                fetchPreorders();
    
                $(document).on('click', '.btn-confirm', function() {
                    let id = $(this).data('id');
                    $.post('confirm_preorder.php', { id: id }, function(response) {
                        fetchPreorders();
                    });
                });
    
                $(document).on('click', '.btn-modify', function() {
                    let id = $(this).data('id');
                    let newFoodItem = prompt("Enter new food item name:");
                    if (newFoodItem) {
                        $.post('modify_preorder.php', { id: id, item: newFoodItem }, function(response) {
                            fetchPreorders();
                        });
                    }
                });
    
                $(document).on('click', '.btn-delete', function() {
                    let id = $(this).data('id');
                    if (confirm("Are you sure you want to delete this pre-order?")) {
                        $.post('delete_preorder.php', { id: id }, function(response) {
                            fetchPreorders();
                        });
                    }
                });
            });
        </script>
      

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
