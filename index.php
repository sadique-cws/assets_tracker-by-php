<?php 
    include "config.php";
    loginRequired();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets Trackers</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<?php include "include/header.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark text-white" style="height: 90vh;">
                <?php include "include/side.php";?>
            </div>
            <div class="col-10">
                <div class="row mt-2">
                    <div class="col-4">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h2>10+</h2>
                                <h6>Total Assets Type</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h2>100+</h2>
                                <h6>Total Assets</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <h2>1+</h2>
                                <h6>Total Account</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

