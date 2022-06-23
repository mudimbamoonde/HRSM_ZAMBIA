
<?php include "include/header.php" ?>

<?php 

 /*$_SESSION["USER_ID"] = $usrdata->user_id;
 $_SESSION["USERNAME"] = $usrdata->username;
 $_SESSION["FIRSTNAME"] = $usrdata->fname;
 $_SESSION["LASTNAME"] = $usrdata->lname;
 $_SESSION["PHONENUMBER"] = $usrdata->pnumber;
 $_SESSION["EMAIL"] = $usrdata->email;*/
?>
<div class="container-fluid">
  <div class="row">
   <?php include "include/sidebar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Reponse</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>SN</th>
              <th>Full Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Province</th>
              <th>District</th>
              <th>Town</th>
              <th>Date Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>2021-06-02</td>
            </tr>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
              <td>text</td>
              <td>2021-06-02</td>
            </tr>
             </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"  crossorigin="anonymous">
    </script><script src="js/dashboard.js"></script>
  </body>
</html>
