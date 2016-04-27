<?php
ob_start();
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';

?>

<?php

if( isset( $_POST['submit'] ) ){

    $teacher_name=$_POST['teacher_name'];
    $teacher_timing=$_POST['teacher_timing'];
    $teacher_salary=$_POST['teacher_salary'];
	  $teacher_grad=$_POST['teacher_grad'];
	
	//data insertion 
    $sql = "INSERT INTO `teacher1` ( `s.no`,`teacher_name`, `teacher_timing`, `teacher_salary`,`teacher_grad`) VALUES ( NULL,'$teacher_name', '$teacher_timing', '$teacher_salary','$teacher_grad')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	header('Location:teacher.php');
	}
	?>


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
      
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Insert into Teacher</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
					<div class="col-md-6"><label for="exampleInputEmail1">Teacher Name</label>
                      <input type="text"name="teacher_name"class="form-control" id="exampleInputEmail1" placeholder="">
					  </div>
					  <div class="col-xs-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Teacher Timing</label>
                      <input type="text" class="form-control" name="teacher_timing"id="exampleInputPassword1" placeholder="">
                    </div>
					</div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Teacher Salary</label>
                      <input type="text" class="form-control" name="teacher_salary"id="exampleInputPassword1" placeholder="">
                    </div>
		         <div class="col-md-6"></div>  
					</div>
                   
                    <div class="form-group col-md-12">
					<div class="col-xs-6"><label for="exampleInputEmail1">Teacher Grade</label>
                      <input type="text" class="form-control" name="teacher_grad"id="exampleInputEmail1" placeholder="">
					  <div class="col-md-6"></div>  
					  </div>
					  </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
             </div><!-- /.box -->
			</div>	
		</div>
		</section>
        </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



