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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<?php include "include/header.php";?>

    <div class="container mt-5">
        <div class="row">
           <div class="col-4 mx-auto">
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
                            $email = $_POST['email'];
                            $password = sha1($_POST['password']);

                            $query  = callingData("accounts"," email='$email' AND password='$password'");
                            
                            if(count($query) > 0){
                                $_SESSION['admin'] = $email;
                                refresh();
                            }
                            else{
                                echo "username or password is incorrect";
                            }
                       }
                       ?>
                   </div>
               </div>
           </div>
        </div>
    </div>
</body>
</html>

