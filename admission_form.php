<?php 
ob_start(); 
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
 $sql = ("SELECT * FROM `course`");
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $result = $stmt->fetchAll();
?>

<?php
if( isset( $_POST['submit'] ) ){

$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$contact_no=$_POST['contact_no'];
$email_address=$_POST['email_address'];
$address=$_POST['address'];


//data updation
$sql_insert = "INSERT INTO `student` (`student_id`, `student_name`, `father_name`, `contact_no`, `email_address`, `address`) VALUES (NULL, '$student_name', '$father_name', '$contact_no', '$email_address', '$address')";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->execute();
$id = $conn->lastInsertId();

$id1 = $_POST['annual_expense'];

  $sql = "INSERT INTO `student_course_join` (`student_course_join_id`, `student_id`, `course_id`) VALUES (NULL, '$id', '$id1');";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
 
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
                  <h3 class="box-title">Addmission Form</h3>
		           </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
                     <div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6">  <label for="exampleInputPassword1">Student Name</label>
                       <input type="text" name="student_name" class="form-control">
                       </div>
                      <div class="col-md-6"></div>
                   </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Father Name</label>
                      <input type="text" name="father_name" class="form-control">
                    </div>
                    <div class="col-md-6"></div>
                    </div> 
                     <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Contact No</label>
                      <input type="text" name="contact_no" class="form-control">
                    </div></div>
                    	 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Email Address</label>
                      <input type="text" name="email_address" class="form-control">
                    </div></div>
                   		 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control">
                    </div></div>
					<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Course</label>
                         <select class="form-control" name="annual_expense">
                          
                         
                        <option>select course</option>
                        <?php foreach ( $result as $value ) : ?>
                            <option  value="<?=$value['course_id']?>"><?=$value['course_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					
					
				<!---	<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Teacher</label>
                         <select class="form-control" name="building_rent">
                         
                         
                        <option>select Teacher</option>
                        <?php foreach ( $teacher1 as $value ) : ?>
                          <option  value="<?=$value['s.no']?>"><?=$value['teacher_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>-->
                   	
                    </div>
        
                    </div>
					</div>
                  <!-- /.box-body -->
				  

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Insert New Record</button>
                  </div>
                </form>
             <!-- /.box -->
			   </div>
			  </div> 
        </section><!-- /.content -->
		
		</div>
		</section>
     <!-- /.content-wrapper -->
	  



<?php
 include 'include/footer.php';
?>


   