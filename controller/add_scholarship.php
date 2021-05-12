<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$scholarship_description = $_POST['scholarship_description'];
	$scholarship_type = $_POST['scholarship_type'];
	$scholarship_discount = $_POST['scholarship_discount'];

	$sql = "INSERT INTO merit (merit_id,merit_desc,merit_type,merit_discount)
	 VALUES (NULL,'$scholarship_description','$scholarship_type','$scholarship_discount')";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/registrar/view_scholarships.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>