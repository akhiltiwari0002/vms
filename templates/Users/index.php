<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        /* Navbar */
        .navbar {
            width: 100%;
            background: #2c3e50;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .navbar .brand {
            font-size: 20px;
            font-weight: 600;
        }
        .navbar a.logout {
            color: #fff;
            text-decoration: none;
            background: #e74c3c;
            padding: 8px 15px;
            border-radius: 5px;
        }

        /* Layout */
        .layout {
            display: flex;
            margin-top: 60px; /* Navbar height */
        }

        /* Left Panel */
        .sidebar {
            width: 220px;
            background: #34495e;
            height: calc(100vh - 60px);
            color: #fff;
            padding: 20px 0;
            position: fixed;
            top: 60px;
            left: 0;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #ecf0f1;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #3d566e;
        }

        /* Main Content */
        .content {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">User Dashboard</div>
        <a href="/users/logout" class="logout">Logout</a>
    </div>

    <!-- Layout with Sidebar + Content -->
    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="#">Dashboard</a>
            <a href="#">My Profile</a>
            <a href="#">Settings</a>
            <a href="#">Notifications</a>
        </div>

        <!-- Content Area -->
        <div class="content">
            <h2>Welcome <?php echo h($user['name']); ?>!</h2>
            <p>This is your home page.</p>
        </div>
    </div>

</body>
</html>