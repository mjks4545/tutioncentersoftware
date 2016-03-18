
<?php  
include 'include/conn.php';
include 'include/header.php';
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
$roll_no=$_POST['roll_no'];
//data updation
$sql= ("UPDATE `student` SET `student_name` = '$student_name', `father_name` = '$father_name', `roll_no` = '$roll_no' WHERE `student_id` = '$idget'");
    $stmt= $conn->prepare($sql);
    $stmt->execute();
  
    }
    ?>
  





 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <?php  print_r( $result ); ?>
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
                      <div class="col-md-6"><label for="exampleInputPassword1">Roll No</label>
                      <input type="text" name="roll_no" class="form-control" placeholder="enter date" value="<?=$result[0]['roll_no']?>">
                    </div>
                   
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



