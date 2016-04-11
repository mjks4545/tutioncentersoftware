
<?php
ob_start();  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
// $sql = ("SELECT * FROM `student`");
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$contact_no=$_POST['contact_no'];
$email_address=$_POST['email_address'];
$address=$_POST['address'];
//data updation
$sql = "INSERT INTO `student` (`student_name`, `father_name`, `contact_no`,`email_adress`,`address`)
VALUES ('$student_name', '$father_name', '$contact_no','$email_address','$address')";
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
                  <h3 class="box-title">Add student</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
              <div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">Student Name</label>
                      <input type="text" name="student_name" class="form-control" placeholder="enter your name">
                      </div>
            <div class="col-md-6"></div>
           </div>
           <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Father Name</label>
                      <input type="text" name="father_name" class="form-control" placeholder="enter your father name">
                    </div>
          <div class="col-md-6"></div>
          </div> 
          <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">contact No</label>
                      <input type="text" name="contact_no" class="form-control" placeholder="enter your roll no" >
                    </div>
                   
                    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Email Address</label>
                      <input type="text" name="email_address" class="form-control" placeholder="enter your roll no" >
                    </div>
                   
                    </div>
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control" placeholder="enter your roll no" >
                    </div>
                   
                    </div>
                    </div>
        
        
        <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Insert New Record</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



