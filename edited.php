<?php 
include 'koneksi.php';
$msisdn = $_GET['msisdn'];
	$name = $_GET['nama'];
	
	$status = $_GET['status'];
	$email = $_GET['email'];
	$fungsi = $_GET['fungsi'];
	
	// update semua status 0 atau 1
	if(isset($_POST['ON'])) { 
					$update = mysqli_query($kon, "UPDATE `user_alert` SET `status`=1 WHERE msisdn= '$msisdn' && nama='$name' && email='$email' && fungsi='$fungsi'");	
				}
	else if (isset($_POST['OFF'])) {
					$update = mysqli_query($kon, "UPDATE `user_alert` SET `status`=0 WHERE msisdn= '$msisdn' && nama='$name' && email='$email' && fungsi='$fungsi'");
				}
	else $update = "";
	

	
/*	echo $msisdn;
	echo $name;
	echo $email;
	echo $fungsi;
	*/
	header('location:index.php');
	
	?>