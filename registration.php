<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body style="background: #e7e7e7;">

</body>
</html>
		<form method="post" enctype="multipart/form-data">

	<div class="card" style="width:30rem; margin-left:375px; margin-top: 25px">
      <h4 class="card-header" >Register</h4>
      <div class="card-body">
        <h4 class="card-title">Enter Credentials</h4>
        <form method="post">
        <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1">Name</span>
            <input type="text" class="form-control" placeholder="Name" name="n" aria-describedby="sizing-addon1">
        </div>
        </div>
        			<!-- Email -->

        <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1">Email</span>
            <input type="email" class="form-control" placeholder="Email" name="e" aria-describedby="sizing-addon1">
        </div>
        </div>

								<!--Password  -->

        <div class="form-group">
        <div class="input-group input-group-lg" style="margin-top: 20px">
            <span class="input-group-addon" id="sizing-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" name="p" aria-describedby="sizing-addon1">
        </div>
        </div>

        <!-- Mobile Number -->
        <div class="form-group">
        <div class="input-group input-group-lg" style="margin-top: 20px">
            <span class="input-group-addon" id="sizing-addon1">Mobile</span>
            <input type="number" class="form-control" placeholder="Mobile" name="mob" aria-describedby="sizing-addon1">
        </div>
        </div>


        <!-- Radio Button -->
        <div class="btn-group" data-toggle="buttons" style="margin-top: 0px">
  			<label class="btn btn-primary active">
   			 <input type="radio" name="gen" value="m" autocomplete="off" checked> Male
  			</label>
  			<label class="btn btn-primary">
  			  <input type="radio" name="gen" value="f" autocomplete="off"> Female
  			</label>
 			 
		</div>


		<div class="btn-group" data-toggle="buttons" style="margin-bottom: 0px">
  			<label class="btn btn-primary active">
   			 <input type="checkbox" value="singing" checked autocomplete="off" name="hob[]"> Reading
  			</label>
  			<label class="btn btn-primary">
   			<input type="checkbox" value="singing" autocomplete="off" name="hob[]"> Singing
 		 	</label>
  			<label class="btn btn-primary">
   			 <input type="checkbox" value="playing" autocomplete="off" name="hob[]"> Playing
 		 	</label>
		</div>

		<input class="form-control" style="margin-top: 20px" type="file" name="img" required/>


		<tr>
					<td >Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>

        <div class="form-group" style="margin-top: 20px">
            <button type="submit" name="save" value="save" class="btn btn-primary" >Sign Up</button>
        </div>
        <div class="form-group">
            <label>
                <?php echo @$err;?>
            </label>
        </div>
        </form>
      </div>
    </div>

















									<!-- End here -->
			<!--table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your hobbies</td>
					<Td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singin" type="checkbox" name="hob[]"/>
					
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table-->
		</form>
	</body>
</html>