<?php
require('config.php');

if(isset($_POST['username']) and isset($_POST['passwoord'])){

    //Assigning POST values to variables.
    $Username = $_POST['username'];
    $Password = $_POST['password'];

 $query = "SELECT * FROM 'login'   
 WHERE Username='$username' and Password='password'";

 $result = mysqli_query($link,$query) or die(mysqli_error($link));
 $count = mysqli_num_rows($result);

 if($count ==1){

    //echo "Maklumat login disahkan";
    echo "<script type='text/javascript'>alert('Maklumat Login disahkan'>";
    header("Location signup.php");
   }else{
    echo "<script type='text/javascript'>alert('wrong Username or Password')</script>";
    echo "<center><a href='login.php'>Login semula</a></center>";
   }
 }
?>