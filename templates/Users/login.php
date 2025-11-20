<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f2f2f2;
        }
        .login-box {
            width: 380px;
            margin: 80px auto;
            padding: 25px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 22px;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-title">User Login</div>

        <form method="POST" action="/users/login">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control"
                       placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control"
                       placeholder="Enter Password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">User Type</label>
                <select name="user_type" class="form-select" required>
                    <option value="">-- Select Type --</option>
                    <option value="1">Admin</option>
                    <option value="2">Security</option>
                    <option value="3">Visitor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>

        </form>
    </div>
</body>
</html>
