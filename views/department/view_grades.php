<?php require('../../controller/connection.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Record Management System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">


    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

    <div class="mt-3">
        <h3 class="text-dark">View Grades</h3>
          <hr class="bg-info">
    </div>

        <table class="table table-bordered" id="locationTable" width="100%" cellspacing="0">
      <thead>
                <tr>
                     <th>Student Name</th>
                     <th>Subject Code</th>
                     <th>Grade Marks</th>
                </tr>
      </thead>
           <?php
               $conn = connect();
               $result=mysqli_query($conn,"SELECT * FROM grade 
                JOIN student ON student.student_id = grade.student_id 
                JOIN subject ON subject.subject_id = grade.subject_id ");
              while ($row=mysqli_fetch_array($result)) {
                ?> 
            
                 <tr>
                  <td><?php echo $row['student_fname'];?> <?php echo $row['student_lname'];?></td>
                  <td><?php echo $row['subject_code'];?></td>
                  <td><?php echo $row['marks'];?></td>
                </tr> 

            <?php } ?> 
       </table>
         <hr class="bg-info">
         <a href="add_student_grade.php" class="btn btn-primary">ADD STUDENT GRADE</a>
    <br>
      </div>
      <!-- /.container-fluid -->

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

 <script>
    $(document).ready(function() {
        $('#locationTable').DataTable({
            "scrollY": "100%",
            "responsive": true,
            "paging": true,
            "scrollX": true,
            "searching": true,
            "info": false,
            "ordering": false
        });
    });
</script>


