
<?php
require('config.php');
if(isset($_POST['update']))
{
	$id=$_POST['nama_peserta'];
	$email=$_POST['e-mail'];
	$no_tel=$_POST['no_tel'];
	$slot=$_POST['slot'];

}
?>
<?php

$id=$_GET[''];
$result=mysqli_query($connect, "SELECT * FROM nama WHERE nama_peserta=$id");

while ($res=mysqli_result()){
	$nama=$res['nama_peserta'];
	$email=$res['e-mail'];
	$no_phone=$res['no_phone'];
	$slot=$res['slot'];
}
?>

<html>
<head>
<title>KEMASKINI</title>
</head>
<body>
<center><h2>KEMASKINI REKOD</h2>
<fieldset>
<form name="form1" method="post" action="edit peserta.php">
action="edit peserta.php">	
<table border="0">
<tr>
<td>NAMA PESERTA</td>
<td><input type="text" readonly name="nama_peserta" 
value="<?php echo $nama;?>"></td>"></td>
</tr>
<tr>
<td>E-MAIL PESERTA</td>
<td><input type="text" name="e-mail" 
value=""></td>
</tr>
<tr>
<td>NO TEL</td>
<td><input type="text" name="no_tel"
value=""></td>
</tr>
<tr>
<td>Slot</td><td> <select type="text" name=" Slot " required>
		<option value="Slot 1"> 24 JUN 2021 ,10 AM  </option>
    	<option value="Slot 2"> 30 JUN 2021 ,10 AM   </option>
    	<option value="Slot 3">  1 JULAI 2021 ,10 AM   </option>
    	
  		</select><br><br></td>

<tr>
<td><input type="submit" name="update" 
value="Update"></td>
</tr>
<tr>
<td><input type="hidden" name="nama" value="<?php echo $_GET['nama'];?>"></td>
</tr>
</table>
</form>
<a href="SEMINAR INFO PAGE.html">Muka Depan</a>
</fieldset>
</center>
</body>
</html>