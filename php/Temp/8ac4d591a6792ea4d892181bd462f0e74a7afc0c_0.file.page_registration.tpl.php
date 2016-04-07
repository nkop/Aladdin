<?php
/* Smarty version 3.1.29, created on 2016-03-25 17:28:22
  from "C:\xampp\htdocs\Aladdin\php\View\page_registration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f567260364b8_11501497',
  'file_dependency' => 
  array (
    '8ac4d591a6792ea4d892181bd462f0e74a7afc0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\page_registration.tpl',
      1 => 1458923300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Assets/php/Head.tpl' => 1,
  ),
),false)) {
function content_56f567260364b8_11501497 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<?php ';?>include 'Assets/php/Head.tpl.php';<?php echo '?>';?>

</head>

<body>

<div class="wrapper">
<?php echo '<?php ';?>include 'assets/php/NavTop.php';<?php echo '?>';?>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Registration</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Pages</a></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page" action="../Register/InsertController.php" method="post">
                    <div class="reg-header">
                        <h2>Registreer</h2>
                        <p>Heb je al een account? <a href="page_login.html" class="color-green">Login</a></p>
                    </div>

                    <label>Voornaam<span class="color-red">*</span></label>
                    <input type="text" name="voornaam" class="form-control margin-bottom-20" required="required">

                   	<label>Tussenvoegsel</label>
                    <input type="text" name="tussenvoegsel" class="form-control margin-bottom-20">

                    <label>Achternaam<span class="color-red">*</span></label>
                    <input type="text" name="achternaam" class="form-control margin-bottom-20" required="required">

                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" name="email" class="form-control margin-bottom-20" required="required">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password <span class="color-red">*</span></label>
                            <input id="password" type="password" name="wachtwoord" class="form-control margin-bottom-20" required="required">
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password <span class="color-red">*</span></label>
                            <input type="password" name="confirmwachtwoord" class="form-control margin-bottom-20" required="required" oninput="check(this)" >
                        </div>
                    </div>

                    <hr>

                    <label>Geboortedatum (dd-mm-yyyy)<span class="color-red">*</span></label>
                    <div class="row">
                    	<div class="col-sm-3">
                    		<input type="number" name="dag" class="form-control margin-bottom-20" min="0" max="31" placeholder="B.v: 09" required="required" maxlength="2">
                    	</div>

                    	<div class="col-sm-3">
                    		<input type="number" name="maand" class="form-control margin-bottom-20" min="0" max="12" placeholder="B.v: 03" required="required" maxlength="2">
                    	</div>

                    	<div class="col-sm-3">
                    		<input type="number" name="jaar" class="form-control margin-bottom-20" min="1900" max="2016" placeholder="B.v: 2016" required="required" maxlength="4">
                    	</div>
                    </div>



                   <div class="row">
                   		<div class="col-sm-6">
                    		<label>Straatnaam<span class="color-red">*</span></label>
                    		<input type="text" name="straatnaam" class="form-control margin-bottom-20" required="required">
                   		</div>
                   		<div class="col-sm-6">
                    		<label>Huisnummer<span class="color-red">*</span></label>
                    		<input type="text" name="huisnummer" class="form-control margin-bottom-20" required="required">
                    	</div>
                   </div>
                    <label>Postcode<span class="color-red">*</span></label>
                    <input type="text" name="postcode" class="form-control margin-bottom-20" required="required">

                    <label>Woonplaats<span class="color-red">*</span></label>
                    <input type="text" name="woonplaats" class="form-control margin-bottom-20" required="required">

                    <label>Geslacht<span class="color-red">*</span></label>
                    	<select class="form-control margin-bottom-20" name="geslacht">
                    		<option value="m">Man</option>
                    		<option value="v">Vrouw</option>
                    	</select>
                    <hr>

                    <div class="row">
                        <div class="col-lg-6 checkbox">
                            <label>
                                <input type="checkbox" required="required">
                                I read <a href="page_terms.html" class="color-green">Terms and Conditions</a>
                            </label>
                        </div>
                        <?php echo '<script'; ?>
 src="../View/Assets/js/passwordCheck.js"><?php echo '</script'; ?>
>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit" name="register">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->

<?php echo '<?php ';?>include 'Assets/php/Footer.php';<?php echo '?>';?>
</div>

<?php echo '<?php ';?>include 'assets/php/jsCall.php';<?php echo '?>';?>

</body>
</html>
<?php }
}
