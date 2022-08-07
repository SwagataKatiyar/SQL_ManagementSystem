<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status="0";
$sql = "UPDATE list SET status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Successfully Active";
}


if(isset($_REQUEST['aeid']))
	{
$aeid=intval($_GET['aeid']);
$status=1;

$sql = "UPDATE list SET status=:status WHERE  id=:aeid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
$query -> execute();

$msg="Successfully Inactive";
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
		
		
<div class="main-panel">
          <div class="content-wrapper">
	

		  <div class="page-header">
              <h3 class="page-title">
				  
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-car menu-icon"></i>
                </span> Manage Bookings
              </h3>
             
            </div>

			<div class="col-lg-12 grid-margin stretch-card">
				
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bookings</h4>

					
					<table  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    					
					<thead>
								
									<thead>
										<tr>
										<th>#</th>
												<th>ID</th>
											<th>NAME</th>
											<th>PHONE</th>
										<th>COST</th>
										<th>SERVICE</th>
										<th>LOCATION</th>
										<th>AVAILABLE</th>
										
										
										</tr>
									</thead>
									<tfoot>
                                    <tr>
										<th>#</th>
												<th>ID</th>
											<th>NAME</th>
											<th>PHONE</th>
										<th>COST</th>
										<th>SERVICE</th>
										<th>LOCATION</th>
										<th>AVAILABLE</th>
										
										
										</tr>
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT * from  list";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->id);?></td>
											<td><?php echo htmlentities($result->NAME);?></td>
											<td><?php echo htmlentities($result->PHONE);?></td>
	
											<td><?php echo htmlentities($result->COST);?></td>
											<td><?php echo htmlentities($result->SERVICE);?></td>
											<td><?php echo htmlentities($result->LOCATION);?></td>
										<td><?php if($result->status=="" || $result->status==0)
{
	?><a href="reg-serviceproviders.php?aeid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Active')">NO</a>
<?php } else {?>

<a href="reg-serviceproviders.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Inactive')">YES</a>
</td>
<?php } ?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

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
</body>
</html>
<?php } ?>
