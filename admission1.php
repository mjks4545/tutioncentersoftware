<?php
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$sql=("SELECT * FROM `student_course_join`");
$stmt=$conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
$i = 1;
foreach( $result as $query ){
	
	//print_r($query);
	//if ( $query['course_id'] == 0 || $query['student_id'] ) {
		//$result_e = null;
	//else
		$course_id    = $query['course_id'];
		$student_id   = $query['student_id'];
		$result_e[$i]['join_id'] = $query['student_course_join_id'];
	
		$course_sql    = $conn->prepare( "SELECT * FROM `course` where `course_id`   = $course_id" );
		$course_sql->execute();
		$result_e[$i]['course'] = $course_sql->fetchAll();
		
		$student_sql  = $conn->prepare( "SELECT * FROM `student` where `student_id` = $student_id" ); 
		$student_sql->execute();
		$result_e[$i]['student'] = $student_sql->fetchAll();	
	

	$i++;
}
?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        
		
		
		
	<!--<?php
	   echo '<pre>';
	   //print_r($result_e);
	   echo '</pre>';
	     ?>
		<pre>
        <?php 
       //print_r($result); 
         ?>
		</pre>-->
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
                  <h3 class="box-title">Admission Table</h3>
                  <div class="col-md-12">
                  	<div class="col-md-10"></div>
                    <div class="col-md-2">
                    <td><a href="admission_insert.php?" class="btn btn-success">New Admission</a></td>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                   <div class="col-md-12"> <thead>
                     <tr>
					 <div class="col-md-1"><th>s.no</th></div>
                      <div class="col-md-1"><th>Student Name</th></div>
                      <div class="col-md-1"><th>course name</th></div>
                      <div class="col-md-1"><th>Fee paid</th></div>
					  <div class="col-md-1"><th>Amount of Fee</th></div>
				      <div class="col-md-1"><th>Edit</th></div>
					  <div class="col-md-1"><th>Delete</th></div> 
					   </tr>
					  
					  
                    </thead>
					</div>
                    <tbody>
					<div class="col-md-12">
                    <?php
					$i=1;
					$paid1=0;
					$total_fee1=0;
					{	
					foreach ($result_e as $admission){
						//$paid1+=$admission['fee_paid'];
						//$total_fee1+=$admission['course'][0]['course_fee'];  
						?>
                             <tr>
							 
							<!--<pre>
                          <?php  
                              print_r($result); 
                               ?>
		                    </pre>-->
                           
                       
                      <div class="col-md-1">   <td><?=$i ?></td></div>
                     
                     
					            
                      <div class="col-md-1"><td><?=( isset( $admission['student'][0]['student_name'] ) ) ? $admission['student'][0]['student_name'] : '' ; ?></td></div>
					  <div class="col-md-1"><td><?=( isset( $admission['course'][0]['course_name'] ) ) ? $admission['course'][0]['course_name'] : '' ; ?></td></div>
                      
					  <div class="col-md-1"><td><?=( isset( $admission['course'][0]['course_fee'] ) ) ? $admission['course'][0]['course_fee'] : '' ; ?></td></div>
					  	<div class="col-md-1"><td><?=( isset( $admission['course'][0]['course_fee'] ) ) ? $admission['course'][0]['course_fee'] : '' ; ?></td></div>
					   
					
                      <div class="col-md-1"><td><a href="admission_edit.php?id=<?=$admission['join_id']?>"class="btn btn-warning">Edit</a></td></div>
  					  <div class="col-md-1"><td><a href="admission_delete.php?id=<?=$admission['join_id']?>"class="btn btn-danger">Delete</a></td></div>
 				       </tr>
                       <?php 
					   
					   $i++;}
					
					} 	
  
					   ?>
					<!--   <tr>
					       <td></td>
					        <td></td>
							<td></td>
							<td><?=$paid1?></td>
							<td><?=$total_fee1?></td
					   </tr>  -->
					   
                     </div>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
       </div> <!-- /.content -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<?php include'include/footer.php';?>

