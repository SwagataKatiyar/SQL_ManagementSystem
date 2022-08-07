<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from booked  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

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
										<tr>
										<th>#</th>
										<th>ID</th>
											<th>NAME</th>
											<th>EMAIL</th>
										<th>ADDRESS</th>
										<th>DATE</th>
									
									
										
										</tr>
									</thead>
									<tfoot>
									<tr>
									<th>#</th>
										<th>ID</th>
											<th>NAME</th>
											<th>EMAIL</th>
										<th>ADDRESS</th>
										<th>DATE</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT * from  booked";
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
		<td><?php echo htmlentities($result->ID);?></td>
		<td><?php echo htmlentities($result->NAME);?></td>
		<td><?php echo htmlentities($result->EMAIL);?></td>
		<td><?php echo htmlentities($result->ADDRESS);?></td>
		<td><?php echo htmlentities($result->Date);?></td>											
		

	</tr>
	<?php $cnt=$cnt+1; }} ?>
	
</tbody>
                       
                    </table>
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
