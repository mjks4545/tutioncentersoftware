<?php  include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';

?>

<?php

if( isset( $_POST['submit'] ) ){

    $teacher_name=$_POST['teacher_name'];
    $teacher_timing=$_POST['teacher_timing'];
    $teacher_salari=$_POST['teacher_salari'];
	$teacher_grad=$_POST['teacher_grad'];
	
	//data insertion 
    $sql = "INSERT INTO `teacher1` ( `teacher_name`, `teacher_timing`, `teacher_salari`,`teacher_grad`) VALUES ( '$teacher_name', '$teacher_timing', '$teacher_salari','$teacher_grad')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	}
	?>


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
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
                  
                  <p>Add FEE</p>
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
                  
                  <p>course</p>
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
                  
                  <p>FEE</p>
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
                  <h3></h3>
                  <p>coming soon</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
		  
		  <!-- Content Wrapper. Contains page content -->
		  
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
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
					<div class="col-md-6"></div>
					</div>
                   
                    <div class="form-group col-md-12">
					<div class="col-xs-6"><label for="exampleInputEmail1">Teacher Grade</label>
                      <input type="text" class="form-control" name="teacher_grad"id="exampleInputEmail1" placeholder="">
					  <div class="col-md-6"></div>
					  </div></div>
					  
                   
				<!---	<div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select level</label>
                      <select class="form-control" name="option_level">
					    <option>Select level </option>
                        <option>level 1</option>
                        <option>level 2</option>
                        <option>level 3</option>
                        <option>level 4</option>
                        <option>level 5</option>
                      </select>
					  </div>
                    </div> --->
					
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
      <!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>



