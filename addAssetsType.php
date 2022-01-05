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
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label>Asset type Name</label>
                                        <input type="text" name="asset_type_name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Asset type descr</label>
                                        <input type="text" name="asset_type_descr" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" name="send" class="btn btn-success w-100">
                                    </div>
                                </form>
                                <?php 
                                if(isset($_POST['send'])){

                                    $data = [
                                        'asset_type_name' => $_POST['asset_type_name'],
                                        'asset_type_descr' => $_POST['asset_type_descr'],
                                    ];
                                    insertData("asset_type",$data);
                                    refresh("manageAssetsType.php");

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

