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
		                            Nieuws item {$newsItem->titel}
		                            <small>Beheer</small>
		                        </h1>
		                    </div>
		                </div>
		                <!-- /.row -->
		                
						<div class="box-content">
						 <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#overzicht">Overzicht weergaven</a></li>
						    <li><a data-toggle="tab" href="#nieuws">Nieuws item</a></li>
						  </ul>
									  <form action="Controller/CMS/Handlers/newsItemHandler.php" enctype="multipart/form-data" method="post">
									  <div class="tab-content">
									    <div id="overzicht" class="tab-pane fade in active">
									    			<p>Maak een keus door een van de 2 velden hieronder te vullen; indien beide velden gevuld zijn zal de video worden gekozen.</p>
									    			<div class="form-group">
						                                <label>Auteur en datum</label>
						                                <p><strong>{$newsItem->volledignaam} - {$newsItem->datum}</strong></p>
						                            </div>
									      			<!-- Foto / video -->
													<div class="form-group">
						                                <label>Overzicht foto</label>
						                                <input name="thumbnailPicture" id="thumbnailPicture" type="file" accept="image/*">
						                                <input type="hidden" name="thumbnailPictureHidden" value='{$newsItem->thumbnail}'>
						                            </div>
						                            <div class="form-group">
						                                <label>Overzicht video</label>
						                                {if $newsItem->isvideo}
						                                	<input name="thumbnailVideo" id="thumbnailVideo" class="form-control" value='{$newsItem->thumbnail}'>
						                                {else}
						                                	<input name="thumbnailVideo" id="thumbnailVideo" class="form-control">
						                                {/if}
						                            </div>
									    </div>
									    <div id="nieuws" class="tab-pane fade">
									     			<!-- Title -->
													<div class="form-group">
						                                <label>Nieuws item titel</label>
						                                <input name="title" class="form-control" required value="{$newsItem->titel}">
						                            </div>
						                            <!-- tekst -->
						                            <div class="control-group hidden-phone">
														<br> <label class="control-label" for="textarea2">Tekst: </label>
					
														<div class="controls newstextbox" style="width: 683px !important">
															<textarea name="tekst" id="textarea2" rows="15" style="width: 100% !important" required>
																{$newsItem->tekst}
															</textarea>
														</div>
													</div>
													<div class="form-group">
						                                <label>Banner foto</label>
						                                <input name="bannerPicture" id="bannerPicture" type="file" accept="image/*">
						                                <p>{$newsItem->bannerfoto}</p>
						                                <input type="hidden" name="bannerPictureHidden" value="{$newsItem->bannerfoto}">
						                            </div>
													<input type="hidden" name="nieuwsItemID" value="{$newsItem->nieuwsitemid}">
									    </div>
									  </div>
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
