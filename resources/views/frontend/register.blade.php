<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="backend/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5">
          	<img src="frontend/userimg/a1.jpg" class="w-100 h-100 img-fluid d-block mx-auto">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">

                

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="user_name" placeholder="Name">


                  
                </div>
                 
                
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="user_email" placeholder="Email Address">


                  
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="user_password"  placeholder="Password" >
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="user_cpassword"  placeholder="Confirm Password" value="">
                </div>

                <div class="form-group">
                  <input type="number" class="form-control form-control-user" name="user_phone"  placeholder="Phone Number" value="">
                </div>

                

                <div class="form-group">
                  <textarea class="form-control" name="user_address"  placeholder="Address"></textarea>
                </div>

                <div class="form-group">
                  <input type="file" class=" form-control-file" name="user_profile"  placeholder="Profile">
                  
                </div>

                <input class="btn btn-primary btn-user btn-block" type="submit" value="Register Account">
                  
                
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>