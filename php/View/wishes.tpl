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
						<strong>Error!</strong> Er ging iets niet goed
					</div>
	    		{/if}
	    	{/if}
		    {if $wishesArray|@count lt 3}
		        <div class="faqHeader"><i class="fa fa-heart"></i> Vul uw wens(en) in</div>
	    		 <div> 
		        	<div>Extra inspiratie tags</div>
		        	<div>
			        	<select size="10" class="form-control">
			        		{foreach from=$tagsArray item=tag}
			        			<option disabled> {$tag->tagName} </option>
			        		{/foreach}
			        	</select>
		        	</div>
		        </div>
		        <hr>
		        <div class="">
					 <form class="reg-page" action="Controller/Handlers/WishesHandler.php" method="post">
					 	<div>
							{for $wishCounter=1 to (3-$wishesArray|@count)}
								<div class="panel panel-default">
									<div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{$wishCounter}">
										<h4 class="panel-title">
	                    					Wens {$wishCounter}:<span class="color-red">*</span>
                   						</h4>						
									</div>
									<div id="collapse{$wishCounter}" class="panel-collapse collapse">
										<div  class="panel-body">
											<label> Wens: </label>
											<input type="text" name="wens{$wishCounter}" class="form-control margin-bottom-20" required="required">
											<label> Bijbehorende categori&euml;n: </label>
											<fieldset>
												{foreach from=$tagsArray item=tag}
													<div class="col col-lg-2">
					        							<label class="checkbox-inline"><input type="checkbox" name="tags{$wishCounter}[]" value={$tag->tagId} class=""/>{$tag->tagName}</label>
					        						</div>
					        					{/foreach}
											</fieldset>		
										</div>		
									</div>
								</div>
							{/for}	 	
					 	</div>
	                    <div class="col-lg-12 text-right panel-heading">
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
	        	<div class="faqHeader "><i class="fa fa-heart"></i> Dit zijn uw wensen</div>
	        	<div class="">
	  	    		<table class="table table-striped">
	  	    			<tr>
	  	    				<th class="col col-md-4">Wens</th>
	  	    				<th class="col col-md-4">Categori&euml;n</th>
	  	    				<th class="col col-md-2">Status</th>
	  	    				<th class="col col-md-1">Verleng uw wens</th>
	  	    				<th class="col col-md-1">Uw wens vervuld</th>
	  	    			</tr>
					{foreach from=$wishesArray item=wish}
						<tr>
							<td class="col col-md-4">{$wish->wishtext}</td>
								<td class="col col-md-4">
									{foreach from=$wish->tags item=tag}
										{$tag->tagName},
									{/foreach}
								</td>
							<td class="col col-md-2">{$wish->wishstatus}</td>
							{if $wish->wishstatus == "Geaccepteerd" && $wish->isExtendable == true}
								<form action="Controller/Handlers/WishesHandler.php" method="post">
									<input type="hidden" value="{$wish->wishid}" name="wish"/>
									<td class=" class="col col-md-1" wishestableright"><button class="btn btn-info" name="extend" type="submit">Verleng</button></td>									
								</form>
							{else}
								<td/>
							{/if}
							{if $wish->wishstatus == "Gematchd"}
								<form action="Controller/Handlers/WishesHandler.php" method="post">
									<input type="hidden" value="{$wish->wishid}" name="wishId"/>
									<td class=" class="col col-md-1" wishestableright"><button class="btn btn-info" name="fulfill" type="submit">Vervuld</button></td>									
								</form>
							{else}
								<td/>
							{/if}
						</tr>
					{/foreach}
					</table>
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