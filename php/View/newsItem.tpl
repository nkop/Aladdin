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
            <h1 class="pull-left">Nieuws item: {$newsitem->titel}</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Homepagina</a></li>
                <li><a href="index.php?controller=News">Nieuws</a></li>
                <li class="active">Nieuws item</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
    
    <!--=== Blog Posts ===-->
    <div class="bg-color-light">
        <div class="container content-sm">
            <!-- News v3 -->
            <div class="news-v3 margin-bottom-30">
                <img class="img-responsive full-width" src="{$newsitem->bannerfoto|replace:'../../../':''}" alt="">
                <div class="news-v3-in">
                    <ul class="list-inline posted-info">
                        <li>By {$newsitem->volledignaam}</li>
                        <li>Geplaatst op {$newsitem->datum|date_format}</li>
                    </ul>
                    <h2>{$newsitem->titel}</h2>
                   	{$newsitem->tekst|replace:'<div>':'<p>'|replace:'</div>':'</p>'|escape:'htmlentitydecode'}
                    <ul class="post-shares post-shares-lg">
                        <li>
                            <a href="#">
                                <i class="rounded-x fa fa-facebook float"></i>
                                <span>12</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>                        
            <!-- End News v3 -->

            <hr>
        </div><!--/end container-->
    </div>
    <!--=== End Blog Posts ===-->

    <!--=== Content Part ===-->
	

    <!--=== End Content Part ===-->
{include file='../View/Assets/php/footer.tpl'}
</div><!--/wrapper-->
{include '../view/Assets/php/jsCall.tpl'}

</body>
</html>
