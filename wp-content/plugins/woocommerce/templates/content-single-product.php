<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$output = $product;
if (is_array($output))
	$output = implode(',', $output);
?>



<script type="text/javascript">
	var options={scope:'www.ecommerce.co.id',url:{api:'http://103.175.216.183:8181',script:'http://103.175.216.183:3400',},source:{id:"ee2db027-46cf-4034-a759-79f1c930f80d"},initialPageProperties:{path:location.pathname+location.hash,pageInfo:{pageID:"index",pageName:document.title,pagePath:document.location.pathname,destinationURL:document.location.origin+document.location.pathname,language:"en",categories:[],tags:[]},}}
	window.dxp || (window.dxp = {});
	!function(){for(var e=[],t=["trackSubmit","trackClick","trackLink","trackForm","initialize","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","personalize"],n=function(t){return function(){var n=Array.prototype.slice.call(arguments);return n.unshift(t),e.push(n),window.dxp}},i=0;i<t.length;i++){var a=t[i];window.dxp[a]=n(a)}function r(t){for(dxp.initialize({"Apache Unomi":options});e.length>0;){var n=e.shift(),i=n.shift();dxp[i]&&dxp[i].apply(dxp,n)}}dxp.load=function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=options.url.script+"/public/sdk/dxp-tracker.min.js",e.addEventListener?e.addEventListener("load",(function(e){r()}),!1):e.onreadystatechange=function(){"complete"!==this.readyState&&"loaded"!==this.readyState||r(window.event)};var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)},document.addEventListener("DOMContentLoaded",dxp.load),dxp.page(options.initialPageProperties)}();
	var tracker={onCustomEvent(eventName,object){dxp.track(eventName,object)},onClick(eventName,object){dxp.trackClick(eventName,object)},onLink(links,event,properties){dxp.trackLink(links,event,properties)},onFormSubmit(formId,eventName,object){window.addEventListener("load",function(){var form=document.getElementById(formId);console.log('form submit',form)
	dxp.trackForm(form,eventName,{formName:form.name})})},onInitialize(options){dxp.initialize(options)},onInitPage(options){dxp.page(options)},onPageView(options){dxp.pageview(options)},onIdentify(eventName,object){dxp.identify(eventName,object)},}


function getUnomiUserId() {
  const cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();
    if (cookie.startsWith('ajs_user_id=')) {
      const value = cookie.substring('ajs_user_id='.length);
      return decodeURIComponent(value);
    }
  }
  return null; // If the cookie is not found
}
</script>
	

<script type="text/javascript">
  // Get the PHP variable as a JavaScript variable
  var dataFromPHP = <?php echo $output; ?>;
 
  // Assuming "getUnomiUserId()" is a valid function that returns the Unomi user ID
  tracker.onCustomEvent('product interest', {
    email: getUnomiUserId().replace(/"/g, ""),
    action: 'view product',
    data: dataFromPHP
  });
</script>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

