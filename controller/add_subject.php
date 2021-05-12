<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$subject_code = $_POST['subject_code'];
	$subject_description = $_POST['subject_description'];
	$no_of_units = $_POST['no_of_units'];

	$sql = "INSERT INTO subject (subject_id,subject_code,subject_desc,no_of_units)
	 VALUES (NULL,'$subject_code','$subject_description','$no_of_units')";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/department/view_subject_offered.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>