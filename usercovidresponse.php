<?php include "include/header.php" ?>
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>

            <h2>Reponse</h2>
            <div class="card-body">
                <p id="msg"></p>
                <form>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control">

                    <label for="lname"></label>
                    <input type="text" id="lname" name="lname" class="form-control">

                    <label for="district">District</label>
                    <select id="district" name="district" class="form-control">
                        <?php
                        include "include/config.php";
                         $sql = "SELECT*FROM district";
                         $stm = $conn->prepare($sql);
                         $stm->execute();

                         while($usrdata = $stm->fetch(PDO::FETCH_OBJ)){
                          echo "<option> ".$usrdata->d_name."</option>";
                         }
                        
                        ?>
                    </select>

                    <hr>
                    <a href="#" class="btn btn-danger" id="sendData">Submit</a> |
                    <a href="login.php">Already have an Account?</a>
                </form>
            </div>
        </main>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous">
</script>
<script src="js/dashboard.js"></script>
</body>

</html>
