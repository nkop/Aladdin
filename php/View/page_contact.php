<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Our Contacts | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_contact.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head> 

<body>     

<div class="wrapper">
  <?php include 'assets/php/navtop.php';?>
  
  <?php

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Contact pagina</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="Homepage.php">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
        <!-- Google Map -->
    <div id="map" class="map">
    </div><!---/map-->
    <!-- End Google Map -->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row margin-bottom-30">
    		<div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>Contact formulier</h2></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat.</p><br>
                <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-3">
                    <fieldset>                  
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Uw naam:</label>
                                <label class="input">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" id="name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">Uw E-mail adres:</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email">
                                </label>
                            </section>
                        </div>
                        
                        <section>
                            <label class="label">Onderwerp:</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="subject" id="subject">
                            </label>
                        </section>
                        
                        <section>
                            <label class="label">Bericht:</label>
                            <label class="textarea">
                                <i class="icon-append fa fa-comment"></i>
                                <textarea rows="4" name="message" id="message"></textarea>
                            </label>
                        </section>
                        
                        <section>
                            <label class="label">Neem de tekens van het plaatje over:</label>
                            <label class="input input-captcha">
                                <img src="assets/plugins/sky-forms-pro/skyforms/captcha/image.php?<?php echo time(); ?>" width="100" height="32" alt="Captcha image" />
                                <input type="text" maxlength="6" name="captcha" id="captcha">
                            </label>
                        </section>
                    </fieldset>
                    
                    <footer>
                        <button type="submit" class="btn-u">Verstuur</button>
                    </footer>
                    
                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Uw bericht is succesvol verzonden</p>
                    </div>
                </form>
            </div><!--/col-md-9-->
            
    		<div class="col-md-3">
            	<!-- Contacts -->
                <div class="headline"><h2>Contact</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>25, Lorem Lis Street, Orange, Vught</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@anybiz.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>800 123 3456</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.aladdin.com</a></li>
                </ul>

            	<!-- Why we are? -->
                <div class="headline"><h2>Wat zijn we:</h2></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                <ul class="list-unstyled">
                	<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
                	<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
                	<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->     
    <!--=== End Content Part ===-->
    
	<?php include 'assets/php/footer.php';?>

</div><!--/wrapepr-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contact_advanced.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        ContactPage.initMap();
        PageContactForm.initPageContactForm();
 });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->

</body>
</html> 