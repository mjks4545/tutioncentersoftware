<?php  
ob_start();
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
 $sql = "SELECT * FROM `course`";
 $stmt = $conn->prepare($sql);
 $stmt->execute();	
 $result = $stmt->fetchAll();
?>

<?php
if( isset( $_POST['submit'] ) ){
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$contact_no=$_POST['contact_no'];
$email_adress=$_POST['email_adress'];
$address=$_POST['address'];
$amount_fee=$_POST['amount_fee'];
$paid_fee=$_POST['paid_fee'];
$annual_expense=$_POST['annual_expense'];
//echo'annual_expense';
$annual_expense1=$_POST['annual_expense1'];
//echo'$annual_expense1';
$annual_expense2=$_POST['annual_expense2'];
//echo'$annual_expense2';

$date_added=date("D-M-Y");
//data updation
$sql = "INSERT INTO `student` (`student_name`, `father_name`, `contact_no`,`email_adress`,`address`)
VALUES ('$student_name', '$father_name', '$contact_no','$email_adress','$address')";
$stmt= $conn->prepare($sql);
$stmt->execute();
$id = $conn->lastInsertId();
$sql_account = "INSERT INTO `accounts` (`account_id`,`amount_fee`, `paid_fee`,`date_added`,`date_edit`,`updateby`)
VALUES (NULL,'$amount_fee','$paid_fee','$date_added','','')";
$stmt_account= $conn->prepare($sql_account);
$stmt_account->execute();

$sql_account = "INSERT INTO `student_course_join` (`student_id`, `course_id`)
VALUES ('$id','$annual_expense')";
$stmt_account= $conn->prepare($sql_account);
$stmt_account->execute();

$sql_account = "INSERT INTO `student_course_join` (`student_id`, `course_id`)
VALUES ('$id','$annual_expense1')";
$stmt_account= $conn->prepare($sql_account);
$stmt_account->execute();

$sql_account = "INSERT INTO `student_course_join` (`student_id`, `course_id`)
VALUES ('$id','$annual_expense2')";
$stmt_account= $conn->prepare($sql_account);

$stmt_account->execute();
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
                  <h3 class="box-title">Addmission Form</h3>
				  	<!--<?php print_r($result);?>-->
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
                      <input type="text" name="email_adress" class="form-control">
                    </div></div>
                   		 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control">
                    </div></div>
					<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Course 1</label>
                         <select class="form-control" name="annual_expense">
                          <?php
                            
                               
                          
                          ?>
                         
                        <option>select course</option>
                        <?php foreach ( $result as $value ) : ?>
                            <option  value="<?=$value['course_id']?>"><?=$value['course_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Course 2</label>
                         <select class="form-control" name="annual_expense1">
                          <?php
                            
                               
                          
                          ?>
                         
                        <option>select course</option>
                        <?php foreach ( $result as $value ) : ?>
                            <option  value="<?=$value['course_id']?>"><?=$value['course_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Course 3</label>
                         <select class="form-control" name="annual_expense2">
                          <?php
                            
                               
                          
                          ?>
                         
                        <option>select course</option>
                        <?php foreach ( $result as $value ) : ?>
                            <option  value="<?=$value['course_id']?>"><?=$value['course_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Amount Of Fee</label>
                      <input type="text" name="amount_fee" class="form-control">
                    </div></div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Paid Fee</label>
                      <input type="text" name="paid_fee" class="form-control">
                    </div></div>
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
                   		<!--	<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Annual expense</label>
                      <input type="text" name="annual_expense" class="form-control">
                    </div></div>-->
                   			<!--- <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Building rent</label>
                      <input type="text" name="building_rent" class="form-control">
                    </div></div>-->
                   			<!--- <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Teacher salaries</label>
                      <input type="text" name="teacher_salaries" class="form-control">
                    </div></div>-->
                  <!-- 	<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Total profit</label>
                      <input type="text" name="total_profit" class="form-control">
                      </div>
                    </div>-->
                    </div>
        
                    </div>
					</div>
                  <!-- /.box-body -->
				  

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Add New Addmission</button>
                  </div>
                </form>
             <!-- /.box -->
			   </div>
			  </div> 
        </section><!-- /.content -->
		
		</div>
		</section>
     <!-- /.content-wrapper -->
	  



<?php include 'include/footer.php';?>


    