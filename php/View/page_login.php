<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

   <?php include'Assets/php/Head.tpl.php'?>
</head>

<body>

<div class="wrapper">
<?php include 'assets/php/NavTop.php';?>


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Login</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Homepagina</a></li>
                <li class="active">Login</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <?php
            if (isset($_GET['login']))
            {
            	echo "
				<div class='alert alert-danger'>
				  <strong>Error!</strong> gebruikersnaam en wachtwoord komen niet overeen!
				</div>
				";
            }
            if (isset($_GET['logout'])){
            	if (isset($_SESSION['email'])){
            		session_destroy();
            		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            		$newLink = str_replace(end((explode('?', $actual_link))), "", $actual_link);
            		header('Location: '.$newLink);
            	}
            }
            ?>
                <form class="reg-page" action="../Controller/Handlers/Userlogin.php" method="post">
                    <div class="reg-header">
                        <h2>Login</h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="E-mail" class="form-control" required="required" value="<?php if(isset($_GET['username']))print $_GET['username']; ?>">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Wachtwoord" class="form-control" required="required">
                    </div>

                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button class="btn btn-danger pull-right" type="submit"  name="login">
                            	Login
                            </button>
                        </div>
                    </div>

                    <hr>

                    <h4>Wachtwoord vergeten ?</h4>
                    <p><a class="color-green" href="page_passwordrecover.php">Klik hier</a> om uw wachtwoord te resetten.</p>
                    <h4>Nog geen account ?</h4>
                    <p><a class="color-green" href="../Controller/Register/RegisterController.php">Klik hier</a> om een account aan te maken.</p>

                </form>
            </div>
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
<?php include 'Assets/php/Footer.php';?>
</div><!--/wrapper-->
<?php include 'Assets/php/jsCall.php';?>

</body>
</html>
