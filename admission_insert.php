<?php  
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
$no_of_student=$_POST['no_of_student'];
$class_schedule=$_POST['class_schedule'];
$monthly_income=$_POST['monthly_income'];
$monthly_expense=$_POST['monthly_expense'];
$annual_income=$_POST['annual_income'];
$annual_expense=$_POST['annual_expense'];
$building_rent=$_POST['building_rent'];
$teacher_salaries=$_POST['teacher_salaries'];
$total_profit=$_POST['total_profit'];
//data updation
$sql = "INSERT INTO `admission` (`no_of_student`, `class_schedule`, `monthly_income`,`monthly_expense`,`annual_income`,`annual_expense`,`building_rent`,`teacher_salaries`,`total_profit`)
VALUES ('$no_of_student', '$class_schedule', '$monthly_income','$monthly_expense','$annual_income','$annual_expense','$building_rent','$teacher_salaries','$total_profit')";
$stmt= $conn->prepare($sql);
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
                    <div class="col-md-6">  <label for="exampleInputPassword1">No of student</label>
                      <input type="text" name="no_of_student" class="form-control">
                      </div>
            <div class="col-md-6"></div>
           </div>
           <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Class schedule</label>
                      <input type="text" name="class_schedule" class="form-control">
                    </div>
          <div class="col-md-6"></div>
          </div> 
          <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Monthly income</label>
                      <input type="text" name="monthly_income" class="form-control">
                    </div></div>
                    	 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Monthly expense</label>
                      <input type="text" name="monthly_expense" class="form-control">
                    </div></div>
                   		 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Annual income</label>
                      <input type="text" name="annual_income" class="form-control">
                    </div></div>
                   			 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Annual expense</label>
                      <input type="text" name="annual_expense" class="form-control">
                    </div></div>
                   			 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Building rent</label>
                      <input type="text" name="building_rent" class="form-control">
                    </div></div>
                   			 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Teacher salaries</label>
                      <input type="text" name="teacher_salaries" class="form-control">
                    </div></div>
                   	<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Total profit</label>
                      <input type="text" name="total_profit" class="form-control">
                      </div>
                    </div>
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
	  



<?php include 'include/footer.php';?>


    