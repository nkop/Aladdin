<?php
/* Smarty version 3.1.29, created on 2016-04-12 23:05:02
  from "C:\xampp\htdocs\Aladdin\php\view\Assets\php\jsCall.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570d62fea0ba84_26775062',
  'file_dependency' => 
  array (
    '7dd2030fcdd52968370150de6557656be0d27e57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aladdin\\php\\view\\Assets\\php\\jsCall.tpl',
      1 => 1460495046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570d62fea0ba84_26775062 ($_smarty_tpl) {
?>
<!-- JS Global Compulsory -->			
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/jquery/jquery-migrate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<!-- JS Implementing Plugins -->
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/back-to-top.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/smoothScroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/layer-slider/layerslider/js/greensock.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/layer-slider/layerslider/js/layerslider.transitions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/plugins/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"><?php echo '</script'; ?>
>

<!-- JS Page Level -->           
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/js/plugins/layer-slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/js/plugins/owl-carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/js/plugins/owl-recent-works.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        LayerSlider.initLayerSlider();
        OwlCarousel.initOwlCarousel();    
        OwlRecentWorks.initOwlRecentWorksV2();
    });
<?php echo '</script'; ?>
>

<!-- JS Customization -->
<?php echo '<script'; ?>
 type="text/javascript" src="../view/assets/js/custom.js"><?php echo '</script'; ?>
>
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="../view/assets/plugins/respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../view/assets/plugins/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../view/assets/plugins/placeholder-IE-fixes.js"><?php echo '</script'; ?>
>
<![endif]--><?php }
}
