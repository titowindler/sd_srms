<ul class="sidebar navbar-nav bg-info">

  <?php if($_SESSION['u_type'] == 2) { ?>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="text-light"><center>Student Record Management System</center></span>
          <hr color="white">
        </a>

      </li>

      <li class="nav-item">
        <a class="nav-link" href="view_grades.php">
          <span class="text-light">View Grades</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="view_scholarships.php">
          <span class="text-light">View Scholarships</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="modify_account.php">
          <span class="text-light">Modify Account</span>
        </a>
      </li>

     
   <?php } ?>
  </ul>
