<?php include "include/header.php" ?>
<div class="container-fluid">
    <div class="row">
        <main class="col-md-5 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Reponse</h1>

            </div>
            <div class="card-body">
                <p id="msg"></p>
                <form>
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control"></textarea>

                    <label for="district">District</label>
                    <select id="district" name="district" class="form-control">
                        <?php
                        include "include/config.php";
                         $sql = "SELECT*FROM district";
                         $stm = $conn->prepare($sql);
                         $stm->execute();

                         while($usrdata = $stm->fetch(PDO::FETCH_OBJ)){
                          echo "<option value='".$usrdata->d_id."'> ".$usrdata->d_name."</option>";
                         }
                        
                        ?>
                    </select>
                    <a href="#" class="btn btn-warning mt-3" id="sendresponse">Submit</a> 
                </form>

                <hr>

                <?php 
                 include "include/config.php";
                $view = "SELECT*FROM response AS r LEFT JOIN district AS d ON r.d_idd = d.d_id order by response_id ";
                $stm = $conn->prepare($view);
                $stm->execute();
                while($row = $stm->fetch(PDO::FETCH_OBJ)){  
                
                ?>
                <div class="card mt-2">
                <div class="card-body">
                    <h4><?php echo $row->citizen_name ?></h4> <span class="text-muted mb-0"><?php echo $row->d_name ?></span>
                    <p><?php echo $row->description ?></p>
                </div>
             </div>
             <?php } ?>
            
            </div>
        </main>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/dashboard.js"></script>
<script src="Script.js" type="text/javascript"></script>
</body>

</html>
