<?php

if (empty($_POST)){
header('Location: ' . site_url('purchase-options'));
}else{
require_once('charge.php');
session_start();
// store_new_account($_SESSION['fName'], $_SESSION['lName'], $_SESSION['email'], $_SESSION['username'], $_SESSION['password'],
// 									$customerId, $last4, $amount);

$firstName = $_SESSION['fName'];

}

?>

<script type="text/javascript">
var gayboi = "<?php echo $firstName; ?>";
	alert(gayboi);
function store_new_client_account() {

	// jQuery.ajax({
	// 			type: "POST",
	// 			url: ajaxurl,
	// 			data: ({
	// 				action: "store_new_account",
	// 				fName: fName,
	// 				lName: lName,
	// 				email: email,
	// 				username: username,
	// 				password: password
	// 			}),
	// 			success: function (response){
	// 			}
	// 		});


}

</script>


<?php


/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package Tesseract

 */



get_header();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<div id="primary" class="content-area sidebar-left">

    <div id = "display-sessions" class="row align-items-center" style = "text-align: center; padding-bottom: 50px;">
      <div class="col align-items-center" id = "header-content-items">
				<h1>Thank You And Welcome!</h1>
				<hr>
				<p><?php echo $product; ?>.
					Your transaction ID is <?php echo $tid; ?>.
				Email receipt has been sent to your account.</p>
			</div>
		</div>

	</div><!-- #primary -->

<style type="text/css">
	.fl-builder .site-content{ max-width:1100px !important; margin:0 auto !important;}
</style>

<?php if ( !is_plugin_active('woocommerce/woocommerce.php') || ( is_plugin_active('woocommerce/woocommerce.php') && ( !isset( $layout_default ) || !$layout_default || ( $layout_default == 'sidebar-left' ) || ( $layout_default == 'sidebar-right' ) ) ) ) get_sidebar(); ?>

  <script src= "<?php echo get_stylesheet_directory_uri(); ?>/js/arrow_down.js"></script>

<?php //get_footer(); ?>

<?php get_footer('custes'); ?>
