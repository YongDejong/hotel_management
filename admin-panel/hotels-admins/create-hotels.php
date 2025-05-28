<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php

if(!isset($_SESSION['adminname'])) {
    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
}

if(isset($_POST['submit'])) {
    if(empty($_POST['name']) OR empty($_POST['description']) OR empty($_POST['location']) OR empty($_FILES['image']['name'])) {
        echo "<script>alert('One or more inputs are empty')</script>";
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $image = $_FILES['image']['name'];
        
        $dir = "hotel_images/". basename($image);

        $insert = $conn->prepare("INSERT INTO hotels (name, description, location, image) VALUES (:name, :description, :location, :image)");

        $insert->execute([
            ':name' => $name,
            ':description' => $description,
            ':location' => $location,
            ':image' => $image
        ]);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
            header("location: show-hotels.php");
            exit();
        } else {
            echo "<script>alert('Error uploading image')</script>";
        }
    }
}
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Create Hotels</h5>
                <form method="POST" action="create-hotels.php" enctype="multipart/form-data">
                    <!-- Name input -->
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="name" id="form2Example1" class="form-control" placeholder="Hotel Name" />
                    </div>

                    <!-- Image input -->
                    <div class="form-outline mb-4 mt-4">
                        <label>Hotel Image</label>
                        <input type="file" name="image" id="form2Example1" class="form-control"/>
                    </div>

                    <!-- Description input -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <!-- Location input -->
                    <div class="form-outline mb-4 mt-4">
                        <label for="exampleFormControlTextarea1">Location</label>
                        <input type="text" name="location" id="form2Example1" class="form-control" placeholder="Location"/>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Create Hotel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "../layouts/footer.php"; ?>