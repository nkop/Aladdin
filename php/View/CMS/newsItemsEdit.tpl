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
		                            Nieuws items
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
		                
		                <a href="admin.php?controller=editnews&action=NewsItem" class="btn btn_succes">Nieuw item</a>
		                
						<div class="box-content">
						
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
								<thead>
									<tr>
									<th>Nieuws item:</th>
									<th>Titel</th>
									<th>auteur</th>
									<th>Creatiedatum</th>
									<th>&nbsp;</th>
									</tr>
								</thead>   
							<tbody>	
							 {foreach from=$newsItems item=newsItem}					  
							<tr>
								<td>{$newsItem->nieuwsitemid}</td>
								<td>{$newsItem->titel}</td>
								<td>{$newsItem->volledignaam}</td>
								<td>{$newsItem->datum}</td>
								<td class="center">	
								<a href="admin.php?controller=editnews&action=Delete&id={$newsItem->nieuwsitemid}" class="btn btn-danger confirm"><i class="halflings-icon white remove"></i></a>
								<a href="admin.php?controller=editnews&action=NewsItem&id={$newsItem->nieuwsitemid}" class="btn btn-warning"><i class="halflings-icon white edit"></i></a>	  
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
