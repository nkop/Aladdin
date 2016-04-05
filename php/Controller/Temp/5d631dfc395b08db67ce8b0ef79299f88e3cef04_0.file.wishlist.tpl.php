<?php
/* Smarty version 3.1.29, created on 2016-04-05 10:43:31
  from "C:\xampp\htdocs\Aladdin\php\View\CMS\wishlist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57037ab3596df5_81635589',
  'file_dependency' => 
  array (
    '5d631dfc395b08db67ce8b0ef79299f88e3cef04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\CMS\\wishlist.tpl',
      1 => 1459845809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../View/CMS/navbar.tpl' => 1,
    'file:../../View/CMS/main_menu.tpl' => 1,
  ),
),false)) {
function content_57037ab3596df5_81635589 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Wensenlijst</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../../View/CMS/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../View/CMS/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../../View/CMS/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../../View/CMS/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
		
</head>

<body>
		<!-- start: Header -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../View/CMS/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			
				<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Wensen</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Wensnummer</th>
								  <th>Wens</th>
								  <th>Creatiedatum</th>
								  <th>&nbsp;</th>
							  </tr>
						  </thead>   
						  <tbody>
						  
						  <?php
$_from = $_smarty_tpl->tpl_vars['wishes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_wish_0_saved_item = isset($_smarty_tpl->tpl_vars['wish']) ? $_smarty_tpl->tpl_vars['wish'] : false;
$_smarty_tpl->tpl_vars['wish'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['wish']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wish']->value) {
$_smarty_tpl->tpl_vars['wish']->_loop = true;
$__foreach_wish_0_saved_local_item = $_smarty_tpl->tpl_vars['wish'];
?>
						  <tr>
						  <td><?php echo $_smarty_tpl->tpl_vars['wish']->value->wensenid;?>
</td>
						  <td><?php echo $_smarty_tpl->tpl_vars['wish']->value->tekst;?>
</td>
						  <td><?php echo $_smarty_tpl->tpl_vars['wish']->value->creatie_datum;?>
</td>
						  <td class="center">
								<button type="submit" name="submit" class="btn btn-success">
                 				<i class="halflings-icon white ok"></i></button>
						  
						  		<button type="submit" name="submit" class="btn btn-danger">
                 				<i class="halflings-icon white remove"></i></button></td>
						  </tr>
						  <?php
$_smarty_tpl->tpl_vars['wish'] = $__foreach_wish_0_saved_local_item;
}
if ($__foreach_wish_0_saved_item) {
$_smarty_tpl->tpl_vars['wish'] = $__foreach_wish_0_saved_item;
}
?>
						  </tbody>

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<!-- start: JavaScript-->

		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery-migrate-1.0.0.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery-ui-1.10.0.custom.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/modernizr.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.cookie.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src='../../View/CMS/js/fullcalendar.min.js'><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src='../../View/CMS/js/jquery.dataTables.min.js'><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="../../View/CMS/js/excanvas.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.flot.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.flot.pie.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.flot.stack.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.chosen.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.uniform.min.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.cleditor.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.noty.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.elfinder.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.raty.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.iphone.toggle.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.uploadify-3.1.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.gritter.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.imagesloaded.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.masonry.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.knob.modified.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/counter.js"><?php echo '</script'; ?>
>
	
		<?php echo '<script'; ?>
 src="../../View/CMS/js/retina.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="../../View/CMS/js/custom.js"><?php echo '</script'; ?>
>
	<!-- end: JavaScript-->
	
</body>
</html>
<?php }
}
