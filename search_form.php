<?php  
include 'include/conn.php';
include 'include/header.php';
include 'include/leftsidebar.php';
?>
 
 <?php
 if ( isset($_POST['submit'])){
	 if ($_POST['name']!= ''){
		 
	 
		 
		 
	 }
	 if(isset($_POST['from'])){
		 
		 echo $_POST['from'];
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 
	 
 };
 
 
 
 
 
 ?>
 
 
    <div class="content-wrapper">
       
    <section class="content-header">
    <h1>
    Dashboard
            <small>Control panel</small>
          </h1>
        
        </section>

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
                  <h3 class="box-title"></h3>
				  	
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group col-md-12">
              <div class="col-md-6"></div>
                    </div>
                    <div class="form-group col-md-12">
                    <div class="col-md-6">  <label for="exampleInputPassword1">Name</label>
                      <input type="text" name="name" class="form-control">
                      </div>
                   <div class="col-md-6"></div>
                   </div>
          
                     <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">FROM</label>
                      <input type="date" name="from" class="form-control">
                    </div></div>
                    	 <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">To</label>
                      <input type="date" name="to" class="form-control">
                    </div></div>
					           <div class="form-group col-md-12">
                      <div class="col-md-6"><label for="exampleInputPassword1">Today</label>
                      <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-md-6"></div>
                    </div>
                   		 
				
                    </div>
        
                    </div>
					</div>
                  <!-- /.box-body -->
				  

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Add New Addmission</button>
                  </div>
                </form>
             <!-- /.box -->
			   </div>
			  </div> 
        </section><!-- /.content -->
		
		</div>
		</section>
     <!-- /.content-wrapper -->
	  



<?php include 'include/footer.php';?>


    