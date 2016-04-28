<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Alladin | Wensen</title>

   {include file='../View/Assets/php/Head.tpl'}
</head>

<body>

<div class="wrapper">
{include file='../View/Assets/php/NavTop.tpl'}


    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Wensen</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php?controller=homepageController&action=index">Homepagina</a></li>
                <li class="active">Wensen</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    {if ($text =='Logout')}
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
		    {if $wishesArray|@count lt 3}
		        <div class="faqHeader"><i class="fa fa-star"></i> Vul uw wens(en) in</div>
		        <div class="">
					 <form class="reg-page" action="Controller/Handlers/WishesHandler.php" method="post">
						{for $wishCounter=1 to (3-$wishesArray|@count)}
							<label>wens {$wishCounter}:<span class="color-red">*</span></label>
		                	<input type="text" name="wens{$wishCounter}" class="form-control margin-bottom-20" required="required">
						{/for}
	
	                    <div class="col-lg-12 text-right">
	                            <button class="btn-u" type="submit" name="save">Opslaan</button>
	                    </div>
		        	</form>
		        	{if !empty($wishesArray)}
		        		<div class="col-lg-12 text-right">
							<hr>
	                    </div>
		        	{/if}
		        </div>
			{/if}
	        {if !empty($wishesArray)}
	        	<div class="faqHeader"><i class="fa fa-star"></i> Dit zijn uw wensen</div>
	  	    	<div>
	  	    		<table class="col-md-12">
	  	    			<tr>
	  	    				<th class="col-md-10">Wens</th><th class=" class="col-md-2" wishestableright">Status</th>
	  	    			</tr>
					{foreach from=$wishesArray item=wish}
						<tr>
							<td class="col-md-10"><p>{$wish->wishtext}</p></td><td class=" class="col-md-2" wishestableright"><p>{$wish->wishstatus}</p></td>
						</tr>
					{/foreach}
					</table>
		    	</div>
	    	{/if} 
	    </div>
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
