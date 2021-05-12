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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

  <?php
                                    if (isset($_GET['error'])){
                                        $err = $_GET['error'];   
                                        echo '<div class="alert alert-danger text-center">';
                                        echo $err;
                                        echo '</div>';
                                    }

                                    if (isset($_GET['success'])){
                                        $success = $_GET['success'];
                                        echo '<div class="alert alert-success text-center">';
                                        echo $success;
                                        echo '</div>';
                                    }
                                    if (isset($_GET['danger-msg'])){
                                        $danger = $_GET['danger-msg'];
                                        echo '<div class="alert alert-danger text-center">';
                                        echo $danger;
                                        echo '</div>';
                                    }
                                ?>

<body class="bg-primary">

   <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
 <h3 align="center" style="margin-top:4%;color:#fff">Student Record Management System</h3>
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                    <form action="../controller/login.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-info"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hi, Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" 
                                                id="username" placeholder="Enter Username" required="true">
                                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" 
                                id="password" placeholder="Enter Password">
                                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">LOGIN</button>
                                    </form>
                                 <!--    <hr>
                                    <div class="text-center">
                                        <a class="small" href="create_account" style="font-weight:bold">No Account? Create Here</a>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                     </form>
                  </div>
                </div>
            </div>
        </div>
      </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
