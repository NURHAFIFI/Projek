<!--membuat sambungan ke db-->
<?php
	include('config.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style type="text/css">
  body {
  background: lightblue;
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
  background: #708090;
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
  <h2>LOGIN PAGE</h2>
  </div>
  
  <form method="post" action="SEMINAR INFO PAGE.html">

  	<center><div class="input-group">
      <label>Username/Email</label>
      <input type="text/email" name="username" placeholder="Username/Email">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="email" placeholder="Password">
    </div>

<input type="submit" value="LOGIN">
    </div></center>

     <p>Don't have an account?</center> <a href="signup.php">Sign up now</a>.</p>



</body>
</html>