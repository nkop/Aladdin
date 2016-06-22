<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Alladin | Wensen</title> {include
file='../View/Assets/php/Head.tpl'}
</head>

<body>

	<div class="wrapper">
		{include file='../View/Assets/php/NavTop.tpl'}


		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Wensen</h1>
				<ul class="pull-right breadcrumb">
					<li><a
						href="index.php?controller=homepageController&action=index">Homepagina</a></li>
					<li class="active">Wensen</li>
				</ul>
			</div>
			<!--/container-->
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		{if ($text =='Logout')}
		<div class="container content minimalheight">
			<div class="panel-group">


				{if (isset($pass))} {if $pass == 'true'}
				<div class="alert alert-success">
					<strong>Gelukt!</strong>
				</div>
				{/if} {if $pass == 'false'}
				<div class="alert alert-danger">
					<strong>Error!</strong> er ging iets niet goed
				</div>
				{/if} {/if} {if $wishesArray|@count lt 3}
				<div class="faqHeader">
					<i class="fa fa-heart"></i> Vul uw wens(en) in
				</div>
				<div>
					<div>Extra inspiratie tags</div>
					<div>
						<select size="10" class="form-control"> {foreach
							from=$tagsArray item=tag}
							<option disabled>{$tag->tagName}</option> {/foreach}
						</select>
					</div>
				</div>
				<hr>
				<div class="">
					<form class="reg-page"
						action="Controller/Handlers/WishesHandler.php" method="post">
						<div>
							{for $wishCounter=1 to (3-$wishesArray|@count)}
							<div class="panel panel-default">
								<div class="panel-heading accordion-toggle"
									data-toggle="collapse" data-parent="#accordion"
									href="#collapse{$wishCounter}">
									<h4 class="panel-title">
										Wens {$wishCounter}:<span class="color-red">*</span>
									</h4>
								</div>
								<div id="collapse{$wishCounter}" class="panel-collapse collapse">
									<div class="panel-body">
										<label> Wens: </label> <input type="text"
											name="wens{$wishCounter}"
											class="form-control margin-bottom-20" required="required">
										<label> Bijbehorende categori&euml;n: </label>
										<fieldset>
											{foreach from=$tagsArray item=tag}
											<div class="col col-lg-2">
												<label class="checkbox-inline"><input
													type="checkbox" name="tags{$wishCounter}[]" value={$tag->tagId}
													class=""/>{$tag->tagName}</label>
											</div>
											{/foreach}
										</fieldset>
									</div>
								</div>
							</div>
							{/for}
						</div>
						<div class="col-lg-12 text-right panel-heading">
							<button class="btn-u" type="submit" name="save">Opslaan</button>
						</div>
					</form>
					{if !empty($wishesArray)}
					<div class="col-lg-12 text-right">
						<hr>
					</div>
					{/if}
				</div>
				{/if} {if !empty($wishesArray)}
				<div class="faqHeader ">
					<i class="fa fa-heart"></i> Dit zijn uw wensen
				</div>
				<div class="">
					<table class="table table-striped">
						<tr>
							<th class="col col-md-6">Wens</th>
							<th class="col col-md-4">Categori&euml;n</th>
							<th class=" class=" colcol-md-2" wishestableright">Status</th>
						</tr>
						{foreach from=$wishesArray item=wish}
						<tr>
							<td class="col col-md-6">{$wish->wishtext}</td>
							<td class="col col-md-4">{foreach from=$wish->tags item=tag}
								{$tag->tagName}, {/foreach}</td>
							<td class=" class=" colcol-md-2" wishestableright">{$wish->wishstatus}</td>
						</tr>
						{/foreach}
					</table>
				</div>
				{/if}
			</div>
			{else}
			<div class="container content">
				<div class="panel-group">
					<div class="faqHeader">
						<i class="fa fa-exclamation"></i> Log in om deze pagina te
						gebruiken
					</div>
				</div>
				{/if}
				<!--=== End Content Part ===-->
			</div>

			{include file='../View/Assets/php/footer.tpl'}
		</div>
		<!--/wrapper-->
		{include file='../view/Assets/php/jsCall.tpl'}
		<script type="text/javascript">
			$(document).ready(function() {
				$("[name=save]").click(function() {
					console.log("hoi");
					checked = $("input[type=checkbox]:checked").length;

					if (!checked) {
						alert("Je moet minstens een tag aanvinken!");
						return false;
					}

				});
			});
		</script>

	</div>
</body>
</html>
