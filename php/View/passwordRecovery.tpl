<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Wachtwoord vergeten | Alladdin</title>

   {include file='Assets/php/Head.tpl'}
</head>

<body class="header-fixed">

<div class="wrapper">
{include file='Assets/php/NavTop.tpl'}

<div class="container content minimalheight">
  {if $RecoverError}
      <div class='alert alert-danger text-center'>
        <strong>Error!</strong> Dit e-mail adres staat niet geregistreerd!
      </div>
  {/if}

  {if $RecoverSuccess}
  <div class='alert alert-success text-center'>
    <strong>Succes!</strong> U heeft een nieuw wachtwoord in uw inbox!
  </div>
  {/if}
<form class="text-center col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" action="../php/Controller/Handlers/passwordRecoveryHandler.php" method="post">
  <input type="email" class="form-control" name="mail" placeholder="E-mail" />
  <button type="submit" class="btn btn-danger" name="email">Verstuur</button>
</form>
</div>

{include file='Assets/php/Footer.tpl'}
</div><!--/wrapper-->
{include file='Assets/php/jsCall.tpl'}

</body>
</html>
