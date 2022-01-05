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
                <div class="container my-4">
                    <h2 class="h5 float-start">Manage Assets Type</h2>
                    <a href="addAssetsType.php" class="btn btn-success float-end">Add Assets Type</a>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        $data = callingData("asset");
                        foreach($data as $value){
                    ?>
                    <tr>
                        <td><?= $value['assets_id'];?></td>
                        <td><?= $value['assets_name'];?></td>
                        <td><?= $value['assets_code'];?></td>
                        <td><?= $value['assets_type'];?></td>
                        <td><img src="image/<?= $value['assets_image'];?>" alt="" width="50px"></td>
                        <td><?= $value['status'];?></td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Delete</a>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

