<?php
/* Smarty version 3.1.29, created on 2016-04-08 14:57:05
  from "C:\xampp\htdocs\Aladdin\php\View\Assets\php\NavTop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5707aaa1b228a3_84357829',
  'file_dependency' => 
  array (
    '390b2618c7babed697150da4cdfb807461972a28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\Assets\\php\\NavTop.tpl',
      1 => 1460118100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5707aaa1b228a3_84357829 ($_smarty_tpl) {
?>
  <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="HomepageController.php">
                <img src="../view/images/logo.png" alt="Logo" height="60">
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
                    <li><a href='loginController.php?logout=true'><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['loginoptions']->value) {?>
                      <li class="topbar-devider"></li>
                      
                      <li><a href="../Controller/RegisterController.php">Registreer</a></li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['loginoptions']->value == false) {?>
                      <li class="topbar-devider"></li>
                      
                      <li><a href="#">Extra optie</a></li>
                      <?php }?>
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
                        <a href="homepageController.php">
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
