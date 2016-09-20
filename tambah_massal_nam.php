<!DOCTYPE html>
<?php
include'layout/identifier.php';
	// update semua status 0 atau 1
	$managemen_active_1='active';
	$managemen_active2_1='active';
?>
<html>
  <head>
      <?php include('layout/head.php') ;?>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
      <?php require'layout/header.php'  ?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<?php require'layout/sidebar.php'  ?>

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
			    <div class="box box-primary" >
                <div class="box-header">
                  <h3 class="box-title">TAMBAH BANYAK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
            	
                <form role="form" action="add_massal_nam.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    
					  <div class="form-group">
                      <label for="exampleInputPassword1">MSISDN</label>
					  <input type="file"  name="csv"  value="">
                    </div>
                   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" value="upload" name="upload" class="btn btn-primary">Submit</button>
                  </div>
                </form>
				
				<a href="TEMPLATE.csv" class="btn btn-lg" target="_blank" style="color: rgb(239, 182, 14);"><i class="fa fa-download"></i> SILAHKAN DOWNLOAD TEMPLATE</a>
                 
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
