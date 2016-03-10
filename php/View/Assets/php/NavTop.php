  <!--=== Header ===-->    
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="homepage.php">
                <img src="images/Alladin.png" alt="Logo" height="50">
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
                    <?php 
                    session_start();
                    if (isset($_SESSION['email'])){
                    	echo "<li><a href='page_login.php?logout=true'>Logout</a></li> ";
                    }
                    else{
                    	echo "<li><a href='page_login.php'>Login</a></li> ";
                    }
                    
                    ?>  
                      
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
                    <li class="active">
                        <a href="homepage.html" class="dropdown-toggle" data-toggle="dropdown">
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

                    <!-- Features -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Wensen en talenten
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Headers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="feature_header_v6_dark_scroll.html">Header v6 Dark on Scroll</a></li>
                                    <li><a href="feature_header_v6_dark_search.html">Header v6 Dark Search</a></li>
                                    <li><a href="feature_header_v6_dark_res_nav.html">Header v6 Dark in Responsive</a></li>
                                </ul>                                
                            </li>                        
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Footers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="feature_footer_default.html#footer-default">Footer Default</a></li>
                                    <li><a href="feature_footer_v1.html#footer-v1">Footer v1</a></li>
                                    <li><a href="feature_footer_v2.html#footer-v2">Footer v2</a></li>
                                    <li><a href="feature_footer_v3.html#footer-v3">Footer v3</a></li>
                                </ul>                                
                            </li>
                            <li><a href="feature_gallery.html">Gallery Examples</a></li>
                            <li><a href="feature_animations.html">Animations on Scroll</a></li>
                            <li><a href="feature_parallax_counters.html">Parallax Counters</a></li>
                            <li><a href="feature_parallax_blocks.html">Parallax Blocks</a></li>                                                       
                            <li><a href="feature_funny_boxes.html">Funny Boxes</a></li>
                        </ul>
                    </li>                    
                    <!-- End Features -->
                    
                    <!-- Portfolio -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog_masonry_3col.html">Veelgestelde vragen</a></li>
                            <li><a href="blog_timeline.html">Contact</a></li>                            
                        </ul>

                    </li>
                    <!-- End Portfolio -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->