<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Login | Aladdin</title>

   {include file='../View/Assets/php/Head.tpl'}
</head>

<body class="header-fixed">

<div class="wrapper">
{include file='../View/Assets/php/NavTop.tpl'}


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Login</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="homepageController.php">Homepagina</a></li>
                <li class="active">Login</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            {if $loginError}
	            	<div class='alert alert-danger'>
					  <strong>Error!</strong> gebruikersnaam en wachtwoord komen niet overeen!
					</div>
			{/if}
			{if $banned}
	            	<div class='alert alert-danger'>
					  <strong>Error!</strong> je account is geblokkeerd!
					</div>
			{/if}
			
                <form class="reg-page" action="Controller/Handlers/userloginHandler.php" method="post">
                    <div class="reg-header">
                        <h2>Login</h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="E-mail" class="form-control" required="required" value="{$username}">
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
                    <p><a class="color-green" href="index.php?controller=recovery&action=Index">Klik hier</a> om uw wachtwoord te resetten.</p>
                    <h4>Nog geen account ?</h4>
                    <p><a class="color-green" href="../Controller/RegisterController.php">Klik hier</a> om een account aan te maken.</p>

                </form>
            </div>
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
{include file='../View/Assets/php/footer.tpl'}
</div><!--/wrapper-->
{include '../View/Assets/php/jsCall.tpl'}

</body>
</html>
