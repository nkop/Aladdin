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
<link href="../../View/CMS/css/newfaq_popup.css" rel="stylesheet">
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
					
					<form class="form-horizontal"
						action="../../Controller/CMS/editFaqController.php" method="post" id="faqform">
						{foreach from=$categorieen item=categorie}
						<div id="faqq" class="box span12">
							<div class="box-header" data-original-title>
								<h2>
									<i class="halflings-icon edit"></i><span class="break"></span>
									<input type="hidden" name="categorie_id"
										value="{$categorie.id}"></input> Categorie: <input type="text"
										name="categorie" value="{$categorie.header}"></input>
								</h2>
							</div>
							{foreach from=$faqs item=faq} {if $faq.categorie_id ==
							$categorie.id}
							<div class="box-content">
								<fieldset>
									<div class="control-group hidden-phone">
										<br> <label class="control-label" for="textarea2">Vraag: </label>
										<div class="controls">
											<input type="hidden" name="id" value="{$faq.id}"></input> <input
												type="text" name="vraag" value="{$faq.vraag}"></input><br>
											<textarea name="antwoord" id="textarea2" rows="2"
												style="width: 70%">{$faq.antwoord}</textarea>
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
							</div>
							<br> {/if} {/foreach} <input name="newfaq" value="Nieuwe FAQ"
								id="kappa" class="btn btn-primary" type="button"></input> <input
								name="deletecategorie" type="submit" class="btn btn-danger"
								value="Verwijder Categorie"
								onclick="return confirm('Weet je zeker dat je de hele categorie inclusief inhoud wilt verwijderen?')"></input>

						</div>
						<!--/span-->
						{/foreach}
						<input name="nieuwecategorie" type="text" placeholder="Voer hier een nieuwe categorie toe" style="width: 300px"/>
						<input name="nieuwcat" type="submit" class="btn btn-primary" value="Toevoegen"/>
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
		<form class="form" action="../../Controller/CMS/editFaqController.php" id="contact" method="post">
			<h3>FAQ toevoegen</h3>
			<br>
			Vraag:
			<br>
			<input type="text" name="nieuwvraag" id="vraag" placeholder="Bijv: Wat is Aladdin?"/>
			<br>
			Antwoord:
			<br>
			<textarea name="nieuwantwoord" placeholder="Antwoord" id="antwoord" rows="4" style="width: 660px; height: 100px"></textarea>
			<br>
			Categorie:
			<br>
			<select name="nieuwcategorie" id="categorie">
			{foreach from=$categorieen item=categorie}
			<option value="{$categorie.id}">{$categorie.header}</option>
			{/foreach}
			</select>
			<br>
			<br> 
			<input type="button" id="send" name="nieuwfaq" value="Toevoegen" class="btn btn-primary"/> 
			<input type="button" id="cancel" value="Cancel" class="btn"/>
			<br>
		</form>
	</div>


	<footer>

		<p>
			<span style="text-align: left; float: left">&copy; 2016 <a
				href="aladdin.nl" alt="Bootstrap_Metro_Dashboard">Hoi</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->


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

	<script src="../../View/CMS/js/newfaq_popup.js"></script>
	<script src="http://js.nicedit.com/nicEdit-latest.js"
		type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	<!-- end: JavaScript-->

</body>
</html>
