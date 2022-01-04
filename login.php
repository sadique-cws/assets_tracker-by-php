<?php 
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets Trackers</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Assets Trackers</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
           <div class="col-3 mx-auto">
               <div class="card">
                   <div class="card-body">
                       <h4>Admin Login Here</h4>
                       <form action="" method="post">
                           <div class="mb-3">
                               <label for="">Email</label>
                               <input type="email" name="email" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label for="">Password</label>
                               <input type="password" name="password" class="form-control">
                           </div>
                           <div class="mb-3">
                               <input type="submit" name="login" class="btn btn-success">
                           </div>
                       </form>
                       <?php 
                       if(isset($_POST['login'])){

                       }
                       ?>
                   </div>
               </div>
           </div>
        </div>
    </div>
</body>
</html>

