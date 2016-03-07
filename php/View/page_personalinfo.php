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
            <h1 class="pull-left">Persoonlijke informatie</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Pages</a></li>
                <li class="active">Persoonlijke informatie</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page">
                    <div class="reg-header">
                        <h2>Persoonlijke informatie</h2>                    
                    </div>

                    <label>Voornaam</label>
                    <input type="text" class="form-control margin-bottom-20">
                   
                    <label>Achternaam</label>
                    <input type="text" class="form-control margin-bottom-20">
                   
                    <label>Emailadres</label>
                    <input type="text" class="form-control margin-bottom-20">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Postcode</label>
                            <input type="text" class="form-control margin-bottom-20">
                        </div>
                        <div class="col-sm-6">
                            <label>Huisnummer</label>
                            <input type="text" class="form-control margin-bottom-20">
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-sm-6">
                           <button class="btn-u" type="submit">Opslaan</button> 
                        </div>
                        <div class="col-sm-6">
                           <button class="btn-u" type="submit">Wachtwoord veranderen</button> 
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