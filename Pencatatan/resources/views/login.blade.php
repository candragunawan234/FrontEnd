<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan | LOGIN</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-side {
      width: 50%;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .admin-side {
      width: 50%;
      padding: 40px;
      background-color: #f2f2f2;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<div class="container">
    <div class="login-side">
      <h2>User Login</h2>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter your password">
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
      </form>
    </div>

    <div class="admin-side">
      <h2>Admin Login</h2>
      <form>
        <div class="form-group">
          <label for="admin-username">Username</label>
          <input type="text" id="admin-username" placeholder="Enter your admin username">
        </div>
        <div class="form-group">
          <label for="admin-password">Password</label>
          <input type="password" id="admin-password" placeholder="Enter your admin password">
        </div>
        <div class="form-group">
          <button type="submit">Login as Admin</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>