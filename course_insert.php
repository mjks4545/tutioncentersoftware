<?php
ob_start();  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';

?>

<?php
//ob_start();
//session_start();
if( isset( $_POST['submit'] ) ){

    $course_name=$_POST['course_name'];
    $course_timing=$_POST['course_timing'];
    $course_fee=$_POST['course_fee'];
	//$option_level=$_POST['option_level'];
	
	//data insertion 
    $sql = "INSERT INTO `course` (`course_name`, `course_timing`, `course_fee`) VALUES ('$course_name', '$course_timing', '$course_fee')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
  header('Location:course.php');
	//$stmt->close();
	//header(location:index.php);
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
                  <h3 class="box-title">INSERT INTO COURSE</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
					<div class="col-md-6"><label for="exampleInputEmail1">Course Name</label>
                      <input type="text"name="course_name"class="form-control" id="exampleInputEmail1" placeholder="Enter Course name">
					  </div>
					  <div class="col-xs-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">course Timing</label>
                      <input type="text" class="form-control" name="course_timing"id="exampleInputPassword1" placeholder="Enter course timing">
                    </div>
					<div class="col-md-6"></div>
					</div>
                   
                    <div class="form-group col-md-12">
					<div class="col-xs-6"><label for="exampleInputEmail1">Course FEE</label>
                      <input type="text" class="form-control" name="course_fee"id="exampleInputEmail1" placeholder="Enter course fee">
					  <div class="col-md-6"></div>
					  </div></div>
					  
                   
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



