<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

$orderId = $order->get_id();
$orderNumb = $order->get_order_number();
$orderDate = $order->get_date_created();
$orderEmail = $order->get_billing_email();
$paymentMethod = $order->get_payment_method_title();
$billing = $order->billing;
$shipping = $order->shipping;
$userAgent = $order->customer_user_agent;
$status = $order->status;
$currency = $order->currency;
$orderTotal = $order->total;
$discountTotal = $order->discount_total;
$orderKey = $order->order_key;
$userId = $order->customer_id;

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
debug_to_console($orderId); 
debug_to_console($orderNumb);
debug_to_console($orderDate);
debug_to_console($orderEmail);
debug_to_console($paymentMethod);
debug_to_console($shipping);
debug_to_console($userAgent);
debug_to_console($status);
debug_to_console($currency);
debug_to_console($orderTotal);
debug_to_console($discountTotal);
debug_to_console($orderKey);
debug_to_console($userId);
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

				<li class="woocommerce-order-overview__order order">
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
					<strong><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
						<strong><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

	<?php endif; ?>

</div>
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

	// var orderId = <?php echo $orderId; ?>;
	// var orderNumb = <?php echo $orderNumb; ?>;
	// var orderDate = <?php echo $orderDate; ?>;
	// var orderEmail = <?php echo $orderEmail; ?>;
	// var paymentMethod = <?php echo $paymentMethod; ?>;
	// var billing = <?php echo $billing; ?>;
	// var shipping = <?php echo $shipping; ?>;
	// var userAgent = <?php echo $userAgent; ?>;
	// var status = <?php echo $status; ?>;
	// var currency = <?php echo $currency; ?>;
	// var orderTotal = <?php echo $orderTotal; ?>;
	// var discountTotal = <?php echo $discountTotal; ?>;
	// var orderKey = <?php echo $orderKey; ?>;
	// var userId = <?php echo $userId; ?>;
	var order = <?php echo $order; ?>;
	
	tracker.onCustomEvent("checkout", {
		email: getUnomiUserId().replace(/"/g, ""),
		loggedIn: true,
		action: 'checkout',
		data: order
	});
</script>
