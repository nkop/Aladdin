<?php
/* Smarty version 3.1.29, created on 2016-04-09 20:09:01
  from "C:\xampp\htdocs\Aladdin\php\View\page_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709453d357fa4_39638005',
  'file_dependency' => 
  array (
    'ff02e7149e93563a042b5087c3d608ba2fe1428c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\page_login.tpl',
      1 => 1460219869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../View/Assets/php/Head.tpl' => 1,
    'file:../View/Assets/php/NavTop.tpl' => 1,
    'file:../View/Assets/php/footer.tpl' => 1,
  ),
),false)) {
function content_5709453d357fa4_39638005 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../View/Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

<div class="wrapper">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../View/Assets/php/NavTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
            <?php if ($_smarty_tpl->tpl_vars['loginError']->value) {?>
	            	<div class='alert alert-danger'>
					  <strong>Error!</strong> gebruikersnaam en wachtwoord komen niet overeen!
					</div>
			<?php }?>
                <form class="reg-page" action="../Controller/Handlers/Userlogin.php" method="post">
                    <div class="reg-header">
                        <h2>Login</h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="E-mail" class="form-control" required="required" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
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
                    <p><a class="color-green" href="../Controller/RecoveryController.php">Klik hier</a> om uw wachtwoord te resetten.</p>
                    <h4>Nog geen account ?</h4>
                    <p><a class="color-green" href="../Controller/RegisterController.php">Klik hier</a> om een account aan te maken.</p>

                </form>
            </div>
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../View/Assets/php/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!--/wrapper-->
<?php echo '<?php ';?>include 'Assets/php/jsCall.tpl.php';<?php echo '?>';?>

</body>
</html>
<?php }
}
