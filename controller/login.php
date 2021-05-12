<?php 

require("connection.php");
session_start();


if(isset($_POST['login'])) {
    login();
}

function login() {
$found = 0;
$secret = "test123"; // change password soon
$str = "Invalid Username or Password!";

if(isset($_POST['username']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $conn = connect();
    

  //Fetches from Customer
    $sql = "SELECT * FROM student WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['fullname'] = $row['student_fname'].' '. $row['student_lname'];
        $_SESSION['u_type'] = 1;
        $found = 1;
        header('location:../views/student/view_subject_offered.php'); 
    }
        
    //    var_dump($pass);
    // exit();

    //Fetches from Seller
    $sql = "SELECT * FROM registrar WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

     var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['registrar_id'] = $row['registrar_id'];
        $_SESSION['registrar_name'] = $row['registrar_name'];
        $_SESSION['u_type'] = 2;
        $found = 1;
       header('location:../views/registrar/view_grades.php');
     }

    //Fetches from Seller
    $sql = "SELECT * FROM department_personnel WHERE (`username` LIKE '$user') AND (`password` LIKE '$pass')";
    $result = mysqli_query($conn, $sql); 

    var_dump($conn);
    var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['department_personnel_id'] = $row['department_personnel_id'];
        $_SESSION['department_personnel_name'] = $row['department_personnel_name'];
        $_SESSION['u_type'] = 3;
        $found = 1;
       header('location:../views/department/view_subject_offered.php');
     }

  
    if($found != 1){
        echo "fail";
     header('location:../index.php?danger-invalid='.$str);
    } 
  }
}

?>

