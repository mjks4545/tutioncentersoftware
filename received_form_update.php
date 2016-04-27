
<?php  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
$idget=2;
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
	





 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php  print_r( $result ); ?>
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
				  <div class="form-group">
				  <label for="textfield">TRF</label>
                                  <input type="checkbox" name="checkbox" value="something">
				  <label for="textfield">BANGASH</label>
				  <input type="checkbox" name="anothercheckbox" value="asdfasdf">
				  </div>
                    <div class="form-group col-md-12">
                     	<div class="col-md-6"> <label for="exampleInputEmail1">Recived Free From</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter reciver name" value="<?=$result[0]['email']?>">
					  </div>
					  	<div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">Discount</label>
                      <input type="text" name="discount" class="form-control" id="exampleInputPassword1" placeholder="enter discount" value="<?=$result[0]['discount']?>">
                      </div>
					  <div class="col-md-6"></div>
				   </div>
					 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Teacher's percentage</label>
                      <input type="text" name="teacher_percentage" class="form-control" id="exampleInputPassword1" placeholder="enter teacher's percentage" value="<?=$result[0]['teacher_percentage']?>">
                    </div>
					<div class="col-md-6"></div>
					</div> 
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
                            $somename = [
                                'biology_sir_Rizwan_6000' => 'red',
                                'English_sir_Waqas_6000' => 'green',
                                'urdu_sir_Gulzar_6000' => 'white',
                                'maths_sir_Bilal_6000' => 'gasd'
                            ];
                          
                          ?>
                         
                        <option>select course and teacher</option>
                        <?php foreach ( $somename as $key => $value ) : ?>
                            <?php echo $key . '  dd ' . $result[0]['select_option']; ?>
                            <option <?= ( $key === $result[0]['select_option'] ) ? 'selected="selected"' : '' ; ?> value="<?=$key?>"><?=$value?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
					 <h3>For the Month Of</h3>
                    <div class="form-group col-md-12">
                    <div class="col-md-6"> <label>Select</label>
                    <select class="form-control" name="option_month" value="<?=$result[0]['option_month']?>">
                        <option>Select Month</option>
                        <option>------------</option>
                        <option>january</option>
                        <option>febuary</option>
                        <option>march</option>
                        <option>april</option>
                        <option>may</option>
                        <option>june</option>
                        <option>july</option>
                        <option>august</option>
                        <option>september</option>
                        <option>october</option>
                        <option>november</option>
                        <option>december</option>		
                    </select>
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



