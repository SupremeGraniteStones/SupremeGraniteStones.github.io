<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
            padding-top: 50px; /* Adjust top padding to accommodate the fixed navbar */
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Start the session
        session_start();

        // Check if the user has logged in successfully
        if(isset($_SESSION['superadmin_id'])) {
            // Hide the super admin login form
            echo "<style>#login-form { display: none; }</style>";
            ?>
            <!-- Display create admin form if super admin is logged in -->
            <div class="form-container">
                <h2 class="mb-4">Create Admin</h2>
                <form action="create_admin_process.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <button type="submit" name="create" class="btn btn-primary">Create Admin</button>
                </form>
            </div>
            
            <!-- Logout button -->
            <a href="logout.php?type=superadminlogout" id="logout-btn" name="superadminlogout" class="btn btn-danger">Logout</a>
        <?php
        } else {
            // Show the super admin login form if not logged in
            ?>
            <div class="form-container">
                <h2 class="mb-4">Super Admin Login</h2>
                <form id="login-form" action="create_admin_process.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
