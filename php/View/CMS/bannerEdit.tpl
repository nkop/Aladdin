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
		                        
<!-- 		                        AANPASSEN CONTOLLER ENZO -->
		                        
		                            Banner
		                            <small>Beheer</small>
		                        </h1>
		                    </div>
		                </div>
		                <!-- /.row -->
		                
						<div class="box-content">
						
<!-- 						EDIT HANDLER -->

									  <form action="Controller/CMS/Handlers/bannerHandler.php" enctype="multipart/form-data" method="post">
									  <div class="tab-content">
									    <div id="overzicht" class="tab-pane fade in active">
									    			<p>Pas hier je banner aan</p>
									      			<!-- Foto / video -->
													<div class="form-group">
						                                <label>Foto *</label>
														<span>{$banner->afbeelding_groot}</span>
						                                <input name="afbeelding_groot" id="afbeelding_groot" type="file" accept="image/*">
						                                <input type="hidden" name="afbeelding_grootHidden" value='{$banner->afbeelding_groot}'>
						                            </div>
						                            <div class="form-group">
						                                <label>Tekst</label>
						                                	<input name="tekst" id="tekst" class="form-control" value='{$banner->tekst}'>
						                            </div>
						                             <div class="form-group">
						                                <label>2e foto</label>
						                                <span>{$banner->afbeelding_klein}</span>
						                                <input name="afbeelding_klein" id="afbeelding_klein" type="file" accept="image/*">
						                                <input type="hidden" name="afbeelding_kleinHidden" value='{$banner->afbeelding_klein}'>
						                            </div>
									    </div>
									  </div>
					  				<div class="form-group ">
		                               	<input type="hidden" name="bannerID" value='{$banner->banner_id}'>
										<button class="btn btn-default buffer-top" type="submit">Opslaan</button>	
		                            </div>
	    
									</form>
								</div>
							</div>
							
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
