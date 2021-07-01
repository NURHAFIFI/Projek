<!--membuat sambungan ke db-->
<?php
  include('config.php');
  session_start();
?>
<html>
<head>
  <title>PENDAFTARAN</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
  body {
  background: #B0C4DE;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}
form {
  width: 400px;
  border: 2px solid #ccc;
  padding: 20px;
  background: #B0E0E6;
  border-radius: 15px;
}

input {
  display: block;
  border: 2px solid #ccc;
  width: 70%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}
label {
  color:black;
  font-size: 18px;
  padding: 10px;
}

</style>
<body>
  <div class="header">
  <h2>PENDAFTARAN</h2>
  </div>
  
  <form method="post" action="login.php">


    <center><div class="input-group">
      <label>Name</label>
      <input type="text" name="name" placeholder="Name">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <label>No Tel</label>
      <input type="text" name="no tel" placeholder="No tel">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" placeholder="Username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" placeholder="Password">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2" placeholder="Re-password">
    </div>
    <div class="input-group">
      <input type="submit" value="SIGN UP">
    </div></center>

  </form>
</body>
</html>