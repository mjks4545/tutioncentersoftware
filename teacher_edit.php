
<?php
ob_start();  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';

$idget=$_GET['id'];
$sql = "SELECT * FROM `teacher1` WHERE `s.no` = '$idget'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
	
    $teacher_name=$_POST['teacher_name'];
    $teacher_timing=$_POST['teacher_timing'];
	
	$teacher_salary=$_POST['teacher_salary'];
    $teacher_grad=$_POST['teacher_grad'];
    
	//data insertion 
$sql_update = "UPDATE `teacher1` SET `teacher_name` ='$teacher_name', `teacher_timing` ='$teacher_timing', `teacher_salary` ='$teacher_salary', `teacher_grad` ='$teacher_grad' WHERE  `s.no` = '$idget'";
$stmt_update = $conn->prepare($sql_update);
$stmt_update->execute();
header('Location:teacher.php');  
}
	?>
	





 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  <?php
	  //print_r($result)
	  ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

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
                  <h3 class="box-title">Teacher</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				  
                    <div class="form-group col-md-12">
                     	<div class="col-md-6"> <label for="exampleInputEmail1">teacher_name</label>
                      <input type="text" name="teacher_name" class="form-control" id="exampleInputEmail1" placeholder="Enter reciver name" value="<?=$result[0]['teacher_name']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">teacher_timing</label>
                      <input type="text" name="teacher_timing" class="form-control" id="exampleInputPassword1" placeholder="enter teacher timing" value="<?=$result[0]['teacher_timing']?>">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">teacher_salary</label>
                      <input type="text" name="teacher_salary" class="form-control" id="exampleInputPassword1" placeholder="enter teacher's salary" value="<?=$result[0]['teacher_salary']?>">
                    </div>
					<div class="col-md-6"></div>
					</div> 
					<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">teacher_grad</label>
                      <input type="text" name="teacher_grad" class="form-control" id="exampleInputPassword1" placeholder="enter teacher grad" value="<?=$result[0]['teacher_grad']?>">
                    </div>
					<div class="col-md-6"></div>
					</div>
					
					
				
				</div>
				<!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">update</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



