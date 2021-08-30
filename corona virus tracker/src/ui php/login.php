<?php include "includes/header.php";?>
<?php include "includes/config.php";?>

<?php 
if(isset($_POST['submit'])){
	$state = $_POST["state"];
	$password = $_POST["password"];
	
	$query= "SELECT state, password from user where state ='$state' and password ='$password'";
	$query_run=mysqli_query($connection,$query);
	
	if ($query_run -> num_rows > 0){
		session_start();
		$_SESSION['state'] = $state;
		header("location:dashboard.php");
		
	}else{
		echo "<p align =center>"."Sorry you have to register first";
		//header("location:register.php");
	}
	
}
?>

<section>
<div style ="height:450px; width:100%;">
<br>
<center>
<fieldset style ="height:150px; width:15%; border-radius:5px;">

<form action ="" method ="post">
<input name ="state" type ="text" placeholder="State" style ="text-align:center;"></input><br>
<br>
<br>
<input name ="password" type ="password" placeholder="Password" style ="text-align:center;"></input><br>
<br>
<br>

<button type ="submit" name ="submit" value ="Log In">Log in</button>
</form>

</fieldset>
</center>
</div>
</section>

<?php include "includes/footer.php";?>