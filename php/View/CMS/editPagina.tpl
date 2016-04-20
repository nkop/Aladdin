<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title>Alladin CMS</title>
<meta name="description" content="Bootstrap Metro Dashboard">
<meta name="author" content="Dennis Ji">
<meta name="keyword"
	content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="../../View/CMS/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../../View/CMS/css/bootstrap-responsive.min.css"
	rel="stylesheet">
<link id="base-style" href="../../View/CMS/css/style.css"
	rel="stylesheet">
<link id="base-style-responsive"
	href="../../View/CMS/css/style-responsive.css" rel="stylesheet">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
	rel='stylesheet' type='text/css'>
<!-- end: CSS -->


<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
	{include './navbar.tpl'}
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			{include './main_menu.tpl'}

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


				{include './breadcrumb.php'}

				<div class="row-fluid sortable">
					{foreach from=$teksten item=tekst}
					<form class="form-horizontal" action="../../Controller/CMS/editHomeController.php"
						method="post">
						<div class="box span12">
							<div class="box-header" data-original-title>
								<h2>
									<i class="halflings-icon edit"></i><span class="break"></span>
									<input type="hidden" name="tekstvakid" value="{$tekst.tekstvakid}"></input>
									<input type="text" name="header" value="{$tekst.header}"></input>
								</h2>
							</div>
							<div class="box-content">								
									<fieldset>
										<div class="control-group hidden-phone">
											<label class="control-label" for="textarea2">Pas de content	aan</label>
											<div class="controls">
												<textarea name="tekstvaktekst" id="textarea2" rows="5" style="width: 80%">{$tekst.tekstvaktekst}</textarea>
											</div>
										</div>
										<div class="form-actions">
											<input name="submit" type="submit" class="btn btn-primary" value="Opslaan"></input>
											<input name="reset" type="reset" class="btn"></button>
										</div>
									</fieldset>

							</div>
						</div>
						<!--/span-->
					</form>
					{/foreach}
				</div>

				<!--/row-->
			</div>
			<!--/.fluid-container-->

			<!-- end: Content -->
		</div>
		<!--/#content.span10-->
	</div>
	<!--/fluid-row-->

	<footer>

		<p>
			<span style="text-align: left; float: left">&copy; 2016 <a
				href="aladdin.nl" alt="Bootstrap_Metro_Dashboard">Hoi</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->
	
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						

	<script src="../../View/CMS/js/jquery-1.9.1.min.js"></script>
	<script src="../../View/CMS/js/jquery-migrate-1.0.0.min.js"></script>

	<script src="../../View/CMS/js/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="../../View/CMS/js/jquery.ui.touch-punch.js"></script>

	<script src="../../View/CMS/js/modernizr.js"></script>

	<script src="../../View/CMS/js/bootstrap.min.js"></script>

	<script src="../../View/CMS/js/jquery.cookie.js"></script>

	<script src='../../View/CMS/js/fullcalendar.min.js'></script>

	<script src='../../View/CMS/js/jquery.dataTables.min.js'></script>

	<script src="../../View/CMS/js/excanvas.js"></script>
	<script src="../../View/CMS/js/jquery.flot.js"></script>
	<script src="../../View/CMS/js/jquery.flot.pie.js"></script>
	<script src="../../View/CMS/js/jquery.flot.stack.js"></script>
	<script src="../../View/CMS/js/jquery.flot.resize.min.js"></script>

	<script src="../../View/CMS/js/jquery.chosen.min.js"></script>

	<script src="../../View/CMS/js/jquery.uniform.min.js"></script>

	<script src="../../View/CMS/js/jquery.cleditor.min.js"></script>

	<script src="../../View/CMS/js/jquery.noty.js"></script>

	<script src="../../View/CMS/js/jquery.elfinder.min.js"></script>

	<script src="../../View/CMS/js/jquery.raty.min.js"></script>

	<script src="../../View/CMS/js/jquery.iphone.toggle.js"></script>

	<script src="../../View/CMS/js/jquery.uploadify-3.1.min.js"></script>

	<script src="../../View/CMS/js/jquery.gritter.min.js"></script>

	<script src="../../View/CMS/js/jquery.imagesloaded.js"></script>

	<script src="../../View/CMS/js/jquery.masonry.min.js"></script>

	<script src="../../View/CMS/js/jquery.knob.modified.js"></script>

	<script src="../../View/CMS/js/jquery.sparkline.min.js"></script>

	<script src="../../View/CMS/js/counter.js"></script>

	<script src="../../View/CMS/js/retina.js"></script>

	<script src="../../View/CMS/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
