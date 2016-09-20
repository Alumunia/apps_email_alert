 <?php

 include 'koneksi.php';

		$msisdn = $_POST['msisdn'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$fungsi = $_POST['fungsi'];
		

		$query = mysqli_query($kon,"
INSERT INTO datapostpaid.user_alert_E2A (msisdn, nama, grup, STATUS, email, fungsi)VALUES('$msisdn', '$nama', 'auto_collection','1', '$email', '$fungsi')");
			
			
			if($query)  {?>
			<script language="javascript">alert("Data telah ditambahkan");</script>
            <script> document.location.href='index_2.php#main'</script>
			<?php
            }
			else {?>
			<script language="javascript">alert("Data tidak berhasil ditambahkan, silahkan ulangi lagi");</script>
            <script> document.location.href='data_mng_nam.php#main'</script>
			<?php
            };
			
		
			//mysqli_errno();
			//header('location:add_data.php');
		
	
?>