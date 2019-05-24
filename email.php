<?php
$email = $_POST["email"];
$con = mysqli_connect("localhost","id9397495_logandoare","AzeSQL99","id9397495_logandoare");
	$req = "insert into M2LQuestionnaireMembre (email)
					values ('$email')";
	$result = mysqli_query($con,$req);
  header("location:endPage.php");

?>
