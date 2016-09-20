
<?php 
	include 'koneksi.php';
	
	// update semua status 0 atau 1
	if(isset($_POST['ON'])) { 
					$update = mysqli_query($kon, "UPDATE `user_alert` SET `status`=1");	
				}
	else if (isset($_POST['OFF'])) {
					$update = mysqli_query($kon, "UPDATE `user_alert` SET `status`=0");
				}
	else $update = "";
	
	
	// query pencarian berdasarkan kategori
	if(isset($_POST['cari']) ){
		$index = $_POST['cari'];
		$kategori = $_POST['kategori'];

		$que = mysqli_query($kon,"Select * from user_alert where $kategori like '%$index%' order by nama asc limit 0,1000");
	}
	else {
		$que = mysqli_query($kon,"Select * from user_alert  order by nama asc limit 0,1000");
	}

?>


	<table>
			<tr>
				<th style="outline: thin solid"><strong>MSISDN</strong></th>
				<th style="outline: thin solid"><strong>Nama</strong></th>
				<th style="outline: thin solid"><strong>Grup</strong></th>
				<th style="outline: thin solid"><strong>&nbsp Status &nbsp</strong></th>
				<th style="outline: thin solid"><strong>Email</strong></th>
				<th style="outline: thin solid"><strong>Fungsi</strong></th>
				<th colspan="2"  style="outline: thin solid"><strong>Action</strong>
					<?php if(!isset($_POST['cari'])){ ?>
					<form action="" method="post">
							<input type="submit" value="ON" name="ON"class="default-button" >
							<input type="submit" value="OFF" name="OFF" class="default-button" >
					</form>
					<?php } ?>
				</th>
			</tr>
		
			
<?php
	
	
//menampilkan pencarian
	$show=$que;
	while($ambil1=mysqli_fetch_array($show)){
?>
			<tr>
				<th><?php echo $ambil1['msisdn'];?> &nbsp&nbsp</th>
				<th align="left"><?php echo $ambil1['nama'];?></th>
				<th><?php echo $ambil1['grup'];?></th>
				<th><?php echo $ambil1['status'];?></th>
				<th align="left"><?php echo $ambil1['email'];?></th>
				<th><?php echo $ambil1['fungsi'];?></th>
				<th><a class="default-button" href="edit.php?msisdn=<?php echo $ambil1['msisdn']; ?>&nama=<?php echo $ambil1['nama']; ?>&grup=<?php echo $ambil1['grup'];?>&status=<?php echo $ambil1['status'];?>&email=<?php echo $ambil1['email'];?>&fungsi=<?php echo $ambil1['fungsi'];?> ">Update</button></th>
				<th >
				
				<form action="edited.php?msisdn=<?php echo $ambil1['msisdn']; ?>&nama=<?php echo $ambil1['nama']; ?>&grup=<?php echo $ambil1['grup'];?>&status=<?php echo $ambil1['status'];?>&email=<?php echo $ambil1['email'];?>&fungsi=<?php echo $ambil1['fungsi'];?> " method="post">
							<input type="submit" value="ON" name="ON"class="default-button" >
							<input type="submit" value="OFF" name="OFF" class="default-button" >
				</form>
				
				
			</th>
			</tr>
	<?php }	?>
	
	</table>
	
	</br>
	</br>