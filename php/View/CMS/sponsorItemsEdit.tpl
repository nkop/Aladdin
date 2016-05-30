<!DOCTYPE html>
<html lang="en">
<head>
	{include 'view/cms/Assets/head.tpl'}
</head>
<body>
	{include 'view/cms/Assets/navbar.tpl'}
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">
			{include 'view/cms/Assets/mainmenu.tpl'}
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>
						You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.
					</p>
				</div>
			</noscript>
			<!-- start: Content -->
			<div id="content" class="span10">
 				<div id="page-wrapper">
		            <div class="container-fluid">
		                <!-- Page Heading -->
		                <div class="row">
		                    <div class="col-lg-12">
		                        <h1 class="page-header">
		                           Sponsors
		                            <small>Beheer</small>
		                        </h1>
		                    </div>
		                </div>
		                <!-- /.row -->
		                
		                {if $Succesfull == 1}
		                <div class="alert alert-success">
						  <strong>Succes!</strong> De gegevens zijn succesvol opgeslagen.
						</div>
		                {elseif $Succesfull == 2}
		                <div class="alert alert-danger">
						  <strong>Error!</strong> De gegevens zijn niet succesvol opgeslagen, probeer het later opnieuw.
						</div>
		                {/if}  
		                
<!-- 		           LINK HIERONDER AANPASSEN!!! -->

		                <a href="admin.php?controller=editsponsor&action=sponsor" class="btn btn_succes">Nieuwe Sponsor</a>
		                
						<div class="box-content">
						
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
								<thead>
									<tr>
									<th>Sponsor-naam:</th>
									<th>URL</th>
									<th>Cijfer</th>
									<th>&nbsp;</th>
									</tr>
								</thead>   
							<tbody>
							
<!-- 							HIERONDER OOK AANPASSEN! CONTROLLER SHIZZLEEE -->
								
							{foreach from=$sponsoren item=sponsor}					  
							<tr>
								<td>{$sponsor->naam}</td>
								<td>{$sponsor->url}</td>
								<td>{$sponsor->cijfer}</td>
								<td class="center">	
								<a href="admin.php?controller=editSponsor&action=Delete&id={$sponsor->sponsor_id}" class="btn btn-danger confirm"><i class="halflings-icon white remove"></i></a>
								<a href="admin.php?controller=editSponsor&action=sponsor&id={$sponsor->sponsor_id}" class="btn btn-warning"><i class="halflings-icon white edit"></i></a>	  
								</td>
							</tr>
							{/foreach}
							</tbody>
							</table> 			            
						</div>
		                
		            </div>
		            <!-- /.container-fluid -->
        		</div>
        <!-- /#page-wrapper -->
			</div>
			<!-- end: Content -->
		</div>
		<!--/#content.span10-->
	</div>
	<!--/fluid-row-->
	{include 'view/cms/Assets/footer.tpl'}
</body>
</html>

