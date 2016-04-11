

<?php
ob_start();  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=$_GET['id'];
$sql = ("SELECT * FROM `salary` WHERE `s.no` = '$idget'");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
	
    $name=$_POST['name'];
    $salary=$_POST['salary'];
   

    
	//data insertion 
$sql = ("UPDATE `salary` SET `name` = '$name', `salary` = '$salary' WHERE `s.no` = '$idget';");
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location:salary.php');  
}
	?>
	





 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php  
		//print_r( $result ); 
		?>
        <!-- Content Header (Page header) -->
        
		
		
		

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
		  
		  
		  
          <!-- Main row -->
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit fee</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				
                    <div class="form-group col-md-12">
                     	<div class="col-md-6"> <label for="exampleInputEmail1">name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="<?=$result[0]['name']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">total fee</label>
                      <input type="text" name="salary" class="form-control" id="exampleInputPassword1" placeholder="enter total fee" value="<?=$result[0]['salary']?>">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					<!-- <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">received fee</label>
                      <input type="text" name="received" class="form-control" id="exampleInputPassword1" placeholder="enter received fee" value="<?=$result[0]['received']?>">
                    </div>
					<div class="col-md-6"></div>
					</div>--->
                   <!-- <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">remaining fee</label>
                      <input type="text" name="remaining_fee" class="form-control" id="exampleInputPassword1" placeholder="enter remaining fee" value="<?=$result[0]['remaining_fee']?>">
                    </div>
					<div class="col-md-6"></div>
					</div>	-->				
					
                    </div>
				
				</div>
				</div>
				
				<!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
<?php include 'include/footer.php';?>






?>



