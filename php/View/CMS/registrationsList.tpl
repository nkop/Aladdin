<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registraties</title>
		{include 'view/cms/Assets/head.tpl'}
</head>

<body>
		<!-- start: Header -->

{include 'view/cms/Assets/navbar.tpl'}

	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			
			{include 'view/cms/Assets/mainmenu.tpl'}
			
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Registraties</h2>
					</div>
					
					{if $Succesfull == 1}
		                <div class="alert alert-success">
						  <strong>De registratie is geaccepteerd!</strong> 
						</div>
		                {elseif $Succesfull == 2}
		                <div class="alert alert-danger">
						  <strong>De registratie is geweigerd!</strong>
						</div>
		                {/if}
		                
					<div class="box-content">
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Gebruikersnaam</th>
								  <th>Naam</th>
								  <th>Geboortedatum</th>
								  <th>Email</th>
								  <th>Postcode</th>
								  <th>&nbsp;</th>
							  </tr>
						  </thead>   
						  <tbody>
						  
						  {foreach from=$registrations item=registration}
						  <tr>
						  <td>{$registration->gebruikersnaam}</td>
						  <td>{$registration->voornaam} {$registration->tussenvoegsel} {$registration->achternaam}</td>
						  <td>{$registration->geboortedatum}</td>
						  <td>{$registration->email}</td>
						  <td>{$registration->postcode}</td>
						  <form action="Controller/CMS/Handlers/registrationHandler.php" method="POST">
						   <input type="hidden" name="accountID" id="accountID" value="{$registration->accountid}">
						  <td class="center">
						 
								<button type="submit" name="submit" class="btn btn-success">
                 				<i class="halflings-icon white ok"></i></button>
						  
						  		<button type="submit" name="decline" class="btn btn-danger">
                 				<i class="halflings-icon white remove"></i></button></td>
                 				</form> 
						  </tr>
						  {/foreach}
						  </tbody>

					  </table> 
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		{include 'view/cms/Assets/footer.tpl'}
</body>
</html>
