<?php



    session_start();
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

    header("location: http://localhost/hotel-booking"); // Redirect to login page
