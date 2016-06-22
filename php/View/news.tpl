<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Nieuws | Aladdin</title>

   {include file='../View/Assets/php/Head.tpl'}
</head>

<body class="header-fixed">

<div class="wrapper">
{include file='../View/Assets/php/NavTop.tpl'}


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Nieuws</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Homepagina</a></li>
                <li class="active">Nieuws</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
   <!--=== Blog Posts ===-->
    <div class="container content-md">

		{foreach from=$newsItems item=newsItem}
		 <!-- News v3 -->
         <div class="row margin-bottom-20">
            <div class="col-sm-5 sm-margin-bottom-20">
            {if $newsItem->isvideo}
            	<div class="responsive-video">
                    {$newsItem->thumbnail}
                </div>
            {else}
            	<img class="img-responsive" src="{$newsItem->thumbnail|replace:'../../../':''}" alt="">
            {/if}
                
            </div>
            <div class="col-sm-7">
                <div class="news-v3">
                    <ul class="list-inline posted-info">
                        <li>By {$newsItem->volledignaam}</li>
                        <li>geplaatst op {$newsItem->datum|date_format}</li>
                    </ul>
                    <h2><a href="index.php?controller=newsItem&action=News&id={$newsItem->nieuwsitemid}">{$newsItem->titel}</a></h2>
                    {$newsItem->tekst|strip_tags|truncate:300:"...":true}
                    
                    <ul class="post-shares">
                        <li><a href="#"><i class="rounded-x fa fa-facebook float"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!--/end row-->
        <!-- End News v3 -->	
                <div class="clearfix margin-bottom-20"><hr></div>			  
		{/foreach}

        <!-- Pager v3 
        <ul class="pager pager-v3 pager-md no-margin-bottom">
            <li class="previous"><a href="#">&larr; Older</a></li>
            <li class="page-amount">1 of 7</li>
            <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
        <!-- End Pager v3 -->
    </div><!--/end container-->
    <!--=== End Blog Posts ===-->
    <!--=== End Content Part ===-->
{include file='../View/Assets/php/footer.tpl'}
</div><!--/wrapper-->
{include '../view/Assets/php/jsCall.tpl'}

</body>
</html>
