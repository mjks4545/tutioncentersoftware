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
        
		
		
		

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
		  
		  <!-- Content Wrapper. Contains page content -->
		  
        <!-- Main content -->
         <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Student Table</h3>
                  <div class="col-md-12">
                    <div class="col-md-10"></div>

                  <div class="col-md-2"><td><a href="student_insert.php?" class="btn btn-success">Add New Records</a></td></div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                   <div class="col-md-12"> <thead>
                     <tr>
                      <div class="col-md-1">   <th>Student id</th></div>
                       <div class="col-md-1">  <th>Student Name</th></div>
                       <div class="col-md-1">  <th>Father Name</th></div>
                        <div class="col-md-1"> <th>Contact No</th></div>
						<div class="col-md-1"> <th>Email Address</th></div>
						<div class="col-md-1"> <th>Address</th></div>
						
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
                      <div class="col-md-1">   <td><?=$student['contact_no']?></td></div>
					  <div class="col-md-1">   <td><?=$student['email_adress']?></td></div>
					  <div class="col-md-1">   <td><?=$student['address']?></td></div>
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