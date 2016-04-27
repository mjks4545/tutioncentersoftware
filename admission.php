<?php
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$sql="SELECT * FROM `admission`";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
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
                   <div class="col-md-12"> 
		       <thead>
                    <tr>
		      <th>Student Name</th>
                      <th>Father Name</th>
                      <th>Contact No</th>
                      <th>Email Address</th>
		      <th>Address</th>
		      <th>Course</th>
		      <th>Amount Of Fee</th> 
		      <th>Paid Fee</th> 
		      <th colspan="2">Action</th> 
		    </tr>
					  
					  
                    </thead>
                    <tbody>
			<?php foreach ($result as $result){ ?>		
		    <tr>
		      <td><?= $result['student_name']?></td>
		      <td><?= $result['father_name']?></td>
		      <td><?= $result['contact_no']?></td>
		      <td><?= $result['email']?></td>
		      <td><?= $result['address']?></td>
		      <td>
			<?php  
			    $course = $result['course'];
			    $sql = "SELECT * FROM `course` WHERE `course_id` = '$course'";
			    $stmt = $conn->prepare($sql);
			    $stmt->execute();	
			    $result_c = $stmt->fetchAll();
			    $result_c = $result_c[0];
			    echo $result_c['course_name'];
			?>
		      </td>
		      <td><?= $result['amount']?></td>
		      <td><?= $result['paid']?></td>
		      <td><a class="btn btn-warning" href="admission_edit.php?id=<?= $result['s.no']?>" >Edit</a></td>
		      <td><a class="btn btn-danger" href="admission_delete.php?id=<?= $result['s.no']?>" >Delete</a></td>
		    </tr>		   
			<?php } ?>		

                    </tbody>
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

