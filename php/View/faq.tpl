<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>FAQ | Aladdin</title> {include
file='../View/Assets/php/Head.tpl'}
</head>

<body class="header-fixed" s>

	<div class="wrapper">
		{include file='../View/Assets/php/NavTop.tpl'}


		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Veelgestelde vragen</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.php?controller=home&action=index">Homepagina</a></li>
					<li class="active">Veelgestelde vragen</li>
				</ul>
			</div>
			<!--/container-->
		</div>
		<!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			{foreach from=$categorieen item=categorie}
			<div class="panel-group " id="accordion">
				<div class="faqHeader">
					<i class="fa {$categorie.icon}"></i> {$categorie.header}
				</div>
				{foreach from=$faqs item=faq} {if $faq.categorie_id ==
				$categorie.id}
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse"
								data-parent="#accordion" href="#collapse{$faq.id}">
								{$faq.vraag} </a>
						</h4>
					</div>
					<div id="collapse{$faq.id}" class="panel-collapse collapse">
						<div class="panel-body">{$faq.antwoord}</div>
					</div>
				</div>
				{/if} {/foreach}
			</div>
			{/foreach}
		</div>
		<!--=== End Content Part ===-->
		{include file='../View/Assets/php/footer.tpl'}
	</div>
	<!--/wrapper-->
	{include file='../view/Assets/php/jsCall.tpl'}

</body>
</html>
