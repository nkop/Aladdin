<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Alladin | Home</title>

<?php include 'Assets/php/Head.php';?>
</head>	

<body>    

<div class="wrapper">    
<?php include 'assets/php/NavTop.php';?>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Registration</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Pages</a></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page" action="../DB/Database.class.php" method="post">
                    <div class="reg-header">
                        <h2>Register a new account</h2>
                        <p>Already Signed Up? Click <a href="page_login.html" class="color-green">Sign In</a> to login your account.</p>                    
                    </div>
				
                    <label>Voornaam<span class="color-red">*</span></label>
                    <input type="text" name="voornaam" class="form-control margin-bottom-20">
                   
                   	<label>Tussenvoegsel</label>
                    <input type="text" name="tussenvoegsel" class="form-control margin-bottom-20">
                   
                    <label>Achternaam<span class="color-red">*</span></label>
                    <input type="text" name="achternaam" class="form-control margin-bottom-20">
                   
                    <label>Email <span class="color-red">*</span></label>
                    <input type="text" name="email" class="form-control margin-bottom-20">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password <span class="color-red">*</span></label>
                            <input type="password" name="wachtwoord" class="form-control margin-bottom-20">
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password <span class="color-red">*</span></label>
                            <input type="password" name="confirmpassword" class="form-control margin-bottom-20">
                        </div>
                    </div>
				
                    <hr>
                    
                    <label>Geboortedatum<span class="color-red">*</span></label>
                    <div class="row">
                    	<div class="col-sm-3">
                    		<input type="text" name="dag" class="form-control margin-bottom-20" placeholder="09">
                    	</div>
                    	
                    	<div class="col-sm-3">
                    		<input type="text" name="maand" class="form-control margin-bottom-20" placeholder="03">
                    	</div>
                    	
                    	<div class="col-sm-3">
                    		<input type="text" name="jaar" class="form-control margin-bottom-20" placeholder="2016">
                    	</div>
                    </div>
                    
                    
                   
                   <div class="row">
                   		<div class="col-sm-6">
                    		<label>Straatnaam<span class="color-red">*</span></label>
                    		<input type="text" name="straatnaam" class="form-control margin-bottom-20">
                   		</div>
                   		<div class="col-sm-6">
                    		<label>Huisnummer<span class="color-red">*</span></label>
                    		<input type="text" name="huisnummer" class="form-control margin-bottom-20">
                    	</div>
                   </div>
                    <label>Postcode<span class="color-red">*</span></label>
                    <input type="text" name="postcode" class="form-control margin-bottom-20">
                    
                    <label>Woonplaats<span class="color-red">*</span></label>
                    <input type="text" name="woonplaats" class="form-control margin-bottom-20">
                    
                    <label>Geslacht<span class="color-red">*</span></label>
                    <input type="text" name="geslacht" class="form-control margin-bottom-20">
                    
                    <hr>

                    <div class="row">
                        <div class="col-lg-6 checkbox">
                            <label>
                                <input type="checkbox"> 
                                I read <a href="page_terms.html" class="color-green">Terms and Conditions</a>
                            </label>                        
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit">Register</button>                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->		
    <!--=== End Content Part ===-->

<?php include 'Assets/php/Footer.php';?>
</div>

<?php include 'assets/php/jsCall.php';?>

</body>
</html> 