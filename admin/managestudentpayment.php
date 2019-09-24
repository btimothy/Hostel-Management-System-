<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from studentpayments where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Are You Sure want to Deleted Data');</script>" ;
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Manage Student Payment</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage Student Payment</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Student Payment Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="50%">
									<thead>
										<tr>
											<th>S/No.</th>
											<th>FirstName</th>
											<th>MiddleName</th>
											<th>LastName</th>
											<th>RoomNo</th>
											<th>Level</th>
											<th>BedNo</th>
											<th>FeesPS</th>
											<th>Deposit</th>
											<th>RecieptNo</th>
											<th>PaidBy</th>
											<th>PaymentDate</th>
											<th>Semester</th>
											<th>RegNo</th>
											<th>Contact</th>
											<th>Payment_Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>S/No.</th>
											<th>FirstName</th>
											<th>MiddelName</th>
											<th>LastName</th>
											<th>RoomNo</th>
											<th>Level</th>
											<th>BedNo</th>
											<th>FeesPS</th>
											<th>Deposit</th>
											<th>RecieptNo</th>
											<th>PaidBy</th>
											<th>PaymentDate</th>
											<th>Semester</th>
											<th>RegNo</th>
											<th>Contact</th>
											<th>Payment_Status</th>
											<th>Action</th>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from studentpayments";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->firstName;?></td>
<td><?php echo $row->middleName;?></td>
<td><?php echo $row->lastName;?></td>
<td><?php echo $row->roomno;?></td>
<td><?php echo $row->level;?></td>
<td><?php echo $row->seater;?></td>
<td><?php echo $row->feespm;?></td>
<td><?php echo $row->deposit;?></td>
<td><?php echo $row->receiptNo?></td>
<td><?php echo $row->paidBy;?></td>
<td><?php echo $row->postingDate;?></td>
<td><?php echo $row->semester?></td>
<td><?php echo $row->regno;?></td>
<td><?php echo $row->contactno?></td>
<td >
<span  class="btn btn-info btn-lg" style="padding-top: 5px;padding-bottom: 4px; font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->status?></span></td>
<td>
<a href="updatestudentpayment.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; 
<a href="managestudentpayment.php?del=<?php echo $row->id;?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-trash"></i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
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

