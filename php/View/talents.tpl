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
                <li><a href="index.php?controller=homepageController&action=index">Homepagina</a></li>
                <li class="active">Talenten</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="minimalheight">
    	{if $wishesCount eq 3}
		    <div class="container content">
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
		        <div class="faqHeader"><i class="fa fa-star"></i> Vul uw talent in</div>
		        <div class="">
					 <form class="reg-page" action="Controller/Handlers/talentHandler.php" method="post">
					 	<div class="panel panel-default">
							<div class="panel-heading accordion-toggle">
								<h4 class="panel-title">
                					Talent:<span class="color-red">*</span>
           						</h4>						
							</div>
							<div class="panel-collapse">
								<div  class="panel-body">
									<label> Talent: </label>
									<input type="text" name="talent" class="form-control margin-bottom-20" required="required">
									<label> Bijbehorende categori&euml;n: </label>
									<fieldset>
										{foreach from=$tagsArray item=tag}
											<div class="col col-lg-2">
			        							<label class="checkbox-inline"><input type="checkbox" name="tags[]" value={$tag->tagId} class=""/>{$tag->tagName}</label>
			        						</div>
			        					{/foreach}
									</fieldset>		
								</div>		
							</div>
					 	</div>
	                    <div class="col-lg-12 text-right panel-heading">
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
		        	<div class="faqHeader"><i class="fa fa-star"></i> Dit zijn uw Talenten</div>
		  	    	<div>
		  	    		<table class="table table-striped">
		  	    			<tr>
		  	    				<th class="col col-md-5">Talent</th>
		  	    				<th class="col col-md-4">Categori&euml;n</th>
		  	    				<th class="col col-md-2">Status</th>
		  	    				<th class="col col-md-1">Verwijderen</th>
		  	    			</tr>
						{foreach from=$talentArray item=talent}
							<tr>
								<form class="reg-page" action="Controller/Handlers/talentHandler.php" method="post">
									<td class="col-md-5"><p>{$talent->talentText}</p></td>
									<td class="col col-md-4">
										{foreach from=$talent->talentTags item=tag}
											{$tag->tagName},
										{/foreach}
									</td>
									<td class=" class="col col-md-2" wishestableright">{$talent->talentStatus}</td>
									<td class="center col-md-2">	
										<input type="hidden" name="talentId" value={$talent->talentId}>			  
					  					<button type="submit" name="deleteTalent" class="btn btn-danger"><i class="fa fa-close"></i></button>
             						</td>
         						</form>
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
	</div>
   <!--=== End Content Part ===-->
</div>
 
{include file='../View/Assets/php/footer.tpl'}
</div><!--/wrapper-->
{include file='../view/Assets/php/jsCall.tpl'}
<script type="text/javascript">
$(document).ready(function () {
    $("[name=save]").click(function() {
        console.log("hoi");
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("Je moet minstens een tag aanvinken!");
        return false;
      }

    });
});

</script>

</body>
</html>
