<?php
/* Smarty version 3.1.29, created on 2016-04-05 16:03:04
  from "C:\xampp\htdocs\Aladdin\php\View\Assets\php\NavTop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5703c598851064_39958691',
  'file_dependency' => 
  array (
    '390b2618c7babed697150da4cdfb807461972a28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\Assets\\php\\NavTop.tpl',
      1 => 1459863875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5703c598851064_39958691 ($_smarty_tpl) {
?>
  <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="homepage.php">
                <img src="images/logo.png" alt="Logo" height="60">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">Dutch <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <li><a href="page_faq.html">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href='page_login.php'>$text</a></li>
                      <li class="topbar-devider"></li>
                      <li><a href="../Controller/Register/RegisterController.php">Registreer</a></li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li >
                        <a href="homepage.php">
                            Home
                        </a>
                    </li>
                    <!-- End Home -->

                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Nieuws
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_masonry_3col.html">Laatste nieuws</a></li>
                            <li><a href="blog_timeline.html">Blogs</a></li>
                        </ul>
                    </li>
                    <!-- End Blog -->
					<?php echo '<?php
                    ';?>if (isset($_SESSION['email'])){
                    	if (strlen($_SESSION['email'])> 0){
                    echo '<!-- Features -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Wensen en talenten
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Wensen</a>
                                <ul class="dropdown-menu">
                                    <li><a href="feature_header_v6_dark_scroll.html">Wensen toevoegen</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Talenten</a>
                                <ul class="dropdown-menu">
                                    <li><a href="feature_footer_default.html#footer-default">Talenten toevoegen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End Features -->
            		<li >
                        <a href="page_personalinfo.php">
                            Profiel
                        </a>
                    </li>';
                    	}
        			}
                    <?php echo '?>';?>

                    <!-- Portfolio -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_masonry_3col.html">Veelgestelde vragen</a></li>
                            <li><a href="page_contact.php">Contact</a></li>
                        </ul>

                    </li>
                    <!-- End Portfolio -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
<?php }
}
