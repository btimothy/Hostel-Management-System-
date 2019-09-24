<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$gender=$_POST['gender'];
$nationalid=$_POST['rmno'];
$epmid=$_POST['epmid'];
$emnames=$_POST['emname'];
$degn=$_POST['design'];
$phone=$_POST['phone'];
$fees=$_POST['fee'];
$payment=$_POST['pay'];

$sql="SELECT nationalID FROM workers where nationalID=?";
$stmt1 = $mysqli->prepare($sql);
$stmt1->bind_param('s',$nationalid);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert(' Employee already exist');</script>";
}
else
{
$query="insert into  workers (gender,nationalID,employeeID,names,designation,phone,salaryPerMonthy,payment_status) values(?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssss',$gender,$nationalid,$epmid,$emnames,$degn,$phone,$fees,$payment);
$stmt->execute();
echo"<script>alert('New Employee has been added successfully');</script>";
}
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
	<title>add new employee</title>
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
				<BR>

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add employee </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Employee</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))?>
<form method="post" class="form-horizontal">
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">EmployeeID:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="epmid" id="epmid" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">NationalID:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="rmno" id="rmno" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">FullName:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="emname" id="emname" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Designation:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="design" id="design" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Phone:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="phone" id="phone" value="" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender:  </label>
<div class="col-sm-8">
<Select  name="gender" class="form-control"  required >
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</Select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Salary (Per Monthy):</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="fee" id="fee" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">payment_status:</label>
<div class="col-sm-8">
<Select  name="pay" class="form-control"  required >
<option value="">select payment_status</option>
<option value="Paid">paid</option>
<option value="unpaid">unpaid</option>
</Select>
</div>
</div>

<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit" value="Add Employee ">
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