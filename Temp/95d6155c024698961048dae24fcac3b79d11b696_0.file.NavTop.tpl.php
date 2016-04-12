<?php
/* Smarty version 3.1.29, created on 2016-04-11 15:14:48
  from "C:\xampp\htdocs\Aladdin\php\view\assets\php\NavTop.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570ba348838e99_27166672',
  'file_dependency' => 
  array (
    '95d6155c024698961048dae24fcac3b79d11b696' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\view\\assets\\php\\NavTop.tpl',
      1 => 1460380148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570ba348838e99_27166672 ($_smarty_tpl) {
?>
  <!--=== Header ===-->
    <div class="header header-sticky header-fixed-shrink">
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
