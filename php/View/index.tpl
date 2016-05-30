<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>Home | Aladdin</title>
    {include 'view/Assets/php/Head.tpl'}


</head>

<body class="header-fixed">

	<div class="wrapper">
		{include 'view/Assets/php/NavTop.tpl'}


		<!--=== Slider ===-->
		<div id="layerslider"
			style="width: 100%; height: 500px; margin: 0px auto;">
			<!-- First slide -->
			<div class="ls-slide" data-ls="slidedelay:4500;transition2d:25;">
				<img src="view/assets/img/sliders/layer/bg1.jpg" class="ls-bg"
					alt="Slide background" /> 
					<img src="view/images/jasmine.png"
					alt="Slider image" class="ls-s-1" style="top: 62px; left: 29%;"
					data-ls="offsetxin:left; durationin:1500; delayin:1500; fadein:false; offsetxout:left; durationout:1000; fadeout:false;">

				<span class="ls-s-1"
					style="text-transform: uppercase; line-height: 45px; font-size: 35px; color: #fff; top: 200px; left: 590px; slidedirection: top; slideoutdirection: bottom; durationin: 3500; durationout: 3500; delayin: 1000;">
					 Aladdin wil dat iedereen op de wereld een beetje gelukkiger wordt.</span>
			</div>

			<!--Second Slide-->
			<div class="ls-slide" data-ls="transition2d:93;">
				<img src="view/assets/img/bg/18.jpg" class="ls-bg"
					alt="Slide background"> <i
					class="fa fa-chevron-circle-right ls-s-1"
					style="color: #fff; font-size: 24px; top: 70px; left: 40px; slidedirection: left; slideoutdirection: top; durationin: 1500; durationout: 500;"></i>

				<span class="ls-s-2"
					style="color: #fff; font-weight: 200; font-size: 22px; top: 70px; left: 70px; slidedirection: top; slideoutdirection: bottom; durationin: 1500; durationout: 500;">
					reponsive en aanpasbaar </span> <i
					class="fa fa-chevron-circle-right ls-s-1"
					style="color: #fff; font-size: 24px; top: 120px; left: 40px; slidedirection: left; slideoutdirection: top; durationin: 2500; durationout: 1500;"></i>

				<span class="ls-s-2"
					style="color: #fff; font-weight: 200; font-size: 22px; top: 120px; left: 70px; slidedirection: top; slideoutdirection: bottom; durationin: 2500; durationout: 1500;">
					verschillende sliders voor een dynamische weergaven </span> <i
					class="fa fa-chevron-circle-right ls-s-1"
					style="color: #fff; font-size: 24px; top: 170px; left: 40px; slidedirection: left; slideoutdirection: top; durationin: 3500; durationout: 3500;"></i>

				<span class="ls-s-2"
					style="color: #fff; font-weight: 200; font-size: 22px; top: 170px; left: 70px; slidedirection: top; slideoutdirection: bottom; durationin: 3500; durationout: 2500;">
					gebruik van icons </span> <a class="btn-u btn-u-blue ls-s1"
					href="#"
					style="padding: 9px 20px; font-size: 25px; top: 340px; left: 40px; slidedirection: bottom; slideoutdirection: bottom; durationin: 6500; durationout: 3500;">
					gebaseerd op Bootstrap 3 </a> <img src="view/images/jasmine.png"
					alt="Slider Image" class="ls-s-1"
					style="top: 30px; left: 650px; slidedirection: right; slideoutdirection: bottom; durationin: 1500; durationout: 1500;">
			</div>

			<!--Third Slide-->
			<div class="ls-slide"
				style="slidedirection: right; transition2d: 92, 93, 105;">
				<img src="view/assets/img/sliders/layer/bg2.jpg" class="ls-bg"
					alt="Slide background">
			</div>
			<!--End Third Slide-->
			
			
		</div>
		<!--/layer_slider-->
		<!--=== End Slider ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="margin-bottom-10"></div>
			<!-- Service Blocks -->
			<div class="row">
				{foreach from=$result item=tekst}
				{if $tekst.tekstvakid == 1}
				<div class="col-md-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-heart"></i>
							<span>{$tekst.header}</span>
						</a>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>				 
				</div>
				{/if}
				{/foreach}
				{foreach from=$result item=tekst}
				{if $tekst.tekstvakid == 2}
				<div class="col-md-6 col-sm-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
							<span>{$tekst.header}</span>
						</a>
					</h2>
					<p>
						{$tekst.tekstvaktekst}
					</p>
				</div>
				{/if}
				{/foreach}
				<div class="col-md-6 col-sm-12">
				{foreach from=$result item=tekst}
				{if $tekst.tekstvakid == 3}
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-up"></i>
							<span>{$tekst.header}</span>
						</a>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
				{/if}
				{/foreach}
				{foreach from=$result item=tekst}
				{if $tekst.tekstvakid == 4}
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-down"></i>
							<span>{$tekst.header}</span>
						</a>
					</h2>
					<p>{$tekst.tekstvaktekst}</p>
				{/if}
				{/foreach}				
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
							<p>Aladdin wil dat iedereen op de wereld een beetje gelukkiger word.</p>
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check color-green"></i> Facebook zonder face maar met een hart.</li>
								<li><i class="fa fa-check color-green"></i> .</li>
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
							</ul>
							<button type="button" class="btn btn-danger grow">Meld je nu aan!</button><br>
							</div>
					</div>
					<br />
					<blockquote class="hero-unify">
						<p>Alladin is een leuk initiatief en heeft veel potentie.</p>
						<small>Karel</small>
					</blockquote>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="headline">
						<h2>Help Aladdin!</h2>
					</div>
					<p>U kunt Aladdin helpen door te doneren. Ook kunt u sponsor worden.</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="AladdingroepD@gmail.com">
						<input type="hidden" name="lc" value="NL">
						<input type="hidden" name="item_name" value="Stichting Aladdin Groep D">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="EUR">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/nl_NL/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, de veilige en complete manier van online betalen.">
						<img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
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
							<span class="counter">5867</span> <span class="features-info">Gebruikers</span>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 md-margin-bottom-50">
						<div class="features">
							<span class="counter">7169</span> <span class="features-info">Wensen</span>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="features">
							<span class="counter">19146</span> <span class="features-info">Talenten</span>
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
					<a href="{$sponsor->url}" target="_BLANC">
						<img src="{$sponsor->afbeelding|replace:'../../../':''}" alt="">
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
