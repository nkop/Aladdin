<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Home</title>

   {include file='Assets/php/Head.tpl'}
</head>

<body>

<div class="wrapper">
{include file='Assets/php/NavTop.tpl'}

<div class="container content">
<form class="text-center col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" action="../Controller/Handlers/Passwordrecovery.php">
  <input type="text" class="form-control" placeholder="E-mail" />
  <button type="submit" class="btn btn-success" name="email">Verstuur</button>
</form>
</div>

{include file='Assets/php/Footer.tpl'}
</div><!--/wrapper-->
{include file='Assets/php/jsCall.tpl'}

</body>
</html>
