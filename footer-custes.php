<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package Tesseract

 */

?>

    <?php

	$bodyClass = ( version_compare($wp_version, '4.0.0', '>') && is_customize_preview() ) ? 'backend' : 'frontend';



	$opValue1 = get_theme_mod('tesseract_footer_colors_bck_color_opacity');

    $footer_bckOpacity = is_numeric($opValue1) ? TRUE : FALSE;

    if ( is_front_page() && ( $footer_bckOpacity && ( intval($opValue1) < 100 ) ) ) $bodyClass .= ' transparent-footer';





	$footpos = ( is_front_page() && ( $footer_bckOpacity && ( intval($opValue1) < 100 ) ) ) ? 'pos-absolute' : 'pos-relative';


	?>

	</div><!-- #content -->

<?php if( !is_plugin_active('tesseract-header-footer-builder-plugin/tesseract-header-footer-builder-plugin.php')){ ?>

	<footer id="colophon_TesseractTheme" class="site-footer <?php echo $footpos; ?>" role="contentinfo">



		<?php $additional = get_theme_mod('tesseract_footer_additional_content') ? true : false;



        $menuClass = 'only-menu';

        if ( $additional ) $menuClass = 'is-additional';



        $addcontent_hml = (get_theme_mod('tesseract_footer_additional_content')) ? get_theme_mod('tesseract_footer_additional_content') : 'nothing';

		$footerNav_class = ( is_string($addcontent_hml) && ( $addcontent_hml !== 'nothing' ) ) ? 'is-before' : 'none-before';



		$content = get_theme_mod('tesseract_footer_right');

		$content_default_button = get_theme_mod('tesseract_footer_right_content_if_button');



		$footerWidthClass = ( get_theme_mod('tesseract_footer_width') == 'fullwidth' ) ? ' footer-fullwidth' : ' footer-autowidth';


		if ( defined('TESSERACT_BRANDING_EXIST') ) {

			if ( $content ) :

				$rightContentClass = ' mother-content-' . $content;

			elseif ( !$content && $content_default_button ) :

				$rightContentClass = ' mother-content-notset mother-defbtn-isset';

			else:

				$rightContentClass = ' mother-content-notset mother-defbtn-isset';

			endif;

		} else {

			$rightContentClass = ' mother-branding';

		} ?>



    	<?php if ( class_exists( 'Tesseract_Remove_Branding' ) ){ ?>

		<div id="footer-banner" class="cf<?php echo ' menu-' . $menuClass; echo $rightContentClass . $footerWidthClass; ?> with_unbrandinglogo">

		<?php } else { ?>

    	<div id="footer-banner" class="cf<?php echo ' menu-' . $menuClass; echo $rightContentClass . $footerWidthClass; ?>">

		<?php } ?>

			 <?php // SHOULD some additional content be added before the menu?

                //if ( is_string($addcontent_hml) && ( $addcontent_hml !== 'nothing' ) ) :
			 	if ( is_string($addcontent_hml) ) :
			 ?>

            <div id="horizontal-menu-wrap" class="<?php echo $menuClass . ' ' . $footerNav_class; ?>">



                <?php // SHOULD some additional content be added before the menu?

                //if ( is_string($addcontent_hml) && ( $addcontent_hml !== 'nothing' ) ) :

                  if ( is_string($addcontent_hml) ) :
                ?>



                    <div id="horizontal-menu-before" class="switch thm-left-left"><?php tesseract_horizontal_footer_menu_additional_content( $addcontent_hml ); ?></div>



                <?php endif; //EOF left menu - IS before content ?>



                <?php $menuSelected = (get_theme_mod('tesseract_footer_menu_select')) ? get_theme_mod('tesseract_footer_menu_select') : 'none' ;



				if ( $menuSelected !== 'none' && $addcontent_hml == 'menu' ) : ?>


					<section id="footer-horizontal-menu" class="cf <?php echo $footerNav_class; ?>"><?php tesseract_output_menu( FALSE, FALSE, 'secondary', 1 ); ?></section>

              	<?php endif; ?>



            </div><!-- EOF horizontal-menu-wrap -->

            <!-- PERSONAL EDIT FOOTER AREA -->

                       <!-- right footer content -->

       <div class = "socialicons" style="float: right;">
       <ul class="hm-social">

         <li><a title="Follow Us on Facebook" href="http://Facebook.com" target="_blank" class="customize-unpreviewable"><img src="http://localhost/Efitprogram/wp-content/uploads/2018/02/Logomakr_87cH2U.png" width="75" height="75" alt="Facebook icon"></a></li><li><a title="Follow Us on Instagram" href="https://www.instagram.com/livin_thejourney/" target="_blank" class="customize-unpreviewable"><img src="http://localhost/Efitprogram/wp-content/uploads/2018/02/Logomakr_1mxgLX.png" width="75" height="75" alt="Instagram icon"></a></li><li><a title="Follow Us on Youtube" href="http://youtube.com" target="_blank" class="customize-unpreviewable"><img src="http://localhost/Efitprogram/wp-content/uploads/2018/02/Logomakr_57gzHU.png" width="75" height="75" alt="Youtube icon"></a></li><li><a title="Follow Us on Twitter" href="http://twitter.com" target="_blank" class="customize-unpreviewable"><img src="http://localhost/Efitprogram/wp-content/uploads/2018/02/Logomakr_0Mvvee.png" width="75" height="75" alt="Twitter icon"></a></li>
           </ul>
</div>


     <div class = "logo" style="float: left; width: 33%; position: relative; top: 10px;"><a href="http://localhost/Efitprogram/?customize_changeset_uuid=9b4c6bfe-d301-4d96-acac-61632be7e657&amp;customize_messenger_channel=preview-0" rel="home" target="_self"><img src="http://localhost/Efitprogram/wp-content/uploads/2018/02/Main-logo.png" alt="logo" style="height: 40px;"></a></div>


<div class = "footer-menu" style="float: left; padding-left: 1%; font-family: roboto;">
<a href="http://localhost/Efitprogram/" target="_self">Home</a>
       <a> | </a>
<a href="http://localhost/Efitprogram/intermediate" target="_self">Intermediate</a>
     <a> | </a>
<a href="http://localhost/Efitprogram/experienced" target="_self">Experienced</a>
   <a> | </a>
<a href="http://localhost/Efitprogram/blog" target="_self">Blog</a> |
<a href="http://localhost/Efitprogram/about-us" target="_self">About Us</a>
</div>

         <!-- right footer content End -->

<!-- END PERSONAL EDIT FOOTER AREA -->

        <?php endif; ?>


			<?php $my_unbrandinglogo = get_theme_mod('tesseract_footer_content_if_unbranding'); ?>



			<?php if (class_exists( 'Tesseract_Remove_Branding' ) ){

			if(!empty($my_unbrandinglogo)){ 	?>

			<div class="footer-extreme-right">

			<?php echo $my_unbrandinglogo; ?>

			</div>

			<?php }else{ ?>

                  <style>.with_unbrandinglogo #footer-banner-right{width:40% !important;}

				  #footer-banner-right.banner-right #footer-button-container{ width:100% !important; text-align:right;}</style>

			<?php }

			} ?>



      	</div><!-- EOF footer-banner -->



	</footer><!-- #colophon -->
<?php }else{
	do_action('tes_footer_content_builder');
 } ?>

