
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img src="images/college.jpg" height="100%" width="100%"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <div class="text-danger font-weight-bold">
                  <?php
                    if(isset($_GET['msg1'])){
                      echo $_GET['msg1'];
                    }
                    if(isset($_GET['msg2'])){
                      echo $_GET['msg2'];
                    }
                    if(isset($_GET['msg3'])){
                      echo $_GET['msg3'];
                    }

                  ?>
                  </div>

                  <form class="user" method="post" action="sms_logincheck.php" onsubmit="return validation()">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username" autocomplete="off">
                      <span class="text-danger font-weight-bold" id="uname"></span>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="password" placeholder="Password" name="password" autocomplete="off">
                      <span class="text-danger font-weight-bold" id="pwd"></span>
                    </div>

                    <div class="form-group">
                  <label>Login as:</label>
                  <select class="form-control" id="profession" name="profession" placeholder="select">
                    <option class="selected">---Select any one---</option>
                    <option>admin</option>
                    <option>teacher</option>
                    <option>student</option>

                    
                  </select>
                  <span class="text-danger font-weight-bold" id="prof"></span>
                </div>

                    
                   <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-user btn-block" placeholder="Password" name="login" value="Login">
                    </div>


                    <hr>

                    
                  </form>


                  
                  
                  <div class="text-center">
                    <a class="small" href="index.php">Create an Account!</a>
                  </div>
                </div>
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

<script type="text/javascript">
	function validation(){
		var username = document.getElementById('username').value;
  		var password = document.getElementById('password').value;
  		var profession = document.getElementById('profession').value;
  		var flag = true;
  		if(username == ""){
  			document.getElementById('uname').innerHTML = " **Please enter username**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('uname').innerHTML = "";
  		}


  		if(password == ""){
  			document.getElementById('pwd').innerHTML = " **Please enter password**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('pwd').innerHTML = "";
  		}

  		if(profession == "---Select any one---"){
  			document.getElementById('prof').innerHTML = " **Please select profession**";
  			flag = false;
  			//alert('1');
  		}else{
  			document.getElementById('prof').innerHTML = "";
  		}

  		if(flag == true){
  			return true;
  			}else{
  				return false;
  			}
  		

	}
</script>

</body>

</html>
