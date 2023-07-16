<!DOCTYPE html>
<html>
<head>
  <title>Form Registrasi</title>
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
    <h2>Register</h2>
    <form action="register.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <input type="submit" value="Daftar">
    </form>
  </div>

  <?php
  include "koneksi.php";
  if(isset($_POST['submit'])){
    $Username = $_POST ['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Confirm_Password = $_POST['Confirm_Password'];

    $query = "INSERT INTO register VALUES('','$Username','$Email','$Password','$Confirm_Password')";
    mysqli_query($conn, $query);
    echo "Data telah terkirim";
  }
  ?>
</body>
</html>

