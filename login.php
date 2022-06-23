<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>HSRM Zambia</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        <blade media|%20(min-width%3A%20768px)%20%7B>.bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Health System Response Monitoring</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <?php 
           if(isset($_SESSION["id"])){
          ?>
                <a class="nav-link" href="logout.php">Sign out</a>
                <a class="nav-link" href="logout.php"><?php echo $_SESSION["FIRSTNAME"]." ".$_SESSION["LASTNAME"] ?></a>
                <?php }else{?>
                <a href="login.php" class="nav-link">Sign In</a>
                <?php } ?>
            </li>
        </ul>
    </header>

<div class="container-fluid">
    <div class="row">
        <aside class="col-lg-6 text-justify mt-5">
            <h2 class="border-bottom">Welcome to Health system Response Monitoring</h2>
            <p class="fs-4 fw-lighter"> Over the last few months, the World Bank and partners have collected and published country-level results from COVID-19 surveys
                to inform policies that limit the human and economic impact of the pandemic. A new COVID-19 Health System Response Monitoring Dashboard builds
                on these efforts by providing a one-stop shop for cross-country comparable information and analysis.
                The dashboard allows users to analyze the impacts of COVID-19 and explore how these vary across countries over
                time, and within countries, across industries and locations.</p>
        </aside>
        <main class="ms-sm-auto col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 border-bottom">
                        <h1>Login</h1>
                    </div>
                    <?php
                    
                    if(isset($_POST["login"])){
                        include "include/config.php";
                        
                        $username = $_POST["username"];
                        $password = md5($_POST["password"]);

                        $sql = "SELECT*FROM users WHERE username=? AND password=?";
                        $stm = $conn->prepare($sql);
                        $stm->bindValue(1,$username);
                        $stm->bindValue(2,$password);
                        $stm->execute();
                        if($stm->rowCount()==1){
                           
                            session_start();
                            //user_id | fname | lname | email | pnumber | username | password
                            $usrdata = $stm->fetch(PDO::FETCH_OBJ);
                           
                            $_SESSION["id"] = $usrdata->user_id;
                            $_SESSION["username"] = $usrdata->username;
                            $_SESSION["firstname"] = $usrdata->fname;
                            $_SESSION["lastname"] = $usrdata->lname;
                            $_SESSION["phonenumber"] = $usrdata->pnumber;
                            $_SESSION["email"] = $usrdata->email;
                          
                            header("location:index.php");

                        }else{
                            echo "<div class='alert alert-danger'> Your Password doesn't match!!</div>";
                        }
                    }

                    ?>
                    <form action="login.php" method="POST">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control">

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control">

                        <hr>
                        <Button type="submit" class="btn btn-primary" name="login">Login</Button> |
                        <a href="register.php">Create an Account</a>
                    </form>
                </div>
            </div>

    </div>

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