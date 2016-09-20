<?php
include'layout/identifier.php';
	// update semua status 0 atau 1
	
?>
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
			<div class="col-md-12">
			     <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Update Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
<?php 
							 
include 'koneksi.php';



	$msisdn = $_GET['msisdn'];
	$name = $_GET['nama'];
	
	$status = $_GET['status'];
	$email = $_GET['email'];
	$fungsi = $_GET['fungsi'];
	
	?>
                <form role="form" action="" method="post">
                  <div class="box-body">
                    
					 <div class="form-group">
                      <label for="exampleInputPassword1">MSISDN</label>
                      <input type="text" value="<?php echo $msisdn ; ?>" name="msisdn2"   class="form-control" placeholder="MSISDN">
                    </div>
					<div class="form-group">
                    <label for="exampleInputPassword1">NAMA</label>
                    <input type="text" value="<?php echo $name ; ?>" name="nama2"   class="form-control" placeholder="MSISDN">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                   <select name="status2" id="stat">
											<?php if ($status == 1){?>
												<option value="1"> 1 </option>
												<option value="0"> 0 </option>
											<?php }
											else { ?>
												<option value="0"> 0 </option>
												<option value="1"> 1 </option>
											<?php } ?>
										</select>
				   </div>
					  <div class="form-group">
                      <label for="exampleInputPassword1">E-MAIL</label>
                      <input type="email" value="<?php echo $email; ?>" name="email2"   class="form-control" id="exampleInputPassword1" placeholder="E-MAIL">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputPassword1">FUNGSI</label>
                      <input type="text" value="<?php echo $fungsi;?>" name="fungsi2"   class="form-control" id="exampleInputPassword1" placeholder="FUNGSI">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-lg btn-success">Submit</button>
                  </div>
                </form>
				<?php 
		
//error_reporting(0);
		
		if(isset($_POST['status2'])){
	$msisdn2 = $_POST['msisdn2'];
	$name2 = $_POST['nama2'];
	
	$status2 = $_POST['status2'];
	$email2 = $_POST['email2'];
	$fungsi2 = $_POST['fungsi2'];
	
	
	  if($msisdn2 == "") {
		$ubah = mysqli_query($kon, "UPDATE `user_alert_E2A` SET  `nama`='$name2', `status`='$status2' , `email`='$email2', `fungsi`='$fungsi2' WHERE  nama='$name' && email='$email' && fungsi='$fungsi'  ");	
		
	}
	  else {
		$ubah = mysqli_query($kon, "UPDATE `user_alert_E2A` SET `msisdn`=$msisdn2 , `nama`='$name2', `status`='$status2' , `email`='$email2', `fungsi`='$fungsi2' WHERE msisdn= '$msisdn' && nama='$name' && email='$email' && fungsi='$fungsi'  ");	
		
	}?>
	
			
<script languange="javascript">alert("Update Data sukses");</script>
	<script> document.location.href='index.php';</script>
	
		<?php 
		}
	
	?>
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
