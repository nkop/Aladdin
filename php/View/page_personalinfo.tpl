<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Profiel | Aladdin</title>
{include '../view/Assets/php/Head.tpl'}
</head>
<body class="header-fixed">

	<div class="wrapper">    
 	{include '../view/assets/php/NavTop.tpl'}
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
                   		<input type="text" name="FirstNameInput" value="{$user->firstname}" class="form-control margin-bottom-20"> 
							
						<div class="row">
							<div class="col-sm-6">
								<label>Tussenvoegsel</label>
								<input type="text" name="MiddleNameInput" value="{$user->middlename}" class="form-control margin-bottom-20"> 
							</div>
							<div class="col-sm-6">	
								<label>Achternaam</label>
								<input type="text" name="LastNameInput" value="{$user->lastname}" class="form-control margin-bottom-20"> 
							</div>
						</div>
						
						<label>Emailadres</label>
						<input type="text" name="EmailInput" value="{$user->email}" class="form-control margin-bottom-20">

						<label>Geboortedatum</label>
						<input type="text" name="BirthdayInput" value="{$user->birthday}" class="form-control margin-bottom-20" disabled>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Straat</label> 
								<input type="text" name="StreetInput" value="{$user->street}" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Huisnummer</label> 
								<input type="number" name="HouseNumberInput" value="{$user->housenumber}" class="form-control margin-bottom-20">
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Postcode</label> 
								<input type="text" name="ZipCodeInput" value="{$user->zipcode}" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Woonplaats</label> 
								<input type="text" name="CityInput" value="{$user->city}" class="form-control margin-bottom-20">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<input type="hidden" name="accountid" id="accountid" value="{$user->accountid}" >
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

{include '../view/Assets/php/Footer.tpl'}
</div>

{include '../view/assets/php/jsCall.tpl'}

</body>
</html>
