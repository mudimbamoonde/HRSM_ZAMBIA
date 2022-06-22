<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <?php 
              if ($_SERVER["PHP_SELF"] =='/index.php') {
                  ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <?php
              }else{?>

<li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
<?php }?>

  <?php if ($_SERVER["PHP_SELF"] =='') { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=province">
              <span data-feather="file"></span>
              Provice 
            </a>
          </li>
          <?php }else{ ?>
            <li class="nav-item">
                <a class="nav-link" href="manage.php?view=province">
                <span data-feather="file"></span>
                Provice
                </a>
            </li>
        <?php } ?>
        <?php if ($_SERVER["PHP_SELF"] =='') { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=district">
              <span data-feather="home"></span>
              District
            </a>
          </li>
          <?php }else{ ?>
            <li class="nav-item">
            <a class="nav-link" href="manage.php?view=district">
              <span data-feather="home"></span>
              District
            </a>
          </li>
            <?php } ?>

      
      
        
          <!-- <li class="nav-item">
            <a class="nav-link" href="manage.php?view=report">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li> -->

          <?php if ($_SERVER["PHP_SELF"] =='') { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=town">
              <span data-feather="layers"></span>
              Town
            </a>
          </li>
          <?php }else { ?>
            <li class="nav-item">
            <a class="nav-link" href="manage.php?view=town">
              <span data-feather="layers"></span>
              Town
            </a>
          </li>
            <?php }?>

            
          <li class="nav-item">
            <a class="nav-link" href="response.php">
              <span data-feather="bar-chart-2"></span>
              Response
            </a>
          </li>
    
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Management Settings</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">

  <?php if ($_SERVER["PHP_SELF"] =='/manage.php' && $_SERVER["REQUEST_URI"] =="/manage.php?view=province") { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=province">
              <span data-feather="file"></span>
              Add Provice 
            </a>
          </li>
          <?php }else{ ?>
            <li class="nav-item">
                <a class="nav-link" href="manage.php?view=province">
                <span data-feather="file"></span>
                Add Provice
                </a>
            </li>
        <?php } ?>
        <?php if ($_SERVER["PHP_SELF"] =='/manage.php' && $_SERVER["REQUEST_URI"] =="/manage.php?view=district") { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=district">
              <span data-feather="home"></span>
             Add District
            </a>
          </li>
          <?php }else{ ?>
            <li class="nav-item">
            <a class="nav-link" href="manage.php?view=district">
              <span data-feather="home"></span>
              Add District
            </a>
          </li>
            <?php } ?>

            <?php if ($_SERVER["PHP_SELF"] =='/manage.php' && $_SERVER["REQUEST_URI"] =="/manage.php?view=town") { ?>
          <li class="nav-item">
            <a class="nav-link active" href="manage.php?view=town">
              <span data-feather="layers"></span>
              Add Town
            </a>
          </li>
          <?php }else { ?>
            <li class="nav-item">
            <a class="nav-link" href="manage.php?view=town">
              <span data-feather="layers"></span>
              Add Town
            </a>
          </li>
            <?php }?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="manage.php?view=report">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li> -->
    
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>User Management</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="users"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Add User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Manage User
            </a>
          </li>

        </ul>
      </div>
    </nav>