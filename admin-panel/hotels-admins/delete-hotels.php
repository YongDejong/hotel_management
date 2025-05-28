<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>

<?php
// Check if ID exists and is valid
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
        // Begin transaction
        $conn->beginTransaction();
        
        // Get image filename using prepared statement
        $getImage = $conn->prepare("SELECT image FROM hotels WHERE id = :id");
        $getImage->bindParam(':id', $id, PDO::PARAM_INT);
        $getImage->execute();
        
        if ($fetch = $getImage->fetch(PDO::FETCH_OBJ)) {
            $imagePath = "hotel_images/" . basename($fetch->image);
            
            // Verify file exists and is within the intended directory
            if (file_exists($imagePath) && strpos(realpath($imagePath), realpath("hotel_images/")) === 0) {
                unlink($imagePath);
            }
            
            // Delete record using prepared statement
            $delete = $conn->prepare("DELETE FROM hotels WHERE id = :id");
            $delete->bindParam(':id', $id, PDO::PARAM_INT);
            $delete->execute();
            
            // Commit transaction
            $conn->commit();
        }
    } catch (Exception $e) {
        // Roll back transaction on error
        $conn->rollBack();
        // Log error and handle appropriately
        error_log("Deletion error: " . $e->getMessage());
        die("An error occurred while processing your request.");
    }
}

header("location: show-hotels.php");
exit();