</div><!-- #page -->
<?php
if ( class_exists( 'Tesseract_Remove_Branding' ) ){
	?>
	<style>
	#footer-banner #horizontal-menu-wrap, #footer-banner #footer-banner-centre, #footer-banner #footer-banner-right{ display:table-cell!important; float:none; vertical-align:middle;}

	@media screen and (max-width: 768px) {
	#footer-banner #horizontal-menu-wrap, #footer-banner #footer-banner-centre, #footer-banner #footer-banner-right{ display:block!important;}
	}
	</style>

	<?php
}else{
	?>
	<style>
	#footer-banner #horizontal-menu-wrap, #footer-banner #footer-banner-centre, #footer-banner #footer-banner-right{ display:table-cell!important; vertical-align:middle;}

	@media screen and (max-width: 768px) {
	#footer-banner #horizontal-menu-wrap, #footer-banner #footer-banner-centre, #footer-banner #footer-banner-right{ display:block!important;}
	}
	</style>
	<?php
}
?>
<script type="text/javascript">
	jQuery(document).on('change',"#fl-builder-settings-section-subheading_typo .fl-font-field-font", function(){
	//jQuery("#fl-builder-settings-section-subheading_typo").find(".fl-font-field-font").change(function(){
		//alert(123);
 		var fontvalue = jQuery(this).val();
 		//console.log('fontvalue ', fontvalue);
 		if(fontvalue)
		{
			var link = document.createElement('link');
		    link.id = 'tesseract-sub-heading-preview';
		    link.rel = 'stylesheet';
		    link.href = '//fonts.googleapis.com/css?family='+fontvalue;
		    document.head.appendChild(link);
		    jQuery('.wpsm-heading-wrap .wpsm-subheading .wpsm-subheading-text').css('font-family',fontvalue);
		}
	});
