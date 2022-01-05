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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label>Asset Name</label>
                                        <input type="text" name="asset_name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Asset code</label>
                                        <input type="text" name="asset_code" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Asset Type</label>
                                        <select name="asset_type" class="form-select">
                                            <option value="">Select Assets Type</option>
                                            <?php 
                                            $calling = callingData("asset_type");
                                            foreach($calling as $val){
                                                $id = $val['id'];
                                                $name = $val['asset_type_name'];
                                                echo "<option value='$id'>$name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3"> 
                                        <label>Asset Image</label>
                                        <input type="file" name="asset_image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="d-block">Status</label>
                                        <input type="radio" name="status" class="me-2" value="1" checked>Active
                                        <input type="radio" name="status" class="me-2" value="0">disabled
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" name="send_assets" class="btn btn-success w-100">
                                    </div>
                                </form>
                                <?php 
                                if(isset($_POST['send_assets'])){

                                    $temp_image = $_FILES['asset_image']['tmp_name'];
                                    $image = $_FILES['asset_image']['name'];

                                    move_uploaded_file($temp_image,"image/$image");
                                    $data = [
                                        'assets_name' => $_POST['asset_name'],
                                        'assets_code' => $_POST['asset_code'],
                                        'assets_type' => $_POST['asset_type'],
                                        'assets_image' => $image,
                                        'status' => $_POST['status'],
                                    ];

                                    insertData("asset",$data);
                                    refresh("manageAssets.php");

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

