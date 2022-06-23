<?php include "include/header.php" ?>

<div class="container-fluid">
  <div class="row">
   <?php include "include/sidebar.php" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage <?php
          if(isset($_GET["view"])){
              if($_GET["view"]=="province"){
                  echo "Province";
              }else if ($_GET["view"]=="district"){
                  echo "District";
              }else if ($_GET["view"]=="town"){
                  echo "Town";
              }
          }else{
              echo "<script>window.location.href='index.php'</script>";
          }
        ?></h1>
      </div>

      <?php 

        if($_GET["view"]=="province"){
        ?>
       <div class="table-responsive">
           <div class="pull-right">
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Province</button>
           </div>
           <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Province</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body">
                <div id="messageProvince"></div>
                    <form>
                        <input type="text" name="provinceName" id="provinceName" class="form-control" placeholder="Enter Province Name">
                        <br>
                        <a href="#" id="saveProvince" class="btn btn-primary">Save</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
           <br>
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

        <?php
        }else if ($_GET["view"]=="district"){
        ?>

<div class="table-responsive">
          <div class="pull-right">
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#districtModal">Add District</button>
           </div>
           <!-- Modal -->
            <div class="modal fade" id="districtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add District</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div id="districtMessage"></div>
                    <form>
                        <input type="text" name="districtName" id="districtName" class="form-control" placeholder="Enter District Name">
                        <br>
                         <select id="p_name" name="p_name" class="form-control">
                         <option value="">SELECT PROVINCE</option>
                         <?php 
                          include "include/config.php";
                          $sql = "SELECT*FROM  province";
                          $stmt = $conn->prepare($sql);
                          $stmt->execute();
                          while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                              ?>
                               <option value='<?php echo $row->p_id ?>'><?php echo $row->p_name ?></option>
                         <?php
                          } ?>
                         </select>
                        <br>

                        <a href="#" id="saveDistrict" class="btn btn-primary">Save District</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
           <br>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>SN</th>
              <th>District Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="districtData">
             </tbody>
        </table>
      </div>

        <?php
        }else if ($_GET["view"]=="town"){
           ?>

<div class="table-responsive">
<div class="pull-right">
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#districtModal">Add Town</button>
           </div>
           <!-- Modal -->
            <div class="modal fade" id="districtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Town</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div id="districtMessage"></div>
                    <form>
                        <input type="text" name="districtName" id="districtName" class="form-control" placeholder="Enter District Name">
                        <br>
                         <select id="d_name" name="d_name" class="form-control">
                         <option disabled selected>SELECT DISTRICT</option>
                         <?php 
                          include "include/config.php";
                          $sql = "SELECT*FROM  district";
                          $stmt = $conn->prepare($sql);
                          $stmt->execute();
                          while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                        ?>
                          <option value='<?php echo $row->d_id ?>'><?php echo $row->d_name ?></option>
                        <?php } ?>
                         </select>
                        <br>
                        <a href="#" id="saveTown" class="btn btn-primary">Save Town</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
           <br>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>SN</th>
              <th>Town Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="townData">
          </tbody>
        </table>
      </div>
           <?php
        }
      ?>
  
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
