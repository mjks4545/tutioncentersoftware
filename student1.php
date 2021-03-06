<?php
// Editing Student table in tution centre
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$sql = ("SELECT * FROM `student`");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       <!--  <?php print_r($result)?> -->
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
                  <p></p>
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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Table</h3>
                  <div class="col-md-12">
                    <div class="col-md-10"></div>

                  <div class="col-md-2"><td><a href="student_insert.php?" class="btn btn-success">Add New Records</a></td></div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                   <div class="col-md-12"> <thead>
                     <tr>
                      <div class="col-md-1">   <th>Student ID</th></div>
                       <div class="col-md-1">  <th>Student Name</th></div>
                       <div class="col-md-1">  <th>Father Name</th></div>
                        <div class="col-md-1"> <th>Course Fee</th></div>
						            <div class="col-md-1" > <th>Edit</div>
                        <div class="col-md-1">  <th>Delete</th></div>

                      </tr>
					  
                    </thead>
					         </div>
                    <tbody>
					       <div class="col-md-12">
                  <?php 
                  $i=1;
                  foreach ($result as $student) {?>
                  <tr>
                      <div class="col-md-1">   <td><?=$i ?></td></div>
                      <div class="col-md-1">   <td><?=$student['student_name']?></td></div>
                      <div class="col-md-1">  <td><?=$student['father_name']?></td></div>
                      <div class="col-md-1">   <td><?=$student['roll_no']?></td></div>
                      <div class="col-md-1">   <td><a href="student_edit.php?id=<?=$student['student_id']?>" class="btn btn-warning">Edit</a></td></div>
                      <div class="col-md-1">   <td><a href="student_delete.php?id=<?=$student['student_id']?>" class="btn btn-danger">Delete</a></td></div>
                      </tr>
                <?php $i++; } ?>
                      
					 <!-- <div class="col-md-12">
                      <tr>
                       <div class="col-md-1"><td></td></div>
                       <div class="col-md-1"><td></td></div>
                       <div class="col-md-1"><td></td></div>
                       <div class="col-md-1"><td></td></div>
                       <div class="col-md-1"><td></td></div>
					   <div class="col-md-1"><td></td></div> -->
                       
                      </tr>
                     </div>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



<?php

include'include/footer.php';

?>