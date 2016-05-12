<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gebruikerslijst</title>
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Gebruikers</h2>
					</div>
					<div class="box-content">
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Gebruikersnaam</th>
								  <th>Geboortedatum</th>
								  <th>Email</th>
								  <th>&nbsp;</th>
							  </tr>
						  </thead>   
						  <tbody>
						  
						  {foreach from=$users item=user}
						  <tr>
						  <td>{$user->gebruikersnaam}</td>
						  <td>{$user->geboortedatum}</td>
						  <td>{$user->email}</td>
						  <form action="Controller/CMS/Handlers/userHandler.php" method="POST">
						   <input type="hidden" name="userID" id="userID" value="{$user->accountid}">
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
