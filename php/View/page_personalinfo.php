<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Alladin | Home</title>
<?php include 'Assets/php/Head.php';?>
</head>

<body>

	<div class="wrapper">    
<?php include 'assets/php/NavTop.php';?>
<?php include '../DB/Database.class.php';?>
<?php include '../Controller/PersonalInfo.php'?>
<?php include '../Controller/UserLogin.php'?>
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
					<form name="selectionform" action="page_personalinfo.php" method="POST" class="reg-page" onchange="selectionform.submit()" >
						<div class="reg-header">
							<h2>Persoonlijke informatie</h2>
						</div>
						
						<?php
					$username = $_SESSION['email'];
					$db = Database::getInstance ();
					$mysqli = $db->getConnection ();
					$sql_query = "select * from account where email = '$username' ";
					$result = $mysqli->query ( $sql_query );
					while ( $row = $result->fetch_object() ) {
						$ID = $row->accountid;
						$Firstname = $row->voornaam;
						$Middlename = $row->tussenvoegsel;
						$Lastname = $row->achternaam;
						$Emailaddress = $row->email;
						$ZipCode = $row->postcode;
						$City = $row->woonplaats;
						$Street = $row->straatnaam;
						$Birthday = $row->geboortedatum;
						$HouseNumber = $row->huisnummer;
					}
					$result->close ();
					?>
					              											
                   		<label>Voornaam</label>
                   		<input type="text" name="FirstNameInput" value="<?php echo $Firstname?>" class="form-control margin-bottom-20"> 
							
						<div class="row">
							<div class="col-sm-6">
								<label>Tussenvoegsel</label>
								<input type="text" name="MiddleNameInput" value="<?php echo $Middlename?>" class="form-control margin-bottom-20"> 
							</div>
							<div class="col-sm-6">	
								<label>Achternaam</label>
								<input type="text" name="LastNameInput" value="<?php echo $Lastname?>" class="form-control margin-bottom-20"> 
							</div>
						</div>
						
						<label>Emailadres</label>
						<input type="text" name="EmailInput" value="<?php echo $Emailaddress?>" class="form-control margin-bottom-20">

						<label>Geboortedatum</label>
						<input type="text" name="BirthdayInput" value="<?php echo $Birthday?>" class="form-control margin-bottom-20" disabled>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Straat</label> 
								<input type="text" name="StreetInput" value="<?php echo $Street?>" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Huisnummer</label> 
								<input type="text" name="HouseNumberInput" value="<?php echo $HouseNumber?>" class="form-control margin-bottom-20">
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<label>Postcode</label> 
								<input type="text" name="ZipCodeInput" value="<?php echo $ZipCode?>" class="form-control margin-bottom-20">
							</div>
							<div class="col-sm-6">
								<label>Woonplaats</label> 
								<input type="text" name="CityInput" value="<?php echo $City?>" class="form-control margin-bottom-20">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<input type="hidden" name="accountid" id="accountid" value=<?php echo $ID ?> >
								<button class="btn-u" name="submit" id="Save" type="submit">Opslaan</button>
							</div>
							<div class="col-sm-6">
								<button class="btn-u" type="submit">Wachtwoord veranderen</button>
							</div>
						</div>
					</form>
               <?php
				if (isset ( $_POST ['submit'] ) && isset ( $_POST ['accountid'] ) 
						&& isset ( $_POST ['FirstNameInput'] ) && isset ( $_POST ['LastNameInput'] ) && isset ( $_POST ['ZipCodeInput'] ) && isset ( $_POST ['HouseNumberInput'] ) && isset ( $_POST ['StreetInput'] ) && isset ( $_POST ['CityInput'] )&& isset ( $_POST ['EmailInput'] )) {
							validateData( $_POST ['accountid'], $_POST ['FirstNameInput'], $_POST ['MiddleNameInput'], $_POST ['LastNameInput'], $_POST ['ZipCodeInput'], $_POST ['HouseNumberInput'], $_POST ['StreetInput'], $_POST ['CityInput'], $_POST['EmailInput'] );
							echo '<META HTTP-EQUIV="Refresh" Content="0; URL=page_personalinfo.php">';
							exit;
						}
			   ?> 
            </div>
			</div>
		</div>
		<!--/container-->
		<!--=== End Content Part ===-->

<?php include 'Assets/php/Footer.php';?>
</div>

<?php include 'assets/php/jsCall.php';?>

</body>
</html>
