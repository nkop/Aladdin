<html>
<head>
    <title>Over ons | Aladdin</title>
    {include '../view/Assets/php/Head.tpl'}


</head>

<body>
{include '../view/Assets/php/NavTop.tpl'}

<!-- Content Part -->
<div class="container content">
<h1 align="center">Over Ons</h1>
<div class="row">
				{foreach from=$abouts item=tekst}
				<div class="col-md-12">
					<h2 class="heading-sm">
						<a class="link-bg-icon" href="#"> <i
							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-heart"></i>
							<span>Aladdin</span>
						</a>
					</h2>
					<p>{$tekst.tekst}</p>				 
				</div>
				{/foreach}
<!-- 				{foreach from=$abouts item=tekst} -->
<!-- 				{if $tekst.tekstvakid == 2} -->
<!-- 				<div class="col-md-6 col-sm-12"> -->
<!-- 					<h2 class="heading-sm"> -->
<!-- 						<a class="link-bg-icon" href="#"> <i -->
<!-- 							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i> -->
<!-- 							<span>{$tekst.header}</span> -->
<!-- 						</a> -->
<!-- 					</h2> -->
<!-- 					<p> -->
<!-- 						{$tekst.tekstvaktekst} -->
<!-- 					</p> -->
<!-- 				</div> -->
<!-- 				{/if} -->
<!-- 				{/foreach} -->
<!-- 				<div class="col-md-6 col-sm-12"> -->
<!-- 				{foreach from=$abouts item=tekst} -->
<!-- 				{if $tekst.tekstvakid == 3} -->
<!-- 					<h2 class="heading-sm"> -->
<!-- 						<a class="link-bg-icon" href="#"> <i -->
<!-- 							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-up"></i> -->
<!-- 							<span>{$tekst.header}</span> -->
<!-- 						</a> -->
<!-- 					</h2> -->
<!-- 					<p>{$tekst.tekstvaktekst}</p> -->
<!-- 				{/if} -->
<!-- 				{/foreach} -->
<!-- 				{foreach from=$abouts item=tekst} -->
<!-- 				{if $tekst.tekstvakid == 4} -->
<!-- 					<h2 class="heading-sm"> -->
<!-- 						<a class="link-bg-icon" href="#"> <i -->
<!-- 							class="icon-custom icon-sm rounded-x icon-bg-red fa fa-thumbs-down"></i> -->
<!-- 							<span>{$tekst.header}</span> -->
<!-- 						</a> -->
<!-- 					</h2> -->
<!-- 					<p>{$tekst.tekstvaktekst}</p> -->
<!-- 				{/if} -->
<!-- 				{/foreach}				 -->
<!-- 				</div> -->


			</div>
</div>
<!-- End Content Part -->	
{include '../view/Assets/php/Footer.tpl'}
</body>
</html>