<?php
session_start();
if(!isset($_SESSION['state'])){
	
	echo "You are not logged in to see content";
	}else{
		$session =$_SESSION['state'];
		echo $session;
		//echo "Welcome". $session."</br>";
		
	
}
?>
<?php include "includes/header.php";?>
<?php include "includes/config.php";?>


<?php 
if(isset($_POST['submit'])){
	$confirmed = $_POST["confirmed"];
	$recovered = $_POST["recovered"];
	$deceased = $_POST["deceased"];
	$state = $_SESSION['state'];
	
	$query ="INSERT INTO states (state, confirmed, recovered, deceased) VALUES ('$state', '$confirmed', '$recovered', '$deceased')";
	

	$query_run = mysqli_query($connection, $query);
	
	if($query_run){
		echo "Success";
		
	}
	else{
		echo "error";
   }
	
}
?>


<section>
<div style ="height:450px; width:100%;">
Add Your records for this week
<center>
<fieldset style ="height:150px; width:15%; border-radius:5px;">

<form action ="" method ="post">
<input name ="confirmed" type ="text" placeholder="Confirmed" style ="text-align:center;"></input><br>
<br>
<br>
<input name ="recovered" type ="text" placeholder="Recovered" style ="text-align:center;"></input><br>
<br>
<br>
<input name ="deceased" type ="text" placeholder="Deaths" style ="text-align:center;"></input><br>
<br>
<br>

<button type ="submit" name ="submit" value ="Submit">Submit</button>
</form>

</fieldset>
</center>

</div>
<br>
</section>

<?php include "includes/footer.php";?>