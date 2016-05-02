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
					<li><a href="homepageController.php">Home</a></li>
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
					<form name="selectionform" action="Controller/Handlers/PersonalInfoHandler.php" method="POST" class="reg-page" onchange="selectionform.submit()" >
						<div class="reg-header">
							<h2>Persoonlijke informatie</h2>
						</div>
						{if $ChangeSuccess}
						<div class='alert alert-success text-center'>
							<strong>Succes!</strong> Uw wachtwoord is veranderd.
						</div>
						{/if}

						{if $ChangeError}
						<div class='alert alert-danger text-center'>
							<strong>Error!</strong> Er is iets fout gegaan met uw wachtwoorden, probeer het opnieuw en controleer de velden zorgvuldig!
						</div>
						{/if}

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
								<button class="btn-u" type="button" id="passwordChange" data-toggle="modal" data-target="#myModal">Wachtwoord veranderen</button>
							</div>
						</div>
					</form>
            </div>
			</div>
		</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Wachtwoord veranderen</h4>
            </div>

            <div class="modal-body">
              <form action="Controller/Handlers/passwordChangeHandler.php" method="post">
								<input type="text" class="form-control margin-bottom-20" value="{$user->email}" name="mail" disabled/>
								<input type="hidden" name="mail" value="{$user->email}" />
								<input type="password" class="form-control margin-bottom-20" placeholder="Huidig wachtwoord" name="currentPassword" minlength="6" required/>
								<input type="password" class="form-control margin-bottom-20" placeholder="Nieuw wachtwoord" name="newPassword" minlength="6" required/>
								<input type="password" class="form-control margin-bottom-20" placeholder="Bevestig nieuw wachtwoord" name="newPasswordConfirm" minlength="6" required/>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn-u">Opslaan</button>
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
