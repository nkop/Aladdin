<?php
/* Smarty version 3.1.29, created on 2016-04-05 10:48:21
  from "C:\xampp\htdocs\Aladdin\php\View\CMS\main_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57037bd5d61551_89776191',
  'file_dependency' => 
  array (
    'ef1c2b87f84dae7ba28256346f35356b1f50eb77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\View\\CMS\\main_menu.tpl',
      1 => 1459846100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57037bd5d61551_89776191 ($_smarty_tpl) {
?>
<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard </span></a></li>	
						<li><a href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> Tags </span></a></li>
						<li><a href="../../Controller/CMS/wishController.php"><i class="icon-tasks"></i><span class="hidden-tablet"> Wensen </span></a></li>
						<li><a href="#"><i class="icon-align-justify"></i><span class="hidden-tablet"> Gebruikers </span></a></li>
						<li><a href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Grafieken </span></a></li>						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Content</span><span class="label label-important"></span></a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Startpagina</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Wensenpagina</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Contactpagina</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
<!-- end: Main Menu --><?php }
}
