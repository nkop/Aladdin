
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Admin login | Aladdin</title>
    
        <link href="view/cms/Assets/css/cmsLogin.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <form action="Controller/CMS/Handlers/cmsLoginHandler.php" method="POST">
    <h2><span class="entypo-login"></span> Login</h2>
    <button class="submit"><span class="entypo-lock"></span></button>
    <span class="entypo-user inputUserIcon"></span>
    <input type="text" class="user" name="username" placeholder="Gebruikersnaam" required="required"/>
    <span class="entypo-key inputPassIcon"></span>
    <input type="password" class="pass" name="password" placeholder="Wachtwoord" required="required"/>
    {if $LoginError}
    <div class='alert alert-danger text-center'>
    <strong>Error!</strong> De combinatie van uw gebruikersnaam en wachtwoord bestaat niet! Controleer uw gegevens
    </div>
    {/if}

</form>
</body>
{include file='view/cms/Assets/cmsLoginHead.tpl'}

</html>