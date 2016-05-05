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

			{include 'view/cms/Assets/mainMenu.tpl'}

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


				{include 'view/cms/Assets/breadcrumb.tpl'}

				<div class="row-fluid sortable">
					{foreach from=$teksten item=tekst}
					<form class="form-horizontal" action="Controller/CMS/Handlers/editHomeHandler.php"
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

{include 'view/cms/Assets/footer.tpl'}

</body>
</html>
