<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

   {include file='../View/Assets/php/Head.tpl'}
</head>

<body>

<div class="wrapper">
{include file='../View/Assets/php/NavTop.tpl'}


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Nieuws item: De nieuwe website!</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="HomepageController.php">Homepagina</a></li>
                <li><a href="NieuwsController.php">Nieuws</a></li>
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
                <img class="img-responsive full-width" src="http://placehold.it/1400x450" alt="">
                <div class="news-v3-in">
                    <ul class="list-inline posted-info">
                        <li>By Ferry Zijlmans</li>
                        <li>Geplaatst op Januari 24, 2015</li>
                    </ul>
                    <h2><a href="#">De nieuwe website</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec arcu ipsum. Curabitur tincidunt nisi ex, ut eleifend turpis egestas vitae. Proin convallis et eros eget rutrum. Duis luctus lorem id mattis placerat. Etiam pharetra libero ut suscipit mollis. Morbi augue mi, maximus at lectus id, mollis ornare dui. Curabitur consequat, est non cursus suscipit, quam nulla porta enim, sed pharetra diam elit non nisi. Praesent pulvinar ante eu euismod cursus. Fusce quis est justo. Nullam id egestas diam. Etiam ac augue orci. Aliquam scelerisque convallis est sed pretium. In vel elementum lorem.</p>
                    <p>Pellentesque eleifend metus vitae commodo finibus. Proin eget mi a sem placerat facilisis. Aenean interdum aliquet sapien, non scelerisque massa vestibulum ut. Quisque mollis, ante nec volutpat dignissim, lectus libero porta magna, at volutpat massa orci a turpis. Duis tincidunt nunc magna, non semper metus tempus ut. Duis vulputate enim condimentum posuere lacinia. Ut venenatis massa ex.</p>
                    <blockquote class="hero">
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing duis mollis, est non commodo luctus elit posuere erat a ante. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis lorem ipsum dolor sit amet, consectetur adipiscing"</em></p>
                    </blockquote>
                    <p>Sed placerat diam auctor eget. Mauris tellus eros, iaculis id leo quis, finibus aliquet ipsum. Duis volutpat lacus in purus bibendum, at sollicitudin eros malesuada. Sed nec diam a eros eleifend mattis. Phasellus in facilisis enim. Vestibulum sodales lacinia lectus, quis efficitur velit posuere sed.</p>
                    <p>Pellentesque eleifend metus vitae commodo finibus. Proin eget mi a sem placerat facilisis. Aenean interdum aliquet sapien, non scelerisque massa vestibulum ut. Quisque mollis, ante nec volutpat dignissim, lectus libero porta magna, at volutpat massa orci a turpis. Duis tincidunt nunc magna, non semper metus tempus ut. Duis vulputate enim condimentum posuere lacinia. Ut venenatis massa ex.</p>                    
                    <ul class="post-shares post-shares-lg">
                        <li>
                            <a href="#">
                                <i class="rounded-x icon-share"></i>
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
<?php include 'Assets/php/jsCall.tpl.php';?>

</body>
</html>
