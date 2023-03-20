<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freight Management System | Login</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .brand{
            width:50%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>

    <?php include('db_connect.php')?>
    <?php
    session_start();
    if(isset($_SESSION['login_id']))
    header("location:index.php?page=includes/hr1_dashboard")
    ?>
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                    <img class="brand" src="assets/img/f.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Login</h6>
                    <form id="login-form">
                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <input type="submit" id="btn" name="login" class="btn btn-primary shadow-2 mb-4" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      $('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		        $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=includes/hr1_dashboard';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})

    </script>

    <script src="assets/js/scripts.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>