<?php include "include/header.php" ?>

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
                    <form>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control">

                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control">

                        <hr>
                        <Button type="submit" class="btn btn-primary">Login</Button> |
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