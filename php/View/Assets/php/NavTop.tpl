  <!--=== Header ===-->
    <div class="header header-sticky">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.php">
                <img src="view/images/logo.png" alt="Logo" height="60">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <!--<li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">Dutch <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>-->
                    <li><a href="faqController.php">Help</a></li>
                    <li class="topbar-devider"></li>
                    {if ($text =='Logout')}
 					<li><a href='index.php?controller=login&action=logout'>Logout</a></li>
 					{else}
 					<li><a href='index.php?controller=login&action=Index'>Login</a></li>
 					<li class="topbar-devider"></li>
                    <li><a href='index.php?controller=register&action=Index'>Registreer</a></li>
                    {/if}
                      {if $loginoptions == false}
                      <!--  <li class="topbar-devider"></li>

                      <li><a href="#">Extra optie</a></li>-->
                      {/if}
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
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <!-- End Home -->

                   <!-- wensen & talenten -->
                   {if ($text =='Logout')}
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Wensen & Talenten
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?controller=wishes&action=index">Wensen</a></li>
                            <li><a href="index.php?controller=talents&action=index">Talenten</a></li>
                        </ul>
                    </li>
                    {/if}
                    <!-- End wensen & talenten -->

                    <!-- nieuws -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Nieuws
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?controller=News">Laatste nieuws</a></li>
                        </ul>
                    </li>
                    <!-- End nieuws -->


                    <!-- contact -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?controller=faq&action=index">Veelgestelde vragen</a></li>

                            <li><a href="index.php?controller=contact&action=index">Contact</a></li>
                             <li><a href="index.php?controller=regulations&action=index">Regels</a></li>
                              <li><a href="index.php?controller=about&action=index">Over Ons</a></li>
                        </ul>

                    </li>
                    <!-- End contact -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
