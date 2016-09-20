<!DOCTYPE html>
<?php
include'layout/identifier.php';
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
	$managemen_active='active';
	$index_active_1='active';
?>
<!----CREATED BY : RIZKI ADI UTOMO AND YUSUF AL MUQADDAMI----->
<html>
  <head>
      <?php include('layout/head.php') ;?>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
      <?php include('layout/header.php');  ?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<?php include('layout/sidebar.php');  ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
		  
		 
				 
        </section>

        <!-- Main content -->
        <section class="content">
		   <!-- Date dd/mm/yyyy -->
					<!------------THE END OF DATE FOR PRODUK----------->

				  
				  <!-----THE END OF THE DATE------>
          <div class="row">
			<!----------------KONTEN TABEL 1--------------------------------->
			
			<div class="col-md-8">
			<form action="" method="post">
								<?php 
										if(!isset($_POST['cari'])){?>
									<div class="row">
									<div class="col-md-4">
										<input type="text" name="cari" class="form-control" placeholder="search...." style="width:100%">
										</div>
										<div class="col-md-4 ">
										<select name="kategori" class="form-control" style="width:100%">
											<option value="nama">by name</option>
											<option value="email">by email</option>
											<option value="fungsi">by fungsi</option>
										</select>
										</div>
										
								
									
									<div class="col-md-4">
										<input type="submit" value="Cari" class="btn btn-flat btn-info" >
										
											
									</div>
									</div>
										<?php }
										else { ?>
										<input type="text" name="refresh" style="width:100%" hidden>
										<input type="submit" value="Refresh" class="btn btn-flat btn-info" >
											
										<?php } ?>
								</form>
			
			</div>
			
			<div class="col-md-12">
			     <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                 <th><strong>MSISDN</strong></th>
				<th><strong>Nama</strong></th>
				<th><strong>Grup</strong></th>
				<th><strong>Status</strong></th>
				<th><strong>Email</strong></th>
				<th><strong>Fungsi</strong></th>
				<th colspan="2">
				<div class="col-md-3">
				<strong>Action</strong>
				</div>
				<div class="col-md-9">
				<?php if(!isset($_POST['cari'])){ ?>
				<form action="" method="post">
				<input type="submit" value="ON" name="ON"class="btn  btn-sm btn-primary" >
				<input type="submit" value="OFF" name="OFF" class="btn btn-sm  btn-danger" >
				</form>
				<?php } ?>
				</div>
				</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
	
	
//menampilkan pencarian
	$show=$que;
	while($ambil1=mysqli_fetch_array($show)){
?>
                      <tr>
                        <td><?php echo $ambil1['msisdn'];?></td>
                        <td><?php echo $ambil1['nama'];?></td>
                        <td><?php echo $ambil1['grup'];?></td>
                        <td><?php echo $ambil1['status'];?></td>
                        <td><?php echo $ambil1['email'];?></td>
                        <td><?php echo $ambil1['fungsi'];?></td>
                        <td><a class="default-button" href="edit.php?msisdn=<?php echo $ambil1['msisdn']; ?>&nama=<?php echo $ambil1['nama']; ?>&grup=<?php echo $ambil1['grup'];?>&status=<?php echo $ambil1['status'];?>&email=<?php echo $ambil1['email'];?>&fungsi=<?php echo $ambil1['fungsi'];?> ">Update</a></td>
                        <td>
						<form action="edited.php?msisdn=<?php echo $ambil1['msisdn']; ?>&nama=<?php echo $ambil1['nama']; ?>&grup=<?php echo $ambil1['grup'];?>&status=<?php echo $ambil1['status'];?>&email=<?php echo $ambil1['email'];?>&fungsi=<?php echo $ambil1['fungsi'];?> " method="post">
							<input type="submit" value="ON" name="ON" class="btn btn-primary" >
							<input type="submit" value="OFF" name="OFF" class="btn btn-danger" >
						</form>
						</td>
                      </tr>
                      <?php }	?>
                    </tbody>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col-md-12 -->
           </div> 
			<!---------------THE END OF TABEL KONTEN----------------------->
			
			
				<!----------------KONTEN TABEL 2--------------------------------->
		
          
			<!---------------THE END OF TABEL KONTEN 2----------------------->
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php require'layout/footer.php' ?>
    </div><!-- ./wrapper -->

	 <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
   

  </body>
</html>
