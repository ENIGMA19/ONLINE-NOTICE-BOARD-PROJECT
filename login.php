<?php 
include('connection.php');
session_start();
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>

	<!-- <h2>Login Form</h2> -->
	<form method="post">



	<div class="card" style="width:30rem; margin-left:375px; margin-top: 100px">
      <h4 class="card-header" >Sign In</h4>
      <div class="card-body">
        <h4 class="card-title">Enter Credentials</h4>
        <form method="post">
        <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1">@</span>
            <input type="email" class="form-control" placeholder="Email" name="e" aria-describedby="sizing-addon1">
        </div>
        </div>
        <div class="form-group">
        <div class="input-group input-group-lg" style="margin-top: 20px">
            <span class="input-group-addon" id="sizing-addon1">#</span>
            <input type="password" class="form-control" placeholder="Password" name="p" aria-describedby="sizing-addon1">
        </div>
        </div>
        <div class="form-group">
            <button type="submit" name="save" value="Login" class="btn btn-primary" >Sign In</button>
        </div>
        <div class="form-group">
            <label>
                <?php echo @$err;?>
            </label>
        </div>
        </form>
      </div>
    </div>
	
	<!--div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter YOur Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter YOur Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		
		</div>
	</div-->
	</form>	

</body>
</html>
