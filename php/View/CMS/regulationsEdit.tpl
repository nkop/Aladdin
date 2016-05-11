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

				{include '../../View/CMS/Assets/breadcrumb.tpl'}
				<div class="row-fluid sortable" id="naampje">

					<div id="faqq" class="box span12">
						{foreach from=$categorieen item=categorie}
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon edit"></i><span class="break"></span>
								Categorie: <input type="text" name="categorie"
									value="{$categorie.naam}" readonly></input>
							</h2>
						</div>
						{foreach from=$rules item=rule}
						{if $rule.categorie_id == $categorie.id} 
						<div class="control-group hidden-phone">
										<br> <label class="control-label" for="textarea2">Regel: </label>
<form class="form-horizontal" action="Controller/CMS/Handlers/editRegulationsHandler.php" method="post" id="existingrules">
										<div class="controls" style="width: 683px">
											<input type="hidden" name="id" value="{$rule.id}"></input> 
												<textarea name="tekst" rows="4"
												style="width: 100% !important">{$rule.tekst}</textarea>
												<input type="hidden" name="categorie_id" value="{$rule.categorie_id}"></input>
												<br>
										</div>
									</div>
									<div class="form-horizontal">
										<input name="submitregel" type="submit" class="btn btn-primary"
											value="Opslaan"></input> <input name="resetpage" type="submit"
											class="btn" value="Reset"></input>
									</div>
						</form>
						<br>{/if}{/foreach}
						{/foreach}
					</div>
					<br>
					</div>
					</div>
					<!-- End Content Part -->
					</div>
					</div>

{include '../../View/CMS/Assets/footer.tpl'}

</body>
</html>