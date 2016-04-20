<?php
/* Smarty version 3.1.29, created on 2016-04-12 23:06:07
  from "C:\xampp\htdocs\Aladdin\php\view\Assets\php\NavTop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570d633f233552_21508045',
  'file_dependency' => 
  array (
    '2a3973ab041e895e09015ecf1f7e6c937873c12b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\view\\Assets\\php\\NavTop.tpl',
      1 => 1460495157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570d633f233552_21508045 ($_smarty_tpl) {
?>
  <!--=== Header ===-->
    <div class="header header-sticky">
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
                    <li><a href="FaqController.php">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href='loginController.php?logout=true'><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['loginoptions']->value) {?>
                      <li class="topbar-devider"></li>
                      
                      <li><a href="RegisterController.php">Registreer</a></li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['loginoptions']->value == false) {?>
                      <!--  <li class="topbar-devider"></li>
                      
                      <li><a href="#">Extra optie</a></li>-->
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

                   <!-- wensen & talenten -->
                   <?php if (($_smarty_tpl->tpl_vars['text']->value == 'Logout')) {?>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Wensen & Talenten
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="WishesController.php">Wensen</a></li>
                            <li><a href="TalentsController.php">Talenten</a></li>
                        </ul>
                    </li>
                    <?php }?>
                    <!-- End wensen & talenten -->

                    <!-- nieuws -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Nieuws
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="NieuwsController.php">Laatste nieuws</a></li>
                        </ul>
                    </li>
                    <!-- End nieuws -->
					

                    <!-- contact -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="FaqController.php">Veelgestelde vragen</a></li>
                            <li><a href="ContactController.php">Contact</a></li>
                        </ul>

                    </li>
                    <!-- End contact -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
<?php }
}
