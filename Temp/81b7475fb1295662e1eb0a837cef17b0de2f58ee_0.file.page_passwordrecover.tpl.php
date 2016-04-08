<?php
/* Smarty version 3.1.29, created on 2016-04-08 15:28:54
  from "C:\xampp\htdocs\Aladdin\php\View\page_passwordrecover.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5707b216e3ece6_48797195',
  'file_dependency' => 
  array (
    '81b7475fb1295662e1eb0a837cef17b0de2f58ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\page_passwordrecover.tpl',
      1 => 1460120501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Assets/php/Head.tpl' => 1,
    'file:Assets/php/NavTop.tpl' => 1,
    'file:Assets/php/Footer.tpl' => 1,
    'file:Assets/php/jsCall.tpl' => 1,
  ),
),false)) {
function content_5707b216e3ece6_48797195 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

<div class="wrapper">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/NavTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container content">
<form class="text-center col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" action="../Controller/Handlers/Passwordrecovery.php">
  <input type="text" class="form-control" placeholder="E-mail" />
  <button type="submit" class="btn btn-success" name="email">Verstuur</button>
</form>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!--/wrapper-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/jsCall.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
