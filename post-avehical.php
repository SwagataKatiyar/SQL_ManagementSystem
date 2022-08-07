<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['save'])){
    

	$id = $_POST['id'];
	$DriverName = $_POST['DriverName'];
	$VehiclesTitle = $_POST['VehiclesTitle'];
	$VehiclesBrand = $_POST['VehiclesBrand'];
	$VehiclesOverview  = $_POST['VehiclesOverview'];
	$PricePerDay = $_POST['PricePerDay'];
	$FuelType = $_POST['FuelType'];
	$ModelYear = $_POST['ModelYear'];
	$SeatingCapacity = $_POST['SeatingCapacity'];
	$AirConditioner = $_POST['AirConditioner'];
	$PowerDoorLocks = $_POST['PowerDoorLocks'];
	$AntiLockBrakingSystem = $_POST['AntiLockBrakingSystem'];
	$BrakeAssist = $_POST['BrakeAssist'];
	$PowerSteering = $_POST['PowerSteering'];
	$DriverAirbag = $_POST['DriverAirbag'];
	$PassengerAirbag = $_POST['PassengerAirbag'];
	$PowerWindows	= $_POST['PowerWindows'];
	
	$sql = "INSERT INTO newvehicles (`id`,`DriverName`,`VehiclesTitle`,`VehiclesBrand`,`VehiclesOverview`,`PricePerDay`,`FuelType`,`ModelYear`,`SeatingCapacity`,`AirConditioner`,`PowerDoorLocks`,`AntiLockBrakingSystem`,`BrakeAssist`,`PowerSteering`,`DriverAirbag`,`PassengerAirbag`,`PowerWindows`)
   VALUES ('$id','$DriverName','$VehiclesTitle',' $VehiclesBrand','$VehiclesOverview','$PricePerDay','$FuelType','$ModelYear','$SeatingCapacity','$AirConditioner','$PowerDoorLocks','$AntiLockBrakingSystem','$BrakeAssist','$PowerSteering','$DriverAirbag','$PassengerAirbag','$PowerWindows')";
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
			
<div class="row">
<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">Add</div>
<br>

<form method="post" class="form-horizontal" style="padding:8px;" enctype="multipart/form-data">

  <div class="form-group">
  <label class="col-sm-2 control-label">Driver Name<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="DriverName" class="form-control" required>
    </div>


    <label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
    <div class="col-sm-4">
      <input type="text" name="VehiclesTitle" class="form-control" required>
    </div>

	
	</div>
											
	<div class="form-group">
		<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<textarea class="form-control" name="VehiclesOverview" rows="3" required></textarea>
		</div>
		<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
      <div class="col-sm-4">
        <select class="form-control" name="VehiclesBrand" required>
		<option value=""> Select </option>

		<option value="Maruti">Maruti</option>
	<option value="Toyota">Toyota</option>
	<option value="Nissan">Nissan</option>
	<option value="Honda">Honda</option>
	<option value="Other">Other</option>

	</select>
	</div>
		</div>

		<div class="hr-dashed"></div>

		<div class="form-group">
		<label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
		<div class="col-sm-4">
		<input type="text" name="PricePerDay" class="form-control" required>
	</div>
	<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<select class="form-control" name="FuelType" required>
	<option value=""> Select </option>

	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="CNG">CNG</option>
	</select>
	</div>
	</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="ModelYear" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="SeatingCapacity" class="form-control" required>
</div>
</div>
<div class="hr-dashed"></div>





<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
							

<div class="row" >
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body" style="padding:8px;">


<div class="form-group" >
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="AirConditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="PowerDoorLocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="AntiLockBrakingSystem" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="BrakeAssist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>



<div class="form-group">

<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="PowerSteering" value="1">
<label for="inlineCheckbox5"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="DriverAirbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="PassengerAirbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="PowerWindows" value="1">
<label for="powerwindow"> Power Windows </label>
</div>

</div>



</div>
</div>

<div class="form-group">
<div class="col-sm-8 col-sm-offset-2 text-center">
<button class="btn btn-dark" type="reset">Cancel</button>
<input class="btn btn-danger" name="save" type="submit" id="save" value="Save Changes"/>
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