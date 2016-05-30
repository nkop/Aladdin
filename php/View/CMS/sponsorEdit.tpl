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
		                        
		                            Sponsor {$sponsor->naam}
		                            <small>Beheer</small>
		                        </h1>
		                    </div>
		                </div>
		                <!-- /.row -->
		                
						<div class="box-content">
						
<!-- 						EDIT HANDLER -->

									  <form action="Controller/CMS/Handlers/sponsorHandler.php" enctype="multipart/form-data" method="post">
									  <div class="tab-content">
									    <div id="overzicht" class="tab-pane fade in active">
									    			<p>Pas hier je sponsor aan</p>
									      			<!-- Foto / video -->
													<div class="form-group">
						                                <label>Foto</label>
														<span>{$sponsor->afbeelding}</span>
						                                <input name="afbeelding" id="afbeelding" type="file" accept="image/*">
						                                <input type="hidden" name="afbeeldingHidden" value='{$sponsor->afbeelding}'>
						                            </div>
						                            <div class="form-group">
						                                <label>Naam</label>
						                                	<input name="naam" id="naam" class="form-control" value='{$sponsor->naam}'>
						                            </div>
						                             <div class="form-group">
						                                <label>URL</label>
						                                	<input name="url" id="url" class="form-control" value='{$sponsor->url}'>
						                            </div>
						                              <div class="form-group">
						                                <label>Cijfer</label>
						                                	<input type="number" name="cijfer" id="cijfer" class="form-control" value='{$sponsor->cijfer}'>
						                            </div>
									    </div>
									  </div>
									  <input type="hidden" name="sponsorID" value='{$sponsor->sponsor_id}'>
									<button type="submit">Opslaan</button>		    
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
