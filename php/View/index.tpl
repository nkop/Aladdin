<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Home | Aladdin</title> {include 'view/Assets/php/Head.tpl'}


</head>

<body class="header-fixed">

	<div class="wrapper">
		{include 'view/Assets/php/NavTop.tpl'}


		<!--=== Slider ===-->
		<div id="layerslider"
			style="width: 100%; height: 500px; margin: 0px auto;">

			{foreach from=$banners item=banner}
			<div class="ls-slide"
				data-ls="slidedelay:6000;transition2d:{$slideEffect};">
				<img src="{$banner->afbeelding_groot|replace:'../../../':''}"
					class="ls-bg" alt="Slide background" /> {if
				$banner->afbeelding_klein != ""} <img
					src="{$banner->afbeelding_klein|replace:'../../../':''}"
					alt="Slider image" class="ls-s-1" style="top: 62px; left: 29%;"
					data-ls="offsetxin:left; durationin:1500; delayin:1500; fadein:false; offsetxout:left; durationout:1000; fadeout:false;">
				{/if} {if $banner->tekst != ""} <span class="ls-s-1"
					style="text-transform: uppercase; line-height: 45px; font-size: 35px; color: #fff; top: 200px; left: 590px; slidedirection: top; slideoutdirection: bottom; durationin: 3500; durationout: 3500; delayin: 1000;">
					{$banner->tekst}</span> {/if}
			</div>
			{/foreach}
		</div>
		<!--/layer_slider-->
		<!--=== End Slider ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="margin-bottom-10"></div>
			<!-- Service Blocks -->
			<div class="row">
				{foreach from=$result item=tekst} {if $tekst.tekstvakid == 1}
				<div class="col-md-12">
					<h2 class="heading-sm">
						<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-heart"></i>
						<span>{$tekst.header}</span>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
				</div>
				{/if} {/foreach} {foreach from=$result item=tekst} {if
				$tekst.tekstvakid == 2}
				<div class="col-md-6 col-sm-12">
					<h2 class="heading-sm">
						<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
						<span>{$tekst.header}</span>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
				</div>
				{/if} {/foreach}
				<div class="col-md-6 col-sm-12">
					{foreach from=$result item=tekst} {if $tekst.tekstvakid == 3}
					<h2 class="heading-sm">
						<i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-up"></i>
						<span>{$tekst.header}</span>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
					{/if} {/foreach} {foreach from=$result item=tekst} {if
					$tekst.tekstvakid == 4}
					<h2 class="heading-sm">
						<i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-down"></i>
						<span>{$tekst.header}</span>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
					{/if} {/foreach}
				</div>


			</div>
			<!-- End Service Blokcs -->

			<!-- Info Blokcs -->
			<div class="row margin-bottom-20">
				<!-- Welcome Block -->
				<div class="col-md-7 md-margin-bottom-40">
					<div class="headline">
						<h2>Hallo, dit is Aladdin</h2>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20"
								src="view/assets/img/stock/make_a_wish.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>Aladdin wil dat iedereen op de wereld een beetje
								gelukkiger word.</p>
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check color-green"></i> Facebook zonder
									face maar met een hart.</li>
								<li><i class="fa fa-check color-green"></i> Laat uw wensen
									in vervulling brengen.</li>
								<li><i class="fa fa-check color-green"></i> Help andere
									mensen met het vervullen van hun wens.</li>
								<li><i class="fa fa-check color-green"></i> Maak iedereen
									wat gelukkiger!</li>
							</ul>
							<a href="index.php?controller=register&action=Index"
								" class="btn btn-danger grow"> Meld je nu aan! </a> <br>
						</div>
					</div>
					<br />
					<blockquote class="hero-unify">
						<p>Aladdin is een leuk initiatief en een erg leuk project om
							aan gewerkt te hebben!</p>
						<small>Studenten groep D Avans</small>
					</blockquote>
				</div>
<!-- Donatiebutton				 -->
				<div class="col-md-5 col-sm-12">
					<div class="headline">
						<h2>Help Aladdin!</h2>
					</div>
					<p>U kunt Aladdin helpen door te doneren. Ook kunt u sponsor
						worden.</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
						target="_top">
						<input type="hidden" name="cmd" value="_donations"> <input
							type="hidden" name="business" value="AladdingroepD@gmail.com">
						<input type="hidden" name="lc" value="NL"> <input
							type="hidden" name="item_name" value="Stichting Aladdin Groep D">
						<input type="hidden" name="no_note" value="0"> <input
							type="hidden" name="currency_code" value="EUR"> <input
							type="hidden" name="bn"
							value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
						<input type="image"
							src="https://www.paypalobjects.com/nl_NL/NL/i/btn/btn_donateCC_LG.gif"
							border="0" name="submit"
							alt="PayPal, de veilige en complete manier van online betalen.">
						<img alt="" border="0"
							src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif"
							width="1" height="1">
					</form>
				</div>
<!-- /Donatiebutton				 -->
				<!--/col-md-8-->
			</div>
			<!--/row-->
			<!-- End Info Blokcs -->
		</div>

		<!--=== Parallax Counter v3 ===-->
		<div class="parallax-counter-v3 parallaxBg">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6 md-margin-bottom-50">
						<div class="features">
							<span class="counter">{$userCount}</span> <span
								class="features-info">Gebruikers</span>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 md-margin-bottom-50">
						<div class="features">
							<span class="counter">{$wishCount}</span> <span
								class="features-info">Wensen</span>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="features">
							<span class="counter">{$talentCount}</span> <span
								class="features-info">Talenten</span>
						</div>
					</div>
				</div>
			</div>
			<!--/end container-->
		</div>
		<!--=== End Parallax Counter v3 ===-->

		<div class="container content">
			<!-- Owl Clients v1 -->
			<div class="headline">
				<h2>Medemogelijk gemaakt door:</h2>
			</div>
			<div class="owl-clients-v1">
				{foreach from=$sponsoren item=sponsor}
				<div class="item">
					<a href="{$sponsor->url}" target="_BLANC"> <img
						src="{$sponsor->afbeelding|replace:'../../../':''}" alt="">
					</a>
				</div>
				{/foreach}
			</div>
			<!-- End Owl Clients v1 -->
		</div>
		<!--/container-->
		<!-- End Content Part -->
		{include 'view/Assets/php/Footer.tpl'}

	</div>
	<!--/wrapper-->
	{include 'view/Assets/php/jsCall.tpl'}
</body>
</html>
