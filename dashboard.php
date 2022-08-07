<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
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
		<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title">
				  
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
             
            </div>
								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
										<div class="card bg-gradient-info card-img-holder text-white">
										<img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  
											
											
												<div class="text-center">
<?php 
$sql ="SELECT id from tblusers ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$regusers=$query->rowCount();
?>
 <div class="card-body">
													<div class="stat-panel-number h1 "><?php echo htmlentities($regusers);?></div>
													<div class="stat-panel-title text-uppercase">Registered Users</div>
												</div>
											</div>
											<!-- <a href="reg-users.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a> -->
										</div>
</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-default">
										<div class="card bg-gradient-success card-img-holder text-white">
										<img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  
											
											
												<div class="text-center">
												<?php 
$sql6 ="SELECT id from tblcontactusquery ";
$query6 = $dbh -> prepare($sql);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
                                                     <div class="card-body">
													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Contact-Queries</div>
												</div>
											</div>
											<!-- <a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
</div>

									<div class="col-md-4">
										<div class="panel panel-default">
										<div class="card bg-gradient-danger card-img-holder text-white">
										<img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  
											
											 
												<div class="text-center">
												<?php 
$sql1 ="SELECT id from newvehicles";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>                                                   <div class="card-body">
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
													<div class="stat-panel-title text-uppercase">Registered Vehicles</div>
												</div>
											</div>
											<!-- <a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
</div>

									<div class="col-md-4">
										<div class="panel panel-default">
										<div class="card bg-gradient-danger card-img-holder text-white">
										<img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  
											
											
												<div class="text-center">
<?php 
$sql2 ="SELECT id from booked ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>
 <div class="card-body">
													<div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<!-- <a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
</div>
									<div class="col-md-4">
										<div class="panel panel-default">
										<div class="card bg-gradient-info card-img-holder text-white">
										<img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  
											
											
												<div class="text-center">
												<?php 
$sql5 ="SELECT id from tbltestimonial ";
$query5= $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$testimonials=$query5->rowCount();
?>
                                                     <div class="card-body">
													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials);?></div>
													<div class="stat-panel-title text-uppercase">Testimonials</div>
												</div>
											</div>
											<!-- <a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
</div>

									
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">

						
						
								
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
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
<?php } ?>