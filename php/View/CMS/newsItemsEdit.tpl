<!DOCTYPE html>
<html lang="en">
<head>
	{include './head.tpl'}
</head>
<body>
	{include './navbar.tpl'}
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">
			{include './main_menu.tpl'}
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
							<tr>
								<td>1</td>
								<td>Lorem ipsum dolor sit amet</td>
								<td>Ferry Zijlmans</td>
								<td>Januari 24, 2015</td>
								<form action="wishController.php" method="POST">
									<input type="hidden" name="wishID" id="wishID" value="3">
								<td class="center">		  
									<button type="submit" name="decline" class="btn btn-danger">
										<i class="halflings-icon white remove"></i>
									</button>
									<button type="submit" name="Edit" class="btn btn-warning">
										<i class="halflings-icon white edit"></i>
									</button>
								</td>
								</form> 
							</tr>
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
	{include './footer.tpl'}
</body>
</html>
