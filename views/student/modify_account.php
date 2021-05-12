<?php require('../../controller/connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Class Record</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include('include/header.php');?>
   

  <div id="wrapper">

     <?php include('include/sidebar.php');?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header bg-primary" style="color:white;border-bottom: white"><h3><center><?php echo $_SESSION['fullname']?></center></h3>
      </div>

      <?php

      $conn = connect();
      $student_id = $_SESSION['student_id'];

      $sql = "SELECT * FROM accounts WHERE accounts.student_id = '$student_id' ";
      $result = mysqli_query($conn,$sql);

       while($row = mysqli_fetch_assoc($result)) { 
          

          $tuition_fee = $row['tuition_fee'];
          $misc_fee = $row['misc_fee'];
          $total_schoolfee = $row['total_schoolfee'];

       }

      ?>

      <div class="card-body">
        <p>Tuition Fee: PHP <?php echo $tuition_fee ?>  </p>
        <p>Miscellaneous Fee: PHP <?php echo $misc_fee ?>  </p>
        <p>Total School Fee: PHP <?php echo $total_schoolfee ?>  </p>
      </div>
    </div>
  </div>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
