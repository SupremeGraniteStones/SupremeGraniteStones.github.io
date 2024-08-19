<?php
// Include your database connection file
include 'db_connection.php';

session_start();

// Handle super admin login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM superadmin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['superadmin_id'] = $row['id'];
            $_SESSION['superadmin_username'] = $row['username'];
            header("Location: admin_management.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid credentials.";
            header("Location: admin_management.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found.";
        header("Location: admin_management.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}

// Handle admin creation
if (isset($_POST['create'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM sgsadmin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['create_error'] = "Username already taken.";
        header("Location: admin_management.php");
        exit();
    }

    // Check if phone number already exists
    $stmt = $conn->prepare("SELECT * FROM sgsadmin WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['create_error'] = "Phone number already exists.";
        header("Location: admin_management.php");
        exit();
    }

    $sql = "INSERT INTO sgsadmin (username, password, email, phone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $password, $email, $phone);
    $stmt->execute();
    $stmt->close();

    $_SESSION['create_success'] = "Admin created successfully.";
    header("Location: admin_management.php");
    exit();
}

// Handle admin login
if (isset($_POST['adminlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM sgsadmin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];
            $_SESSION['login_success'] = "Successfully logged in.";
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid credentials.";
            header("Location: admin_login.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found.";
        header("Location: admin_login.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
