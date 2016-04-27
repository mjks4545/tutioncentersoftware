<?php  
ob_start();
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
if( isset( $_POST['submit'] ) ){
$id=$_POST['id'];
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

$sql = "UPDATE `admission` SET `student_name` = '$student_name', `father_name` = '$father_name', `contact_no` = '$contact_no', `email` = '$email_adress', `address` = '$address', `course` = '$annual_expense', `amount` = '$amount_fee', `paid` = '$paid_fee' WHERE `admission`.`s.no` = '$id'";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("Location:admission.php");
}

$id = $_GET['id'];
 $sql = "SELECT * FROM `admission` WHERE `s.no` = $id";
 $stmt = $conn->prepare($sql);
 $stmt->execute();	
 $result = $stmt->fetchAll();
 $result = $result[0];
 $sql = "SELECT * FROM `course`";
 $stmt = $conn->prepare($sql);
 $stmt->execute();	
 $result_c = $stmt->fetchAll();
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
			<input type="text" name="student_name" class="form-control" value="<?= $result['student_name'] ?>">
			<input type="text" name="id" class="form-control" value="<?= $id?>">
                      </div>
                   <div class="col-md-6"></div>
                   </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Father Name</label>
                      <input type="text" name="father_name" class="form-control" value="<?= $result['father_name'] ?>">
                    </div>
                    <div class="col-md-6"></div>
                    </div> 
                     <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Contact No</label>
                      <input type="text" name="contact_no" class="form-control" value="<?= $result['contact_no'] ?>">
                    </div></div>
                    	 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Email Address</label>
                      <input type="text" name="email_adress" class="form-control" value="<?= $result['email'] ?>">
                    </div></div>
                   		 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control" value="<?= $result['address'] ?>">
                    </div></div>
					<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select Course 1</label>
                         <select class="form-control" name="annual_expense">
                         
                        <option>select course</option>
                        <?php foreach ( $result_c as $value ) : ?>
                            <option  <?= ($value['course_id'] == $result['course'] ) ? 'selected="selected"' : '' ;?> value="<?=$value['course_id']?>"><?=$value['course_name']?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>

		    <div class="form-group col-md-12">
		    <div class="col-md-6"><label for="exampleInputPassword1">Amount Of Fee</label>
                      <input type="text" name="amount_fee" class="form-control" value="<?= $result['amount'] ?>">
		    </div>
		    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Paid Fee</label>
                      <input type="text" name="paid_fee" class="form-control" value="<?= $result['paid'] ?>">
                    </div></div>
				
                    </div>
        
                    </div>
					</div>
                  <!-- /.box-body -->
				  

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">update Addmission</button>
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


    