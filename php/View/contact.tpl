<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Contact | Aladdin</title> {include '../view/assets/php/Head.tpl'}
</head>

<body class="header-fixed">

	<div class="wrapper">
		{include '../view/assets/php/NavTop.tpl'}

		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Contact pagina</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<a
			href="https://www.google.nl/maps/place/Avans+Hogeschool/@51.6851577,5.2912576,14.5z/data=!4m2!3m1!1s0x47c6ee88559eae79:0x5d7ba4e903f8f190">
			<img class="full_width" src="View/Images/map.JPG" alt="" />
		</a>
		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<div class="headline">
						<h2>Contact formulier</h2>
					</div>
					<p>Neem hier contact met ons op.</p>
					<br> {if $ContactError}
					<div class='alert alert-danger text-center'>
						<strong>Error!</strong> Er is iets fout gegaan! Controleer uw
						internet verbinding!
					</div>
					{/if} {if $ContactSuccess}
					<div class='alert alert-success text-center'>
						<strong>Succes!</strong> Uw bericht is succesvol verstuurd!
					</div>
					{/if}
					<form class="form-horizontal" role="form" method="post"
						action="../php/Controller/Handlers/contactHandler.php">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Naam</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name"
									placeholder="Voor en achternaam" value="" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email"
									placeholder="example@domain.com" value="" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Bericht</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message"
									required="required" placeholder="Uw bericht" cols=""></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Verstuur"
									class="btn-u">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<!-- Will be used to display an alert to the user-->
							</div>
						</div>
					</form>
				</div>
				<!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline">
						<h2>Contact</h2>
					</div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="mailto:aladdingroepdcontact@gmail.com"><i
								class="fa fa-envelope"></i>aladdingroepdcontact@gmail.com</a></li>
					</ul>

					<!-- Why we are? -->

				</div>
				<!--/col-md-3-->
			</div>
			<!--/row-->
		</div>
		<!--/container-->
		<!--=== End Content Part ===-->

		{include '../view/assets/php/Footer.tpl'}

	</div>
	<!--/wrapepr-->

	{include '../view/assets/php/jsCall.tpl'}
	<script type="text/javascript"></script>
	<!--[if lt IE 9]>
    <script src="../view/assets/plugins/respond.js"></script>
    <script src="../view/assets/plugins/html5shiv.js"></script>
    <script src="../view/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
