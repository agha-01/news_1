<?php 
if ($_POST["email"]==null) {
	// echo "bele seyfe yoxdur";
	echo "<script>
				alert('bele seyfe yoxdur');
				location.replace('login');
			</script>";
}
else{
	$email=$_POST["email"];
	$pass=md5(sha1($_POST["pass"]));
	$login=Controller::$db->uSelect($email);
	if (mysqli_num_rows($login)==0) {
		// echo "Bele istifadeci yoxdur";
		echo "<script>
				alert('Bele istifadeci yoxdur');
				location.replace('login');
			</script>";
	}
	else{
		$row=mysqli_fetch_assoc($login);
		if ($row["pass"]!=$pass) {
			// echo "Parol sehvdir";
			echo "<script>
				alert('Parol sehvdir');
				location.replace('login');
			</script>";
		}
		else{
			$_SESSION["email"]=$email;
			require "home.php";
			echo ' <script>
 			location.replace("home");
 			</script>';


		}
	}
}

















 ?>