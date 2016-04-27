
<?php
ob_start();  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=$_GET['id'];
$sql = ("SELECT * FROM `student` WHERE `student_id` = '$idget'");
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
//data updation
$sql= "UPDATE `student` SET `student_name` = '$student_name', `father_name` = '$father_name', `contact_no` = '$contact_no',`email_adress` ='$email_adress', `address` ='$address' WHERE `student_id` = '$idget'";
    $stmt= $conn->prepare($sql);
    $stmt->execute();
  header("Location:student.php");
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
                  <h3 class="box-title">Add Fees</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
              <div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">Student Name</label>
                      <input type="text" name="student_name" class="form-control" placeholder="enter discount" value="<?=$result[0]['student_name']?>">
                      </div>
            <div class="col-md-6"></div>
           </div>
           <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Father Name</label>
                      <input type="text" name="father_name" class="form-control" placeholder="enter teacher's percentage" value="<?=$result[0]['father_name']?>">
                    </div>
          <div class="col-md-6"></div>
          </div> 
          <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Contact No</label>
                      <input type="text" name="contact_no" class="form-control" placeholder="enter date" value="<?=$result[0]['contact_no']?>">
                    </div>
                   
                    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Email Address</label>
                      <input type="text" name="email_adress" class="form-control" placeholder="enter date" value="<?=$result[0]['email_adress']?>">
                    </div>
                   
                    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control" placeholder="enter date" value="<?=$result[0]['address']?>">
                    </div>
                   
                    </div>
                    </div>
        
        
        <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Update Record</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



