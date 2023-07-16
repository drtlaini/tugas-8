<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
  <style>
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      margin-top: 10px;
    }

    .error {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Masuk">
    </form>
  </div>

  <?php
  include "koneksi.php";
  if(isset($_POST['submit'])){
    $Username = $_POST ['username'];
    $Password = $_POST['password'];

    $query = "INSERT INTO login VALUES(','$Username','$Password')";
    mysqli_query($conn, $query);
    echo "kamu telah login";
  }
  ?>
</body>
</html>