</script>

<script>
 var heightfoot = jQuery('#footer-banner').height();
 jQuery('#footer-banner-right').css('height', heightfoot)
</script>


<?php wp_footer(); ?>
<?php

$mmdClass = (get_theme_mod( 'tesseract_mobmenu_opener_mob' )) ? get_theme_mod( 'tesseract_mobmenu_opener_mob' ) : 'mob-showit';
if( $mmdClass == 'mob-showit' )
{
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

		$(".top-navigation").prepend("<div class='mobile-menu-collaps-button'> <i class='fa fa-bars'></i> <i class='fa fa-times'></i></div>");

		$(".mobile-menu-collaps-button").click(function(){
			$(".nav-menu").toggleClass("showMenus");
			$(".mobile-menu-collaps-button").toggleClass("close-btns");
			$(".flex-direction-nav").toggleClass("close-nav");
			$(".site-footer").toggleClass("close-nav");

		});

		$( ".nav-menu li:has(> ul)" ).each(function() {
			 $(this).addClass("hasSubMenu");
			 $(this).append("<span class='submenuu-arrrow'><i class='fa fa-caret-down'></i></span>");
		});

		$(".submenuu-arrrow").click(function(){
				//$(this).parent().toggleClass("openSubmenu");
				$(this).closest('li.hasSubMenu').toggleClass("openSubmenu");
			 });

	});

</script>
<?php
}
?>
<?php
$mobmenu_bckColor = get_theme_mod('tesseract_mobmenu_background_color') ? get_theme_mod('tesseract_mobmenu_background_color') : '#336ca6';
$mobmenu_linkColor = get_theme_mod('tesseract_mobmenu_link_color') ? get_theme_mod('tesseract_mobmenu_link_color') : '#fff';

$mobmenu_xColor = get_theme_mod('tesseract_mobmenu_x_color') ? get_theme_mod('tesseract_mobmenu_x_color') : '#fff';
$mobmenu_x_bck_Color = get_theme_mod('tesseract_mobmenu_x_bck_color') ? get_theme_mod('tesseract_mobmenu_x_bck_color') : '#000';

$mobmenu_fontsize = get_theme_mod('tesseract_mobile_menu_font_size') ? get_theme_mod('tesseract_mobile_menu_font_size') : 22;

?>
<style type="text/css">
	#masthead_TesseractTheme.mob-view #menu-top{ background-color:<?php echo $mobmenu_bckColor; ?> !important;}
	.mobile-menu-collaps-button{
		background-color:<?php echo $mobmenu_bckColor; ?> !important;
	}
	.mobile-menu-collaps-button i{color: <?php echo $mobmenu_linkColor; ?> !important;}

	@media (max-width: 1023px){
		.top-navigation .nav-menu.showMenus {
			background-color: <?php echo $mobmenu_bckColor; ?> !important;
		}

		.mobile-menu-collaps-button.close-btns{
			background-color:<?php echo $mobmenu_x_bck_Color; ?> !important;
			color:<?php echo $mobmenu_xColor; ?> !important;
		}
		.mobile-menu-collaps-button.close-btns i{
			color:<?php echo $mobmenu_xColor; ?> !important;
		}
		.submenuu-arrrow i{
			color: <?php echo $mobmenu_linkColor; ?> !important;
		}

		.top-navigation ul li > a{
			font-size: <?php echo $mobmenu_fontsize; ?>px !important;
			color: <?php echo $mobmenu_linkColor; ?> !important;
		}
	}
</style>


</body>

</html>
