<?php

include 'include/header.php';
include 'include/leftsidebar.php';
include 'include/conn.php';
?>
<?php
$sql="SELECT * FROM `accounts`";

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
					 
                  <div class="col-md-1">      <th>Account Id</th></div>
                       <div class="col-md-1">  <th>Account Fee</th></div>
                       <div class="col-md-1">  <th>Paid Fee</th></div>
                        <div class="col-md-1"> <th>Dues</th></div>
						<div class="col-md-1"> <th>Date</th></div>
						<!--- <div class="col-md-1"> <th>Date Edit</th></div>
						  <div class="col-md-1"> <th>update by</th></div>--->
						
                      <!-- <div class="col-md-1">  <th>Edit</th></div>
					   <div class="col-md-1">  <th>Delete</th></div>--->
						
                      </tr>
					  
					  
                    </thead>
					</div>
                    <tbody>
					<div class="col-md-12">
                      <?php 
					  $i = 1;
					  $amount_fee = 0;
					  $paid_fee =0;
					  $dues=0;
					  foreach( $result as $accounts ){
						  $amount_fee += $accounts['amount_fee'];
						  $paid_fee+= $accounts['paid_fee'];
						  $dues+=$accounts['amount_fee'] - $accounts['paid_fee'];
						  ?>
					  <tr>
                        <div class="col-md-1"><td><?=$i ?></td></div>
                        <div class="col-md-1"><td><?=$accounts['amount_fee']?></td></div>
                        <div class="col-md-1"><td><?=$accounts['paid_fee']?></td></div>
						 <div class="col-md-1"><td><?=$accounts['amount_fee'] - $accounts['paid_fee'] ?></td></div>
                        <div class="col-md-1"><td><?=$accounts['date_added']?></td></div>
						
						
						<!--<div class="col-md-1"><td><?=$accounts['date_edit']?></td></div>
				        <div class="col-md-1"><td><?=$accounts['updateby']?></td></div>-->
					    <!--<div class="col-md-1"><td><a href="course_edit.php?id=<?= $course['course_id'] ?>" class="btn btn-warning">Edit</a></td></div>
					    <div class="col-md-1"><td><a href="course_delete.php?id=<?=$course['course_id']?>" class="btn btn-danger">Delete</a></td></div>-->
                      </tr>
					  <?php $i++; } ?>
					  <tr>
					 <div class="col-md-1"><td></td></div>
					 <div class="col-md-1"><td><?=$amount_fee?></td></div>
					  <div class="col-md-1"><td><?=$paid_fee?></td></div>
					   <div class="col-md-1"><td><?=$dues?></td></div>
					 
					 </tr>
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