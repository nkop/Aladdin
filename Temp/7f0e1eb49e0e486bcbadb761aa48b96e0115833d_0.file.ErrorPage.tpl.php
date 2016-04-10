<?php
/* Smarty version 3.1.29, created on 2016-04-10 22:39:52
  from "C:\xampp\htdocs\Aladdin\php\View\ErrorPage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570aba181b9442_96490883',
  'file_dependency' => 
  array (
    '7f0e1eb49e0e486bcbadb761aa48b96e0115833d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\ErrorPage.tpl',
      1 => 1460294065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Assets/php/Head.tpl' => 1,
    'file:Assets/php/NavTop.tpl' => 1,
    'file:Assets/php/Footer.tpl' => 1,
  ),
),false)) {
function content_570aba181b9442_96490883 ($_smarty_tpl) {
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<title>Alladin | Home</title>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">

		<!-- Web Fonts -->
		<!--  <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>  -->

    </head>

    <body>

    <div class="wrapper">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/NavTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <h4 class="color-red">Dit e-mail adres is al geregistreerd!<br/></h4>
                <a href="page_login.php" class="color-green">Login</a><br/>
                <a href="#" class="color-green">Wachtwoord vergeten?</a>
            </div>
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!--/wrapper-->
<?php echo '<?php ';?>include 'Assets/php/jsCall.tpl.php';<?php echo '?>';?>

</body>
</html>
<?php }
}
