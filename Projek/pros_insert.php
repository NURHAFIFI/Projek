<html>
	<head>
	<title>SEMINAR REGISTRATION PAGE</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #7FFFD4;
	}

 #navbar>li
    {width: 190px ; float ;text-align: center;}

	li a
	{
	background-color: cyan;
	display:block;
	text-decoration: none;
	color :black;
	line-height: 50px;
	 }
	 li>a:hover{background: #cf1b27;}

	</style>
	<body>
	<center>
	<h2>SEMINAR REGISTRATION PAGE </h2>
	
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	
	<tr>
		<td>NAMA PESERTA</td><td>:</td><td> <input type="text" name="nama_peserta" required><br><br></td>
	</tr>
	<tr>
		<td>E-MAIL PESERTA</td><td>:</td><td> <input type="text" name="e-mail_peserta" required><br><br></td>
	</tr>
	<tr>
		<td>NO TEL</td><td>:</td><td> <input type="text" name="no_tel" required><br><br></td>
	</tr>
	
		<td>Slot</td><td>:</td><td> <select type="text" name=" Slot " required>
		<option value="Slot 1"> 24 JUN 2021 ,10 AM  </option>
    	<option value="Slot 2"> 30 JUN 2021 ,10 AM   </option>
    	<option value="Slot 3">  1 JULAI 2021 ,10 AM   </option>
    	
  		</select><br><br></td>


	</tr>

<tr>
	<td colspan="3">
	<center><li><a href="edit peserta.php">Edit</a></li></center>
	<center><li><a href="padam peserta.php">Padam</a></li></center>
	</td></center>

	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
	</tr>

	</form>
	</tr>
	</table>
	</body>

<!--memproses input yang dimasukkan ke dalam db-->
<?php
	include('config.php');
	if (isset($_POST['hantar'])){
	//lengkapkan kod aturcara ini
	header('Location:SEMINAR INFO PAGE.html');
	}
?>
</html>
