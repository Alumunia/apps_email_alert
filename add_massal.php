<?php /* insert banyak data dari file csv -->

LOAD DATA INFILE 'C:/xampp/htdocs/user_alert/coba.csv' INTO TABLE user_alert 
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n' 
*/

include 'koneksi.php';



if(isset($_POST["upload"])) {
	
	if( isset($_FILES["csv"])){
		if($_FILES["csv"]["error"] > 0){
			echo "return code : " . $_FILES["csv"]["error"]. "</br>";
		}
		else {
			$file = $_FILES["csv"]["tmp_name"];
			$ext = strtolower(end(explode('.', $_FILES['csv']['name'])));	
		}
		if($ext === 'csv'){
			$csv = fopen($file, "r");
			$nilai = array();
			
			while(($ambil = fgetcsv($csv,1000,',')) !== FALSE){
				$nilai[1] = $ambil[0];		// msisdn
				$nilai[2] = $ambil[1];		//nama
				$nilai[3] = $ambil[2];		//email
				$nilai[4] = $ambil[3];		//fungsi

				$query = mysqli_query($kon,"INSERT INTO datapostpaid.user_alert (msisdn, nama, grup, STATUS, email, fungsi)VALUES('$nilai[1]', '$nilai[2]', 'auto_collection','1', '$nilai[3]', '$nilai[4]')");
			}
			// notif data berhasil dimasukkan
			?>
			<script language="javascript">alert("Semua data telah ditambahkan");</script>
            <script> document.location.href='index.php#main'</script>
			<?php
		}
	}
	else echo "file tidak masuk";
}
else echo "data tidak masuk";




?>