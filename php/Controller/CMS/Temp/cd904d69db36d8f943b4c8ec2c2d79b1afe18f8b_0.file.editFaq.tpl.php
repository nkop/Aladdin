<?php
/* Smarty version 3.1.29, created on 2016-05-07 11:45:02
  from "C:\xampp\htdocs\Aladdin\php\View\CMS\editFaq.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572db91e6cdb98_82762880',
  'file_dependency' => 
  array (
    'cd904d69db36d8f943b4c8ec2c2d79b1afe18f8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\CMS\\editFaq.tpl',
      1 => 1462540678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../View/CMS/Assets/head.tpl' => 1,
    'file:../../View/CMS/Assets/navbar.tpl' => 1,
    'file:../../View/CMS/Assets/mainMenu.tpl' => 1,
    'file:../../View/CMS/Assets/breadcrumb.tpl' => 1,
    'file:../../View/CMS/Assets/footer.tpl' => 1,
  ),
),false)) {
function content_572db91e6cdb98_82762880 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/Assets/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>

<body>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/Assets/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/Assets/mainMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>
						You need to have <a href="http://en.wikipedia.org/wiki/JavaScript"
							target="_blank">JavaScript</a> enabled to use this site.
					</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/Assets/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


				<div class="row-fluid sortable" id="naampje">

					<!-- 					<form class="form-horizontal" -->
					<!-- 						action="../../Controller/CMS/editFaqController.php" method="post" id="faqform"> -->

					<div id="faqq" class="box span12">
						<?php
$_from = $_smarty_tpl->tpl_vars['categorieen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorie_0_saved_item = isset($_smarty_tpl->tpl_vars['categorie']) ? $_smarty_tpl->tpl_vars['categorie'] : false;
$_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
$__foreach_categorie_0_saved_local_item = $_smarty_tpl->tpl_vars['categorie'];
?>
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon edit"></i><span class="break"></span>
								Categorie: <input type="text" name="categorie"
									value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['header'];?>
" readonly></input>
							</h2>
						</div>
						<?php
$_from = $_smarty_tpl->tpl_vars['faqs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_faq_1_saved_item = isset($_smarty_tpl->tpl_vars['faq']) ? $_smarty_tpl->tpl_vars['faq'] : false;
$_smarty_tpl->tpl_vars['faq'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['faq']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['faq']->value) {
$_smarty_tpl->tpl_vars['faq']->_loop = true;
$__foreach_faq_1_saved_local_item = $_smarty_tpl->tpl_vars['faq'];
?> <?php if ($_smarty_tpl->tpl_vars['faq']->value['categorie_id'] == $_smarty_tpl->tpl_vars['categorie']->value['id']) {?>
						<div class="box-content">
							<form class="form-horizontal"
								action="../../Controller/CMS/editFaqController.php"
								method="post">
								<fieldset>
									<div class="control-group hidden-phone">
										<br> <label class="control-label" for="textarea2">Vraag: </label>

										<div class="controls" style="width: 683px">
											<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
"></input> <input
												type="text" name="vraag" value="<?php echo $_smarty_tpl->tpl_vars['faq']->value['vraag'];?>
"
												style="width: 95.7%"></input><br>
											<textarea name="antwoord" id="textarea2" rows="4"
												style="width: 100% !important"><?php echo $_smarty_tpl->tpl_vars['faq']->value['antwoord'];?>
</textarea>
											<input type="hidden" name="categorie_id"
												value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
">
										</div>
									</div>
									<div class="form-actions">
										<input name="submitfaq" type="submit" class="btn btn-primary"
											value="FAQ opslaan"></input> <input name="reset" type="reset"
											class="btn"></input> <input name="deletefaq" type="submit"
											class="btn btn-danger" value="Verwijderen"
											onclick="return confirm('Weet je zeker dat je de FAQ wilt verwijderen?')"></input>
									</div>
								</fieldset>
							</form>
						</div>
						<br> <?php }?> <?php
$_smarty_tpl->tpl_vars['faq'] = $__foreach_faq_1_saved_local_item;
}
if ($__foreach_faq_1_saved_item) {
$_smarty_tpl->tpl_vars['faq'] = $__foreach_faq_1_saved_item;
}
?>
						<form class="form-horizontal"
							action="../../Controller/CMS/editFaqController.php" method="post">
							<input name="newfaq" value="Nieuwe FAQ" id="kappa"
								class="btn btn-primary" type="button"></input> <input
								name="deletecategorie" type="submit" class="btn btn-danger"
								value="Verwijder Categorie"
								onclick="return confirm('Weet je zeker dat je de hele categorie inclusief inhoud wilt verwijderen?')"></input>
						</form>
						<?php
$_smarty_tpl->tpl_vars['categorie'] = $__foreach_categorie_0_saved_local_item;
}
if ($__foreach_categorie_0_saved_item) {
$_smarty_tpl->tpl_vars['categorie'] = $__foreach_categorie_0_saved_item;
}
?>
					</div>
					<!--/span-->

					<!-- 					</form>		 -->

					<form class="form-horizontal"
						action="../../Controller/CMS/editFaqController.php" method="post"
						id="nieuwecategorieform">
						<input name="nieuwecategorie" type="text"
							placeholder="Voer hier een nieuwe categorie toe"
							style="width: 300px" /><br> <input class="btn" name="icon"
							id="leggo" data-toggle="dropdown" Value="Zoek hier een icon"> <input
							name="nieuwcat" type="submit" class="btn btn-primary"
							value="Toevoegen" />
					</form>
				</div>

				<!--/row-->
			</div>
			<!--/.fluid-container-->

			<!-- end: Content -->
		</div>
		<!--/#content.span10-->
	</div>
	<!--/fluid-row-->
	<!--Contact Form -->
	<div id="contactdiv" data-role="popup" class="ui-content">
		<form class="form" action="../../Controller/CMS/editFaqController.php"
			id="contact" method="post">
			<h3>FAQ toevoegen</h3>
			<br> Vraag: <br> <input type="text" name="nieuwvraag" id="vraag"
				placeholder="Bijv: Wat is Aladdin?" /> <br> Antwoord: <br>
			<textarea name="nieuwantwoord" placeholder="Antwoord" id="antwoord"
				rows="4" style="width: 660px; height: 100px"></textarea>
			<br> Categorie: <br> <select name="nieuwcategorie" id="categorie">
				<?php
$_from = $_smarty_tpl->tpl_vars['categorieen']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorie_2_saved_item = isset($_smarty_tpl->tpl_vars['categorie']) ? $_smarty_tpl->tpl_vars['categorie'] : false;
$_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
$__foreach_categorie_2_saved_local_item = $_smarty_tpl->tpl_vars['categorie'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['header'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['categorie'] = $__foreach_categorie_2_saved_local_item;
}
if ($__foreach_categorie_2_saved_item) {
$_smarty_tpl->tpl_vars['categorie'] = $__foreach_categorie_2_saved_item;
}
?>
			</select> <br> <br> <input type="submit" id="send" name="nieuwfaq"
				value="Toevoegen" class="btn btn-primary" /> <input type="button"
				id="cancel" value="Cancel" class="btn" /> <br>
		</form>
	</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/Assets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
