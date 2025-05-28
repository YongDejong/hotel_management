<?php require "layouts/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php 

 if(!isset($_SESSION['adminname'])) {
  echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
 }

// Hotel count
$hotelQuery = $conn->query("SELECT COUNT(*) AS count_hotels FROM hotels");
$allHotels = $hotelQuery->fetch(PDO::FETCH_OBJ);

// Admin count
$adminQuery = $conn->query("SELECT COUNT(*) AS count_admins FROM admins");
$allAdmins = $adminQuery->fetch(PDO::FETCH_OBJ);

// Rooms count
$roomQuery = $conn->query("SELECT COUNT(*) AS count_rooms FROM rooms");
$allRooms = $roomQuery->fetch(PDO::FETCH_OBJ);

// Bookings count
$bookingQuery = $conn->query("SELECT COUNT(*) AS count_bookings FROM bookings");
$allBookings = $bookingQuery->fetch(PDO::FETCH_OBJ);


?>
            
      <div class="row">
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <p class="card-text">number of hotels: <?php echo $allHotels->count_hotels; ?> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h5 class="card-title">Rooms</h5>
              <p class="card-text">number of rooms: <?php echo $allRooms->count_rooms?> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              <p class="card-text">number of admins: <?php echo $allAdmins->count_admins?> </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h5 class="card-title">Booking</h5>
              <p class="card-text">number of booking: <?php echo $allBookings->count_bookings?> </p>
            </div>
          </div>
        </div>
      </div>
              
            </div>
          </div>
        </div>
<?php require "layouts/footer.php"; ?>

