<?php

include 'include/header.php';
include 'include/leftsidebar.php';
include 'include/conn.php';
?>
<?php
$sql="SELECT * FROM `salary`";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  <?php //print_r($result);?>
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
                  <h3 class="box-title">Salary Table</h3>
				  <div class="col-md-12">
				  <div class="col-md-10"></div>
				  <div class="col-md-2"><td><a href="salary_insert.php" class="btn btn-success">Add New Record</a></td></div>
				  
				  </div>
				  
                </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                   <div class="col-md-12"> <thead>
                     <tr>
					 
                  <div class="col-md-1">      <th>s.no</th></div>
                       <div class="col-md-1">  <th>Teacher Name</th></div>
                       <div class="col-md-1">  <th>Salary</th></div>
					   <div class="col-md-1">  <th>Edit</th></div>
					   <div class="col-md-1">  <th>Delete</th></div>

						
                      </tr>
					  
					  
                    </thead>
					</div>
                    <tbody>
					<div class="col-md-12">
                      <?php 
					  $i = 1;
					  $salary_add=0;
					  foreach( $result as $salary ){
						  $salary_add += $salary['salary'];
						  ?>
					  
					  <tr>
                        <div class="col-md-1"><td><?=$i ?></td></div>
                        <div class="col-md-1"><td><?=$salary['name']?></td></div>
                        <div class="col-md-1"><td><?=$salary['salary']?></td></div>

					    <div class="col-md-1"><td><a href="salary_edit.php?id=<?= $salary['s.no'] ?>" class="btn btn-warning">Edit</a></td></div>
					    <div class="col-md-1"><td><a href="salary_delete.php?id=<?=$salary['s.no']?>" class="btn btn-danger">Delete</a></td></div>
                      </tr>
					  <?php $i++; } ?>
					 <tr>
					 <div class="col-md-1"><td>Total</td></div>
					
					  <div class="col-md-1"><td></td></div>
					   <div class="col-md-1"><td><?=$salary_add?></td></div>
					 
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