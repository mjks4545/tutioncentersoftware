
<?php  
ob_start();
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=$_GET['id'];
$sql = ("SELECT * FROM `student_course_join` WHERE `student_course_join_id` = '$idget'");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
$sql_course = ("SELECT * FROM `course` WHERE `course_id` = '$idget'");
$stmt_course = $conn->prepare($sql_course);
$stmt_course->execute();
$result_course = $stmt_course->fetchAll();
$sql_student = ("SELECT * FROM `student` WHERE `student_id` ='$idget'");
$stmt_student = $conn->prepare($sql_student);
$stmt_student->execute();
$result_student = $stmt_student->fetchAll();
//print_r($result);
?>
<?php
if( isset( $_POST['submit'] ) ){
	
  
	$student_name=$_POST['student_name'];
    $course_name=$_POST['course_name'];
    $course_fee=$_POST['course_fee'];
    //$email_address=$_POST['email_address'];
	//$address=$_POST['address'];
    //$annual_income=$_POST['annual_income'];
	//$annual_expense=$_POST['annual_expense'];
	//$building_rent=$_POST['building_rent'];
	//$teacher_salaries=$_POST['teacher_salaries'];
	//$total_profit=$_POST['total_profit'];
	//data insertion 
$sql_update = ("UPDATE `student_course_join` SET `student_name` ='$student_name', `course_name`='$course_name', `course_fee`='$course_fee' WHERE `student_course_join_id`='$idget'");
$stmt_update = $conn->prepare($sql_update);
$stmt_update->execute();
header("Location:admission.php");
}
	?>
	





 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
		  
		  
		  
		  
          <!-- Main row -->
         <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Admission</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				  <div class="form-group">
				 
                    <!--<div class="form-group col-md-12">
                     	<div class="col-md-6"> <label>Admission No</label>
                      <input type="text" class="form-control"name="admission_id"  value="<?=$result[0]['admission_id']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>-->
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label>Student Name</label>
                      <input type="text" name="student_name" class="form-control" value="">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					 <div class="form-group col-md-12">
                      <div class="col-md-6"><label>course Name</label>
                      <input type="text" name="course_name" class="form-control"  value="<?=$result_course[0]['course_name']?>">
                    </div>
					<div class="col-md-6"></div>
					</div> 
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label>Fee Paid</label>
                      <input type="text" name="fee_paid" class="form-control" value="">
                    </div></div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label>Amount of fee</label>
                      <input type="text" name="total_fee" class="form-control" value="">
                    </div></div>
					
					
					
                    	
				
				
				</div><!-- /.box-body -->
				</div>

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>






