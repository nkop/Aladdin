<?php
/* Smarty version 3.1.29, created on 2016-03-26 11:00:27
  from "C:\xampp\htdocs\Aladdin\php\View\page_personalinfo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f65dbb2bedf8_96489496',
  'file_dependency' => 
  array (
    '9253aba640312ba88359be75e44fccce8c7b138a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\page_personalinfo.tpl',
      1 => 1458986421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Assets/php/Head.tpl' => 1,
    'file:assets/php/NavTop.php' => 1,
    'file:Assets/php/Footer.php' => 1,
    'file:assets/php/jsCall.php' => 1,
  ),
),false)) {
function content_56f65dbb2bedf8_96489496 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Alladin | Home</title>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>

	<div class="wrapper">    
 	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:assets/php/NavTop.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Persoonlijke informatie</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="">Pages</a></li>
					<li class="active">Persoonlijke informatie</li>
				</ul>
			</div>
			<!--/container-->
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		
		<div class="container content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<form name="selectionform" action="PersonalInfoController.php" method="POST" class="reg-page" onchange="selectionform.submit()" >
						<div class="reg-header">
							<h2>Persoonlijke informatie</h2>
						</div>
					              											
                   		<label>Voornaam</label>
                   		<input type="text" name="FirstNameInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->firstname;?>
" class="form-control margin-bottom-20"> 
							
						<div class="row">
							<div class="col-sm-6">
								<label>Tussenvoegsel</label>
								<input type="text" name="MiddleNameInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->middlename;?>
" class="form-control margin-bottom-20"> 
							</div>
							<div class="col-sm-6">	
								<label>Achternaam</label>
								<input type="text" name="LastNameInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lastname;?>
" class="form-control margin-bottom-20"> 
							</div>
						</div>
						
						<label>Emailadres</label>
						<input type="text" name="EmailInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" class="form-control margin-bottom-20">

						<label>Geboortedatum</label>
						<input type="text" name="BirthdayInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->birthday;?>
" class="form-control margin-bottom-20" disabled>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Straat</label> 
								<input type="text" name="StreetInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->street;?>
" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Huisnummer</label> 
								<input type="number" name="HouseNumberInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->housenumber;?>
" class="form-control margin-bottom-20">
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Postcode</label> 
								<input type="text" name="ZipCodeInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->zipcode;?>
" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Woonplaats</label> 
								<input type="text" name="CityInput" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
" class="form-control margin-bottom-20">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<input type="hidden" name="accountid" id="accountid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->accountid;?>
" >
								<button class="btn-u" name="submit" id="Save" type="submit">Opslaan</button>
							</div>
							<div class="col-sm-6">
								<button class="btn-u" type="submit">Wachtwoord veranderen</button>
							</div>
						</div>
					</form>
            </div>
			</div>
		</div>
		<!--/container-->
		<!--=== End Content Part ===-->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Assets/php/Footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:assets/php/jsCall.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
