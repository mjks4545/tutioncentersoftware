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
		
		
		<div class="col-md-12">
	      <img src="include/img/images1.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236"> 
          <img src="include/img/14.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      
          <img src="include/img/images1.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      	  
	     </div>
        
		
		
      <!--  <section class="content-header">  -->
			
		
		
		
	
		
          <h1><marquee>
            Characteristics 
            of Our Academy</marquee>
          </h1>
        <!--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>  -->
     <!--   </section>  -->

        <!-- Main content -->
        <section class="content">
		
		
		
          <!-- Small boxes (Stat box) -->
		  
          <div class="row" style="margin-top:-15px;">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
               <h2>Quilified staff</h2></div>
				  
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <h2>Low fee</h2></div>
				  
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h2>Transport system</h2></div>
				                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                 <h2>No admission fee</h2></div>
				  
              </div>
			  
			  
			 
			  
			  
            </div><!-- ./col -->
          </div><!-- /.row -->
		  
		   

		  
		  
		  <!-- Content Wrapper. Contains page content -->
		  
        <!-- Main content -->
 
 
                   <div class="col-md-12">
	      <img src="include/img/10.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236"> 
          <img src="include/img/11.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      
          <img src="include/img/12.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      	  
	     </div>
           <div class="col-md-12">
	      <img src="include/img/13.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236"> 
          <img src="include/img/boy.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      
          <img src="include/img/15.jpg" class="img-rounded1 col-md-4" alt="Cinque Terre" width="250" height="236">      	  
	     </div>
 
 
 
 
 
 
 
 
 
 
        </section><!-- /.content -->
		
		
	       
          		 
           
	    
      </div><!-- /.content-wrapper -->



<?php

include'include/footer.php';

?>