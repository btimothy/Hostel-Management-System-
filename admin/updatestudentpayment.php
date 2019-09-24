<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
if($_POST['submit'])
{
$depo=$_POST['deposit'];
$payid=$_POST['pid'];
$pby=$_POST['pby'];
$seme=$_POST['sem'];
// $status=$_POST['status'];
$id=$_GET['id'];
$query="update studentpayments set deposit=?,receiptNo=?,paidBy=?,semester=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssi',$depo,$payid,$pby,$seme,$id);
$stmt->execute();
echo"<script>alert('Student Payments has been Updated successfully');</script>";
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
	<title>Update Student Payments </title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
<br>
				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Update Student Payments </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Update Student Payments </div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
												<?php	
												$id=$_GET['id'];
	$ret="select * from studentpayments where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
						<div class="hr-dashed"></div>
						<div class="form-group">
<label class="col-sm-2 control-label">Deposit:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="deposit" id="deposit" value="">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">PaymentID:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="pid" id="pid" value="" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">PaidBy</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="pby" id="pby" value="" >
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Semeste </label>
<div class="col-sm-8">
<select name="sem" id="sem" class="form-control">
<option value=""> Select Semester</option>
<option value="one">One</option>
<option value="two">Two</option>
</select>
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">payment_status</label>
<div class="col-sm-8">
<Select  name="pay" class="form-control"  required >
<option value="">select payment_status</option>
<option value="cleared">Cleared</option>
<option value="pending">Pending</option>
</Select>
</div>
</div> -->




<?php } ?>
<div class="col-sm-8 col-sm-offset-2">
													
<input class="btn btn-primary" type="submit" name="submit" value="Update student payment ">
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
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>