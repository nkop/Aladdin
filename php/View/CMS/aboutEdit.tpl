<!DOCTYPE html>
<html lang="en">
<head>
	
	{include 'view/cms/Assets/head.tpl'}
</head>

<body>
		
{include 'view/cms/Assets/navbar.tpl'}
	<!-- start: Header -->
	<div class="container-fluid-full">
		<div class="row-fluid">
				
{include 'view/cms/Assets/mainmenu.tpl'}
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
			{if $succesfull == 1}
		                <div class="alert alert-success">
						  <strong>Succes!</strong> De gegevens zijn succesvol opgeslagen.
						</div>
		                {elseif $succesfull == 2}
		                <div class="alert alert-danger">
						  <strong>Error!</strong> De gegevens zijn niet succesvol opgeslagen, probeer het later opnieuw.
						</div>
		                {/if}
				{include '../../View/CMS/Assets/breadcrumb.tpl'}
				<div class="row-fluid sortable" id="naampje">
						{foreach from=$abouts item=about}
						<form class="form-horizontal" action="Controller/CMS/Handlers/editAboutHandler.php" method="post" id="existingrules">
						<div class="control-group hidden-phone">
							<br> <label class="control-label" for="textarea2">Pas de content aan</label>
							<div class="controls" style="width: 683px">
								<input type="hidden" name="id" value="{$about.id}"></input> 
								<textarea name="tekst" rows="4" style="width: 100% !important">{$about.tekst}</textarea>
								<br>
							</div>
						</div>
									<div class="form-horizontal">
										<input name="submitabout" type="submit" class="btn btn-primary"
											value="Opslaan"></input> <input name="resetpageabout" type="submit"
											class="btn" value="Reset"></input>
									</div>
						
						<br></form>{/foreach}
						
						</div>
						<br>
			</div>
					<!-- End Content Part -->
		</div>
	</div>

{include '../../View/CMS/Assets/footer.tpl'}

</body>
</html>