<?php  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=10;
$sql = ("SELECT * FROM `recieved_form` WHERE `id` = '$idget'");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
	
    $checkbox=$_POST['checkbox'];
    $email=$_POST['email'];
    $discount=$_POST['discount'];
    $teacher_percentage=$_POST['teacher_percentage'];
	$Date=$_POST['Date'];
	$select_option=$_POST['select_option'];
	$option_month=$_POST['option_month'];
	//data insertion 
$sql = ("UPDATE `recieved_form` SET `checkbox` = '$checkbox', `email` = '$email', `discount` = '$discount', `teacher_percentage` = '$teacher_percentage', `select_option` = '$select_option', `option_month` = '$option_month' WHERE `recieved_form`.`id` = '$idget';");
$stmt = $conn->prepare($sql);
$stmt->execute();
  
}
	?>
	<?php

$get = $_GET['id'];
$sql = ("UPDATE  `course` SET `course_name` = '$course_name',`course_timing` = '$course_timing',`course_fee` = '$course_fee' WHERE `id` = '$get'");
$stmt = $conn->prepare($sql);
$stmt->execute();

?>
extract


<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Date</label>
                      <input type="date" name="Date" class="form-control" id="exampleInputPassword1" placeholder="enter date" value="<?=$result[0]['Date']?>">
                    </div>
					<div class="col-md-6"></div>
					</div>
					<h3>on account of</h3>
					 <div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select</label>
                         <select class="form-control" name="select_option">
                          <?php
                            $teacher = [
                                'red' => 'red',
                                'green' => 'green',
                                'white' => 'white',
                                'blue' => 'blue'
                            ];
                          
                          ?>
                         
                        <option>select course and teacher</option>
                        <?php foreach ( $teacher as $key => $value ) : ?>
                            <option <?= ( $key == $result[0]['select_option'] ) ? 'selected="selected"' : '' ; ?> value="<?=$key?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					<h3>FOR THE MONTH OF</h3>
					 <div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select</label>
                         <select class="form-control" name="option_month" >
                          <?php
                            $month= [
                                'january' => 'january',
								'febuary' => 'febuary',
								'march' => 'march',
								'april' => 'april',
								'may' => 'may',
								'june' => 'june',
								'july' => 'july',
								'agust' => 'agust',
								'september' => 'september',
								'october' => 'october',
								'november' => 'november',
								'december' => 'december',
                                
                            ];
                          
                          ?>
                         
                        <option>select course month</option>
                        <?php foreach ( $month as $key => $value ) : ?>
                            <option <?= ( $key === $result[0]['option_month'] ) ? 'selected="selected"' : '' ; ?> value="<?=$key?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
?php  
include 'include/conn.php';
//include 'include/header.php';
//include 'include/leftsidebar.php';
$idget=10;
$sql = ("SELECT * FROM `course` WHERE `id` = '$idget'");
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php
if( isset( $_POST['submit'] ) ){
	
    $course_name=$_POST['course_name'];
    $course_timing=$_POST['course_timing'];
    $course_fee=$_POST['course_fee'];
 
	//data insertion 
$sql = ("UPDATE `course` SET `course_name` = '$course_name', `course_timing` = '$course_timing', `course_fee` = '$course_fee', WHERE `course`.`id` = '$idget';");
$stmt = $conn->prepare($sql);
$stmt->execute();
  
}
	?>
	
	
	
	<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				  
                    <div class="form-group col-md-12">
                     	<div class="col-md-6"> <label for="exampleInputEmail1">course name</label>
                      <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Enter reciver name" value="<?=$result[0]['course_name']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">course timing</label>
                      <input type="text" name="course_timing" class="form-control" id="exampleInputPassword1" placeholder="enter discount" value="<?=$result[0]['course_timing']?>">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">course fee</label>
                      <input type="text" name="course_fee" class="form-control" id="exampleInputPassword1" placeholder="enter teacher's percentage" value="<?=$result[0]['course_fee']?>">
                    </div>
					<div class="col-md-6"></div>
					</div> 
					
					
					 
				
				</div>
				<!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
        </section><!-- /.content -->
		<div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Date</label>
                      <input type="date" name="Date" class="form-control" id="exampleInputPassword1" placeholder="enter date" value="<?=$result[0]['Date']?>">
                    </div>
					<div class="col-md-6"></div>
					</div>
					<h3>on account of</h3>
					 <div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select</label>
                         <select class="form-control" name="select_option">
                          <?php
                            $teacher = [
                                'red' => 'red',
                                'green' => 'green',
                                'white' => 'white',
                                'blue' => 'blue'
                            ];
                          
                          ?>
                         
                        <option>select course and teacher</option>
                        <?php foreach ( $teacher as $key => $value ) : ?>
                            <option <?= ( $key == $result[0]['select_option'] ) ? 'selected="selected"' : '' ; ?> value="<?=$key?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					 <h3>FOR THE MONTH OF</h3>
					 <div class="form-group col-md-12">
                     <div class="col-md-6"> <label>Select</label>
                         <select class="form-control" name="option_month" >
                          <?php
                            $month= [
                                'january' => 'january',
								'febuary' => 'febuary',
								'march' => 'march',
								'april' => 'april',
								'may' => 'may',
								'june' => 'june',
								'july' => 'july',
								'agust' => 'agust',
								'september' => 'september',
								'october' => 'october',
								'november' => 'november',
								'december' => 'december',
                                
                            ];
                          
                          ?>
                         
                        <option>select course month</option>
                        <?php foreach ( $month as $key => $value ) : ?>
                            <option <?= ( $key === $result[0]['option_month'] ) ? 'selected="selected"' : '' ; ?> value="<?=$key?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>