<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>

<?php

if(!isset($_SESSION['adminname'])) {
    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
}

$bookings = $conn->query("SELECT * FROM bookings");
$bookings->execute();

$allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);

?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check out</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Full name</th>
                    <!-- <th scope="col">Hotel name</th> -->
                    <th scope="col">Room name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Update Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allBookings as $booking) : ?>
                  <tr>
                    <th scope="row"><?php echo $booking->id; ?></th>
                    <td><?php echo $booking->check_in; ?></td>
                    <td><?php echo $booking->check_out; ?></td>
                    <td><?php echo $booking->email; ?></td>
                    <td><?php echo $booking->phone_number; ?></td>
                    <td><?php echo $booking->full_name; ?></td>
                    <!-- <td>Sheraton</td> -->
                    <td><?php echo $booking->room_name; ?></td>
                    <td><?php echo $booking->status; ?></td>
                    <td><?php echo $booking->payment; ?></td>
                    <td><?php echo $booking->created_at; ?></td>
                    
                     <td><a href="status-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-warning  text-center ">Status</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



<?php require "../layouts/footer.php"; ?>