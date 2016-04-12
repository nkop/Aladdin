<?php
/* Smarty version 3.1.29, created on 2016-04-12 23:05:02
  from "C:\xampp\htdocs\Aladdin\php\View\Homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570d62fe8ba3c7_25898401',
  'file_dependency' => 
  array (
    '6fde05b10a3a5a1a9a72b253b8405f9da683a6d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\Homepage.tpl',
      1 => 1460495046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../view/Assets/php/Head.tpl' => 1,
    'file:../view/Assets/php/NavTop.tpl' => 1,
    'file:../view/Assets/php/Footer.tpl' => 1,
    'file:../view/Assets/php/jsCall.tpl' => 1,
  ),
),false)) {
function content_570d62fe8ba3c7_25898401 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>Home | Aladdin</title>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../view/Assets/php/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</head>

<body class="header-fixed">

	<div class="wrapper">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../view/Assets/php/NavTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<!--=== Slider ===-->
		<div id="layerslider"
			style="width: 100%; height: 500px; margin: 0px auto;">
			<!-- First slide -->
			<div class="ls-slide" data-ls="slidedelay:4500;transition2d:25;">
				<img src="../view/assets/img/sliders/layer/bg1.jpg" class="ls-bg"
					alt="Slide background" /> <img src="../view/images/jasmine.png"
					alt="Slider image" class="ls-s-1" style="top: 62px; left: 29%;"
					data-ls="offsetxin:left; durationin:1500; delayin:1500; fadein:false; offsetxout:left; durationout:1000; fadeout:false;">

				<span class="ls-s-1"
					style="text-transform: uppercase; line-height: 45px; font-size: 35px; color: #fff; top: 200px; left: 590px; slidedirection: top; slideoutdirection: bottom; durationin: 3500; durationout: 3500; delayin: 1000;">
					Voorbeeld text </span>
			</div>

			<!--Second Slide-->
			<div class="ls-slide" data-ls="transition2d:93;">
				<img src="../view/assets/img/bg/18.jpg" class="ls-bg"
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
					gebaseerd op Bootstrap 3 </a> <img src="../view/images/jasmine.png"
					alt="Slider Image" class="ls-s-1"
					style="top: 30px; left: 650px; slidedirection: right; slideoutdirection: bottom; durationin: 1500; durationout: 1500;">
			</div>

			<!--Third Slide-->
			<div class="ls-slide"
				style="slidedirection: right; transition2d: 92, 93, 105;">
				<img src="../view/assets/img/sliders/layer/bg2.jpg" class="ls-bg"
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
				<?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tekst_0_saved_item = isset($_smarty_tpl->tpl_vars['tekst']) ? $_smarty_tpl->tpl_vars['tekst'] : false;
$_smarty_tpl->tpl_vars['tekst'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tekst']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tekst']->value) {
$_smarty_tpl->tpl_vars['tekst']->_loop = true;
$__foreach_tekst_0_saved_local_item = $_smarty_tpl->tpl_vars['tekst'];
?>
				<div class="col-md-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-heart"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['tekst']->value['header'];?>
</span>
						</a>
					</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['tekst']->value['tekstvaktekst'];?>
</p>
					<?php
$_smarty_tpl->tpl_vars['tekst'] = $__foreach_tekst_0_saved_local_item;
}
if ($__foreach_tekst_0_saved_item) {
$_smarty_tpl->tpl_vars['tekst'] = $__foreach_tekst_0_saved_item;
}
?>

				</div>
				<div class="col-md-6 col-sm-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
							<span>Wat maakt Aladdin zo bijzonder?</span>
						</a>
					</h2>
					<p>
						Geluk komt in beweging<br /> Vreemden worden vrienden <br /> Er
						komt geen geld aan te pas <br /> Eigenwaarde groeit <br /> Kennis
						en wijsheid worden gedeeld <br /> Eenzaamheid vermindert <br />
						Oordeel vermindert <br /> Liefdevolle aarde<br /> Meer plezier in
						het leven<br /> <strong><h5>Facebook zonder face, maar met een
								hart</h5></strong>
					</p>
				</div>
				<div class="col-md-6 col-sm-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-up"></i>
							<span>Wat kan?</span>
						</a>
					</h2>
					<p>De mogelijkheden zijn ongekend; gitaar leren spelen, als ridder
						rondlopen in de Efteling, een tractor besturen, in een diertuin of
						weeshuis werken, in een circus optreden, bij een kledingontwerper
						in de leer, een nieuw ijsje ontwikkelen, met een grote groep
						mensen een kunstwerk maken of een flashmob organiseren en nog
						v&eacute;&eacute;l meer.</p>

					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-down"></i>
							<span>Wat kan niet?</span>
						</a>
					</h2>
					<p>Geen materi&euml;le wensen (geen bezit), geen seks, geen geweld,
						geen drugs, geen klussen.</p>
				</div>


			</div>
			<!-- End Service Blokcs -->

			<!-- Info Blokcs -->
			<div class="row margin-bottom-20">
				<!-- Welcome Block -->
				<div class="col-md-12 md-margin-bottom-40">
					<div class="headline">
						<h2>Hallo, dit is Alladin</h2>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20"
								src="../view/assets/img/stock/make_a_wish.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Aenean nunc dolor</p>
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
								<li><i class="fa fa-check color-green"></i> consectetur
									adipiscing elit.</li>
							</ul>
							<button type="button" class="btn btn-danger grow">Meld je nu aan!</button><br>
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

					</div>
					<br />
					<blockquote class="hero-unify">
						<p>Alladin is een leuk initiatief en heeft veel potentie.</p>
						<small>Karel</small>
					</blockquote>
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
			<!-- Nieuws -->
			<div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
				<div class="headline">
					<h2 class="pull-left">Nieuws</h2>
					<div class="owl-navigation">
						<div class="customNavigation">
							<a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a> <a
								class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<!--/navigation-->
				</div>

				<div class="owl-recent-works-v1">
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img1.jpg"
								alt="">
						</em> <span> <strong>Gelukkig nieuwjaar!</strong> <i>Anim pariatur
									cliche reprehenderit</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img2.jpg"
								alt="">
						</em> <span> <strong>Nieuwe website!</strong> <i>Responsive
									Bootstrap website</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img3.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Pariatur prehe cliche
									reprehrit</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img4.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Craft labore wes
									anderson cred</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img5.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Anim pariatur cliche
									reprehenderit</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img1.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Anim pariatur cliche
									reprehenderit</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img2.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Responsive Bootstrap
									Template</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img3.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Pariatur prehe cliche
									reprehrit</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img4.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Craft labore wes
									anderson cred</i>
						</span>
						</a>
					</div>
					<div class="item">
						<a href="#"> <em class="overflow-hidden"> <img
								class="img-responsive" src="../view/assets/img/main/img5.jpg"
								alt="">
						</em> <span> <strong>Lorem ipsum</strong> <i>Anim pariatur cliche
									reprehenderit</i>
						</span>
						</a>
					</div>
				</div>
			</div>
			<!-- End Recent Works -->

			<!-- Owl Clients v1 -->
			<div class="headline">
				<h2>Medemogelijk gemaakt door:</h2>
			</div>
			<div class="owl-clients-v1">
				<div class="item">
					<img src="../view/assets/img/clients4/1.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/2.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/3.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/4.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/5.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/6.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/7.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/8.png" alt="">
				</div>
				<div class="item">
					<img src="../view/assets/img/clients4/9.png" alt="">
				</div>
			</div>
			<!-- End Owl Clients v1 -->
		</div>
		<!--/container-->
		<!-- End Content Part -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../view/Assets/php/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	</div>
	<!--/wrapper-->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../view/Assets/php/jsCall.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
