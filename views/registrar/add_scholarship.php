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
      <div class="card-header bg-primary" style="color:white;border-bottom: white"><h3><center>Add Scholarship</center></h3>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="../../controller/add_scholarship.php" name="login"  method="post">

      
           <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="scholarship_description" class="form-control"  required="required">
              <label>Scholarship Description</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
               <select class="form-control" name="scholarship_type" required="required">
                  <option hidden selected>Choose Scholarship Type</option>
                  <option value="NGO">NGO</option>
                  <option value="Government Sponsored">Government Sponsored</option>
                  <option value="Private">Private</option>
                  <option value="Public">Public</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <select class="form-control" name="scholarship_discount" required="required">
                  <option hidden selected>Choose Scholarship Discount</option>
                  <option value="5%">5%</option>
                  <option value="10%">10%</option>
                  <option value="15%">15%</option>
                  <option value="20%">20%</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
          <a class="btn btn-danger" href="view_scholarships.php">Cancel</a>
        </form>
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
