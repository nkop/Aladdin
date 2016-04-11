<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Talenten | Aladdin</title>

   {include file='../View/Assets/php/Head.tpl'}
</head>

<body class="header-fixed">

<div class="wrapper">
{include file='../View/Assets/php/NavTop.tpl'}


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Talenten</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="HomepageController.php">Homepagina</a></li>
                <li class="active">Talenten</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    {if ($text =='Logout')}
    	{if !empty($wishesArray)}
		    <div class="container content minimalheight">
		    <div class="panel-group">
		    	{if (isset($pass))}
		    		{if $pass == 'true'}
		    			<div class="alert alert-success">
							<strong>Gelukt!</strong>
						</div>
					{/if}
					{if $pass == 'false'}
		    			<div class="alert alert-danger">
							<strong>Error!</strong> er ging iets niet goed
						</div>
		    		{/if}
		    	{/if}
		        <div class="faqHeader"><i class="fa fa-lightbulb-o"></i> Vul uw talent in</div>
		        <div class="">
					 <form class="reg-page" action="../Controller/Handlers/TalentHandler.php" method="post">
							<label>Talent:<span class="color-red">*</span></label>
		                	<input type="text" name="talent" class="form-control margin-bottom-20" required="required">
	
	                    <div class="col-lg-12 text-right">
	                    	<button class="btn-u" type="submit" name="save">Opslaan</button>
	                    </div>
		        	</form>
		        	{if !empty($talentArray)}
		        		<div class="col-lg-12 text-right">
							<hr>
		                </div>
	                {/if}
		        </div>
		        {if !empty($talentArray)}
		        	<div class="faqHeader"><i class="fa fa-lightbulb-o"></i> Dit zijn uw Talenten</div>
		  	    	<div>
		  	    		<table class="col-md-12">
		  	    			<tr>
		  	    				<th class="col-md-10">Talent</th>
		  	    			</tr>
						{foreach from=$talentArray item=talent}
							<tr>
								<td class="col-md-10"><p>{$talent}</p></td>
							</tr>
						{/foreach}
						</table>
			    	</div>
		    	{/if} 
		    </div>
		{else}
			<div class="container content">
		    <div class="panel-group">
		        <div class="faqHeader"><i class="fa fa-exclamation"></i> Vul eerst 3 wensen in</div>
		    </div>
	    {/if}
	{else}
		<div class="container content">
	    <div class="panel-group">
	        <div class="faqHeader"><i class="fa fa-exclamation"></i> Log in om deze pagina te gebruiken	</div>
	    </div>
	{/if}
   <!--=== End Content Part ===-->
</div>
 
{include file='../View/Assets/php/footer.tpl'}
</div><!--/wrapper-->
{include file='../view/Assets/php/jsCall.tpl'}

</body>
</html>
