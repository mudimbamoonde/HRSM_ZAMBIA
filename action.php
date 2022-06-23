<?php
include "include/config.php";

$output = "";

if (isset($_POST["data"])) {
// }"data="+1+province+"=provinceName";
// echo $_POST["province"];

$sql = "INSERT INTO province(p_name) VALUES(?)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1,$_POST["province"]);
if($stmt->execute()){
    $output .= "<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss ='alert' aria-label ='close'><span class='mdi mdi-close'></span></a><b>Successfully Registered!!</b>
 </div>";
}


}

if(isset($_GET["viewData"])){
    $view = "SELECT*FROM province DSC";
    $stm = $conn->prepare($view);
    $stm->execute();
    while($row = $stm->fetch(PDO::FETCH_OBJ)){
        $output .= "<tr>
        <td>$row->p_id</td>
        <td>$row->p_name</td>
        <td><a href=''>Delete</a></td>
      </tr>";
    }
    // echo "Values";
    
}

if (isset($_POST["districtData"])) {
    //  var param = "districtData="+1+"&"+"district="+districtName;
    // echo $_POST["province"];
    
    $sql = "INSERT INTO district(d_name,p_id) VALUES(?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1,$_POST["district"]);
    $stmt->bindValue(2,$_POST["provincename"]);
    if($stmt->execute()){
        $output .= "<div class='alert alert-success'>
        <a href='#' class='close' data-dismiss ='alert' aria-label ='close'><span class='mdi mdi-close'></span></a><b>Successfully Registered!!</b>
     </div>";
    }
    
    
    }

    if(isset($_GET["viewDistrict"])){
        $view = "SELECT*FROM district DSC";
        $stm = $conn->prepare($view);
        $stm->execute();
        while($row = $stm->fetch(PDO::FETCH_OBJ)){
            $output .= "<tr>
            <td>$row->d_id</td>
            <td>$row->d_name</td>
            <td><a href=''>Delete</a></td>
          </tr>";
        }
        // echo "Values";
        
    }


    if(isset($_GET["viewtown"])){
        $view = "SELECT*FROM town DSC";
        $stm = $conn->prepare($view);
        $stm->execute();
        if ($stm->rowCount()>0) {
            while ($row = $stm->fetch(PDO::FETCH_OBJ)) {
                $output .= "<tr>
            <td>$row->t_id</td>
            <td>$row->t_name</td>
            <td><a href=''>Delete</a></td>
          </tr>";
            }
        }else{
            echo "No Data Found!!";
        }
        // echo "Values";
        
    }


    // if (isset($_POST["districtData"])) {
    //     //  var param = "districtData="+1+"&"+"district="+districtName;
    //     // echo $_POST["province"];
        
    //     $sql = "INSERT INTO district(d_name) VALUES(?)";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindValue(1,$_POST["district"]);
    //     if($stmt->execute()){
    //         $output .= "<div class='alert alert-success'>
    //         <a href='#' class='close' data-dismiss ='alert' aria-label ='close'><span class='mdi mdi-close'></span></a><b>Successfully Registered!!</b>
    //      </div>";
    //     }
        
        
    //     }


if(isset($_POST["createAccount"])){
    //  var param = "createAccount="+1+"&"+"fname="+fname+
    //  "&"+"lname="+lname+ "&"+"username="+username+ "&"+"pnumber="+pnumber;
    $sql = "INSERT INTO users(user_id,fname,lname,pnumber,username,email,role,password) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1,null);
    $stmt->bindValue(2,$_POST["fname"]);
    $stmt->bindValue(3,$_POST["lname"]);
    $stmt->bindValue(4,$_POST["pnumber"]);
    $stmt->bindValue(5,$_POST["username"]);
    $stmt->bindValue(6,$_POST["email"]);
    $stmt->bindValue(7,"cuser");
    $stmt->bindValue(8,md5($_POST["password"]));
    if($stmt->execute()){
    $output .= "<div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'><span
                class='mdi mdi-close'></span></a><b>Successfully Registered!!</b>
    </div>";
    }

}

echo $output;