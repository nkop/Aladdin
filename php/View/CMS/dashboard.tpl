<!DOCTYPE html>
<html lang="en">
<head>
	
	{include 'view/cms/Assets/head.tpl'}
</head>

<body>
		<!-- start: Header -->
{include 'view/cms/Assets/navbar.tpl'}

	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
{include 'view/cms/Assets/mainmenu.tpl'}
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
<!-- start: Content -->
			<div id="divje" width="100%" height="100%">
			<div id="content" class="span10" style="padding: 0 !important">
			
			{include 'view/cms/Assets/breadcrumb.tpl'}		
		
			<div class="row-fluid">	
				
				<a class="quick-button metro orange span2" href="admin.php?controller=tag">
					<i class="fa fa-filter"></i>
					<p>Tags</p>					
				</a>
				<a class="quick-button metro pink span2" href="admin.php?controller=wish">
					<i class="fa fa-heart"></i>
					<p>Wensen</p>
				</a>
				<a class="quick-button metro green span2" href="admin.php?controller=talent">
					<i class="fa fa-star"></i>
					<p>Talenten</p>
				</a>
				<a class="quick-button metro blue span2" href="admin.php?controller=matches&action=index">
					<i class="fa fa-exchange"></i>
					<p>Matches</p>
				</a>
				<a class="quick-button metro red span2" href="admin.php?controller=registration&action=index">
					<i class="fa fa-user-plus"></i>
					<p>Registraties</p>
				</a>
				<a class="quick-button metro yellow span2" href="admin.php?controller=user&action=index">
					<i class="fa fa-group"></i>
					<p>Gebruikers</p>
				</a>
			
				
								
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	{include 'view/cms/Assets/footer.tpl'}
</body>
</html>
