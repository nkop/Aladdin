<?php
/* Smarty version 3.1.29, created on 2016-04-05 10:49:27
  from "C:\xampp\htdocs\Aladdin\php\View\CMS\navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57037c17c4eda4_88019039',
  'file_dependency' => 
  array (
    '59fa205fd6ce479d43a583a8051530dee2cf5c4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\CMS\\navbar.tpl',
      1 => 1459846151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57037c17c4eda4_88019039 ($_smarty_tpl) {
?>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>Alladin</span></a>
								
<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="#"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
<!-- end: User Dropdown -->
					</ul>
				</div>
<!-- end: Header Menu -->				
			</div>
		</div>
	</div>
<?php }
}
