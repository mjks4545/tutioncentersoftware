<?php

include 'include/header.php';
include 'include/leftsidebar.php';
include 'include/conn.php';
?>
<?php
$sql="SELECT * FROM `course`";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  <?php// print_r($result);?>
        <!-- Content Header (Page header) -->
       
	   
	   

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
       <!-- /.row -->
		  
		  <!-- Content Wrapper. Contains page content -->
		  
        <!-- Main content -->
         <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Course Table</h3>
				  <div class="col-md-12">
				  <div class="col-md-10"></div>
				  <div class="col-md-2"><td><a href="course_insert.php" class="btn btn-success">Add New Record</a></td></div>
				  
				  </div>
				  
                </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                   <div class="col-md-12"> <thead>
                     <tr>
					 
                  <div class="col-md-1">      <th>Course Id</th></div>
                       <div class="col-md-1">  <th>Course Name</th></div>
                       <div class="col-md-1">  <th>Course Timing</th></div>
                        <div class="col-md-1"> <th>Course Fee</th></div>
						
                       <div class="col-md-1">  <th>Edit</th></div>
					   <div class="col-md-1">  <th>Delete</th></div>
						
                      </tr>
					  
					  
                    </thead>
					</div>
                    <tbody>
					<div class="col-md-12">
                      <?php 
					  $i = 1;
					  foreach( $result as $course ){?>
					  <tr>
                        <div class="col-md-1"><td><?=$i ?></td></div>
                        <div class="col-md-1"><td><?=$course['course_name']?></td></div>
                        <div class="col-md-1"><td><?=$course['course_timing']?></td></div>
                        <div class="col-md-1"><td><?=$course['course_fee']?></td></div>
					    <div class="col-md-1"><td><a href="course_edit.php?id=<?= $course['course_id'] ?>" class="btn btn-warning">Edit</a></td></div>
					    <div class="col-md-1"><td><a href="course_delete.php?id=<?=$course['course_id']?>" class="btn btn-danger">Delete</a></td></div>
                      </tr>
					  <?php $i++; } ?>
					 
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