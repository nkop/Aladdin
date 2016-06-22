<html>
<head>
<title>Over ons | Aladdin</title> {include
'../view/Assets/php/Head.tpl'}


</head>

<body>
	{include '../view/Assets/php/NavTop.tpl'}

	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs">
		<div class="container">
			<h1 class="pull-left">Over Ons</h1>
			<ul class="pull-right breadcrumb">
				<li><a
					href="index.php?controller=homepageController&action=index">Homepagina</a></li>
				<li class="active">Over Ons</li>
			</ul>
		</div>
		<!--/container-->
	</div>
	<!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->

	<!-- Content Part -->
	<div class="container content">
		<div class="row">
			{foreach from=$abouts item=tekst}
			<div class="col-md-12">
				<h2 class="heading-sm">
					<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-heart"></i>
					<span>Aladdin</span> <a></a>
				</h2>
				<p>{$tekst.tekst}</p>
			</div>
			{/foreach}


		</div>
	</div>
	<!-- End Content Part -->
	{include '../view/Assets/php/Footer.tpl'}
</body>
</html>