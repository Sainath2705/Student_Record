<?php session_start();
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $uname=$_POST['id'];
    $Password=$_POST['password'];
    $query=mysqli_query($con,"select ID,loginid from tbl_login where  loginid='$uname' && password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
      $_SESSION['login']=$ret['loginid'];
     header('location:dashboard.php');
    }
    else{
      echo "Invalid Details";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Record Management System |  Login </title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../dist/css/jquery.validate.css" />
  <style>
    body {
       background: url('https://img.freepik.com/free-vector/geometric-gradient-futuristic-background_23-2149116406.jpg?semt=ais_hybrid&w=740') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-container {
      min-height: 100vh;
    }
    .login-card {
      max-width: 420px;
      border-radius: 16px;
      padding: 30px;
    }
    .form-control {
      border-radius: 10px;
    }
    .btn-success {
      border-radius: 10px;
    }
    .card-header h4 {
      margin: 0;
    }
    .bg-black{
        background-color: #212121;
        color: #fff;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center login-container ">
    <div class="card shadow login-card bg-white w-100">
      <div class="card-header text-center bg-primary text-white">
        <h4>Student Record Management System</h4>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="mb-3">
            <label for="id" class="form-label">Login ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter your login ID" required autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            <div class="text-end mt-1">
              <a href="password-recovery.php" class="small text-primary">Forgot Password?</a>
            </div>
          </div>
          <div class="d-grid mt-4">
            <button type="submit" name="submit" class="btn btn-success btn-lg">Login</button>
          </div>
      </form>
    </div>
  </div>
</div>


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
 <script src="dist/jquery-1.3.2.js" type="text/javascript"></script>
 <script src="dist/jquery.validate.js" type="text/javascript"></script>
 <script type="text/javascript">
            
            jQuery(function(){
                jQuery("#id").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid id"
                });
                jQuery("#password").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid password"
                });
                
            });
            
        </script>
</body>

</html>
