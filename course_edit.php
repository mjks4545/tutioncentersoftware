

<?php  
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
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
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



