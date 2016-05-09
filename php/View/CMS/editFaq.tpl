<!DOCTYPE html>
<html lang="en">
<head>

{include '../../View/CMS/Assets/head.tpl'}

</head>

<body>
	{include 'View/CMS/Assets/navbar.tpl'}
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			{include 'View/CMS/Assets/mainMenu.tpl'}

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


				{include 'View/CMS/Assets/breadcrumb.tpl'}

				<div class="row-fluid sortable" id="naampje">

					<div id="faqq" class="box span12">
						{foreach from=$categorieen item=categorie}
						<div class="box-header" data-original-title>
							<h2>
								<i class="halflings-icon edit"></i><span class="break"></span>
								Categorie: <input type="text" name="categorie"
									value="{$categorie.header}" readonly></input>
							</h2>
						</div>
						{foreach from=$faqs item=faq} {if $faq.categorie_id ==
						$categorie.id}
						<div class="box-content">
							<form class="form-horizontal"
								action="Controller/CMS/Handlers/editFaqHandler.php"
								method="post">
								<fieldset>
									<div class="control-group hidden-phone">
										<br> <label class="control-label" for="textarea2">Vraag: </label>

										<div class="controls" style="width: 683px">
											<input type="hidden" name="id" value="{$faq.id}"></input> <input
												type="text" name="vraag" value="{$faq.vraag}"
												style="width: 95.7%"></input><br>
											<textarea name="antwoord" id="textarea2" rows="4"
												style="width: 100% !important">{$faq.antwoord}</textarea>
											<input type="hidden" name="categorie_id"
												value="{$categorie.id}">
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
							</form>
						</div>
						<br> {/if} {/foreach}
						<form class="form-horizontal"
							action="Controller/CMS/Handlers/editFaqHandler.php" method="post">
							<input name="newfaq" value="Nieuwe FAQ" id="kappa"
								class="btn btn-primary" type="button"></input> 
								<input type="hidden" value="{$categorie.id}" name="categorie_id"/>
								<input
								name="deletecategorie" type="submit" class="btn btn-danger"
								value="Verwijder Categorie"
								onclick="return confirm('Weet je zeker dat je de hele categorie inclusief inhoud wilt verwijderen?')"></input>
						</form>
						{/foreach}
					</div>
					<!--/span-->

					<!-- 					</form>		 -->

					<form class="form-horizontal"
						action="Controller/CMS/Handlers/editFaqHandler.php" method="post"
						id="nieuwecategorieform">
						<input name="nieuwecategorie" type="text"
							placeholder="Voer hier een nieuwe categorie toe"
							style="width: 300px" /><br> <input class="btn" name="icon"
							id="leggo" data-toggle="dropdown" Value="Zoek hier een icon"> <input
							name="nieuwcat" type="submit" class="btn btn-primary"
							value="Toevoegen" />
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
		<form class="form" action="Controller/CMS/Handlers/editFaqHandler.php"
			id="contact" method="post">
			<h3>FAQ toevoegen</h3>
			<br> Vraag: <br> <input type="text" name="nieuwvraag" id="vraag"
				placeholder="Bijv: Wat is Aladdin?" required="required"/> <br> Antwoord: <br>
			<textarea name="nieuwantwoord" placeholder="Antwoord" id="antwoord"
				rows="4" style="width: 660px; height: 100px" ></textarea>
			<br> Categorie: <br> <select required="required" name="nieuwcategorie" id="categorie">
				{foreach from=$categorieen item=categorie}
				<option value="{$categorie.id}">{$categorie.header}</option>
				{/foreach}
			</select> <br> <br> <input type="submit" id="send" name="nieuwfaq"
				value="Toevoegen" class="btn btn-primary" /> <input type="button"
				id="cancel" value="Cancel" class="btn" /> <br>
		</form>
	</div>

{include '../../View/CMS/Assets/footer.tpl'}

</body>
</html>
