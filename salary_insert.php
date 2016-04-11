<?php 
ob_start(); 
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';

?>

<?php

//session_start();
if( isset( $_POST['submit'] ) ){

    $name=$_POST['name'];
    $salary=$_POST['salary'];
   
	//$option_level=$_POST['option_level'];
	
	//data insertion 
    $sql = "INSERT INTO `salary` (`s.no`,`name`, `salary`) VALUES (NULL,'$name', '$salary')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	//$stmt->close();
	header("Location:salary.php");
	}
	?>


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
		
		
		

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
		  
		  
		  
		  
		  <!-- Content Wrapper. Contains page content -->
		  
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">INSERT INTO Salary</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
					
					  <div class="col-xs-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Name</label>
                      <input type="text" class="form-control" name="name"id="exampleInputemail" placeholder="Enter your name">
                    </div>
					<div class="col-md-6"></div>
					</div>
                   
                    <div class="form-group col-md-12">
					<div class="col-xs-6"><label for="exampleInputEmail1">Salary</label>
                      <input type="text" class="form-control" name="salary"id="exampleInputpassword" placeholder="Enter the  salary">
					          </div>
					            </div>
                   
					<!--<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select level</label>
                      <select class="form-control" name="option_level">
					    <option>Select level </option>
                        <option name="option_level">level 1</option>
                        <option name="option_level">level 2</option>
                        <option>level 3</option>
                        <option>level 4</option>
                        <option>level 5</option>
                      </select>
					  </div>
                    </div>--->
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Add New Record</button>
                  </div>
                </form>
             </div><!-- /.box -->
			</div>	
		</div>
		</section>
        </section><!-- /.content -->
      <!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



