<?php include "include/header.php" ?>

<div class="container-fluid">
  <div class="row">
   <?php include "include/sidebar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Reponse</h1>
      </div>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>SN</th>
              <th>Province Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="provinceData">
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>


      <script src="js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"  crossorigin="anonymous"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/dashboard.js"></script>
      <script src="Script.js" type="text/javascript"></script>
  </body>
</html>
