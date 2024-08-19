<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Check if the logout is for admin or super admin
if(isset($_GET['type']) && $_GET['type'] === 'adminlogout') {
    // Redirect to the admin login page
    header("Location: admin_login.php");
    exit();
} elseif(isset($_GET['type']) && $_GET['type'] === 'superadminlogout') {
    // Redirect to the admin management page
    header("Location: admin_management.php");
    exit();
}

?>
