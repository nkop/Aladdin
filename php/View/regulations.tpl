<html>
<head>
    <title>Regelement | Aladdin</title>
    {include '../view/Assets/php/Head.tpl'}


</head>

<body>
{include '../view/Assets/php/NavTop.tpl'}



<div class="container content">

<div class="col-md-4 col-sm-6">
<h2 class="heading-sm">
<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
<span>Wat wel:</span>
</h2>
{foreach from=$regels item=regel}
{if $regel.categorie_id == 1}
<h2 class="heading-sm">
<p>
							{$regel.tekst}		
</h2>

						<p>
						{/if}
{/foreach}
<hr>
{foreach from=$regels item=regel}
{if $regel.id == 23}
<h5>
<span>
{$regel.tekst}
</span>
</h5>
{/if}
{/foreach}

</div>

<div class="col-md-4 col-sm-6">
<h2 class="heading-sm">
<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
<span>Wat niet:</span>
</h2>
{foreach from=$regels item=regel}
{if $regel.categorie_id == 2}
<h2 class="heading-sm">
<p>
							<span>{$regel.tekst}</span>						
</h2>

						<p>
						{/if}
{/foreach}
<hr>
{foreach from=$regels item=regel}
{if $regel.id == 24}
<h5>

<span>
{$regel.tekst}
</span>
</h5>
{/if}
{/foreach}

</div>

<div class="col-md-4 col-sm-6">
<h2 class="heading-sm">
<i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-star"></i>
<span>Toelichting</span>
</h2>
{foreach from=$regels item=regel}
{if $regel.categorie_id == 3}
<h5>
<p>
							<span>{$regel.tekst}</span>						
</h5>

						<p>
						{/if}
{/foreach}
</div>
</div>					
{include '../view/Assets/php/Footer.tpl'}
</body>
</html>