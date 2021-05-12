<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$student=$_POST['student'];
	$subject=$_POST['subject'];

	$grade_mark=$_POST['grade_mark'];
	
	$sql = "INSERT INTO grade (grade_id,student_id,subject_id,marks)
	 VALUES (NULL,'$student','$subject','$grade_mark')";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/department/view_grades.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>