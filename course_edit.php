

<?php 
ob_start(); 
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=$_GET['id'];
$sql = ("SELECT * FROM `course` WHERE `course_id` = '$idget'");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
	
    $course_name=$_POST['course_name'];
    $course_timing=$_POST['course_timing'];
    $course_fee=$_POST['course_fee'];
    
	//data insertion 
$sql = ("UPDATE `course` SET `course_name` = '$course_name', `course_timing` = '$course_timing',`course_fee` = '$course_fee' WHERE `course_id` = '$idget';");
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location:course.php');  
}
	?>
	





 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php  
		//print_r( $result ); 
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
                  <h3 class="box-title">Edit course</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				
                    <div class="form-group col-md-12">
                     	<div class="col-md-6"> <label for="exampleInputEmail1">course name</label>
                      <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Course Name" value="<?=$result[0]['course_name']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">course timing</label>
                      <input type="text" name="course_timing" class="form-control" id="exampleInputPassword1" placeholder="enter Course Timing" value="<?=$result[0]['course_timing']?>">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">course fee</label>
                      <input type="text" name="course_fee" class="form-control" id="exampleInputPassword1" placeholder="enter Course Fee" value="<?=$result[0]['course_fee']?>">
                    </div>
					<div class="col-md-6"></div>
					</div> 
					
                    </div>
				
				</div>
				</div>
				
				<!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>






?>



