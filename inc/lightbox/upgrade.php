<?php
namespace W3TC;

if ( ! defined( 'W3TC' ) ) {
	die();
}
?>
<div id="w3tc-upgrade">
	<div class="w3tc_upgrade_header">
		<p>
			<span class="w3tc_upgrade_header_left">W3 Total Cache <?php esc_html_e( 'Pro unlocks more performance options for any website! ', 'w3-total-cache' ); ?></span>
			<span class="w3tc_upgrade_header_right"><?php esc_html_e( 'Only $99/year', 'w3-total-cache' ); ?></span>
		</p>
	</div>
	<div class="w3tc_upgrade_content">
		<p>
			<b><?php esc_html_e( 'Delay Scripts', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Reduce or eliminate render-blocking JavaScript by adding a loading delay for internal and external scripts.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Add a loading delay for internal and external scripts to reduce render blocking.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Remove Unused CSS/JS', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Effortlessly remove unnecessary CSS and JavaScript tags from your pages to optimize resource usage.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Remove unused CSS/JS tags from your pages.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Eliminate Render Blocking CSS', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Improve page load speed by eliminating render-blocking CSS with a simple Minify setting checkbox.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Eliminate reder blocking for CSS Minified with W3TC.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Full Site Delivery (FSD)', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Enhance user experience by hosting HTML pages and RSS feeds on high-speed global networks with supported CDNs.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Take advantage of Full Site CDNs to host HTML pages and RSS feed.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'WebP Converter', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Optimize your media library images with the modern WebP format for superior performance using our remote API service.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Convert your media library images to the optimized WebP format.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'And More...', 'w3-total-cache' ); ?></b>
			<br/>
			<span class="desktop"><?php esc_html_e( 'Gain access to Advanced Caching Statistics, Cache Purge Logs, Preload Requests, REST API Caching, Fragment Caching, Google Maps Lazy Loading, and support for popular plugins/themes like WPML, Yoast SEO, Genesis, and more.', 'w3-total-cache' ); ?></span>
			<span class="mobile"><?php esc_html_e( 'Gain access to several other performance and utility settings, features and extensions.', 'w3-total-cache' ); ?></span>
		</p>
	</div>
	<div class="w3tc_upgrade_footer">
		<?php if ( \W3TC\Util_Environment::is_https() ) : ?>
			<input id="w3tc-purchase" type="button"
				class="btn w3tc-size"
				value="<?php esc_attr_e( 'Subscribe to Go Faster Now', 'w3-total-cache' ); ?> " />
		<?php else : ?>
			<a id="w3tc-purchase-link"
				href="<?php echo esc_url( \W3TC\Licensing_Core::purchase_url( $data_src, $renew_key, $client_id ) ); ?>"
				target="_blank"
				class="btn w3tc-size">
				<?php esc_html_e( 'Subscribe to Go Faster Now', 'w3-total-cache' ); ?>
			</a>
		<?php endif ?>
	</div>
</div>
