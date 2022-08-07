<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['save'])){
    
	$NAME = $_POST['NAME'];
    $PHONE = $_POST['PHONE'];
    $COST = $_POST['COST'];
    $TYPEOFSERVICE = $_POST['SERVICE'];
    $LOCATION = $_POST['LOCATION'];
    $AVAILABLE = $_POST['status'];
	
	
	$sql = "INSERT INTO list (`NAME`,`PHONE`,`COST`,`SERVICE`,`LOCATION`,`status`)
   VALUES ('$NAME','$PHONE','$COST','$TYPEOFSERVICE','$LOCATION','$AVAILABLE')";
	$query = $dbh->prepare($sql);
	$query->execute();


	}

?>

<head>
	<!-- Font awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
	<?php include('includes/header.php');?>

		<?php include('includes/leftbar.php');?>
		
		<div class="content-wrapper">
			<div class="container-fluid">
			<div class="page-header">
              <h3 class="page-title">
				  
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-medical-bag menu-icon"></i>
                </span> Providers
              </h3>
             
            </div>
						<div class="panel panel-default">
							<div class="panel-heading">Add</div>
<br>

<form method="post" class="form-horizontal" style="padding:60px;" enctype="multipart/form-data">

  <div class="form-group">
  <label class="col-sm-2 control-label">NAME<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="NAME" class="form-control" required>
    </div>


    <label class="col-sm-2 control-label">PHONE<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="PHONE" class="form-control" required>
    </div>

	
	</div>
											
	<div class="form-group">
		<label class="col-sm-2 control-label">COST<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<textarea class="form-control" name="COST" rows="1" required></textarea>
		</div>

        <label class="col-sm-2 control-label">TYPE OF SERVICE<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<select class="form-control" name="SERVICE" required>
			
		<option value=""> Select </option>

		<option value="Public Hospital">Public Hospital</option>
        <option value="Private Hospital">Private Hospital</option>
        <option value="Guruswara">Gurudwara Service</option>
        <option value="Personal/Pvt Service">Personal/Pvt Service</option>
	

	</select>
		</div>

	

		</div>

		<div class="hr-dashed"></div>

		<div class="form-group">
		<label class="col-sm-2 control-label">LOCATION<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<input type="text" name="LOCATION" class="form-control" required>
	</div>
	

	


<div class="hr-dashed">



</div>





<div class="hr-dashed form-group col-md-12 col-sm-offset-2 text-center">

<br><br><br>

<button class="btn btn-dark" type="reset">Cancel</button>
<input class="btn btn-primary" name="save" type="submit" id="save" value="Save Changes"/>

</div>									
</div>
</div>
</div>
</div>






</div>

</div>




</form>


									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>
	

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<br>

	<!--Footer -->

<!-- /Footer--> 
</body>
</html>