<?php
namespace W3TC;

if ( ! defined( 'W3TC' ) ) {
	die();
}
?>
<div id="w3tc-upgrade">
	<div class="w3tc_upgrade_header">
		<p>W3 Total Cache <?php esc_html_e( 'Pro unlocks more performance options for any website!', 'w3-total-cache' ); ?><span><b><?php esc_html_e( 'only $99/year', 'w3-total-cache' ); ?></b></span></p>
	</div>
	<div class="w3tc_upgrade_content">
		<p>
			<b><?php esc_html_e( 'Advanced Statistics', 'w3-total-cache' ); ?></b>
			<br/>
			<span><?php esc_html_e( 'Analytics for you WordPress and Server cache that allow you to track the size, time and hit/miss ration of each type of cache, giving you the information needed to gain maximum performance.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Full Site Delivery (FSD)', 'w3-total-cache' ); ?></b>
			<br/>
			<span><?php esc_html_e( 'Provide the best user experience possible by hosting cached HTML pages and RSS feeds with (suppored) CDN\'s high speed global networks.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Extensions Support', 'w3-total-cache' ); ?></b>
			<br/>
			<span><?php esc_html_e( 'Add accelerated mobile pages (AMP) support. Improve the performance of you Genesis, WPML-powered site, and much more.', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'REST API Caching', 'w3-total-cache' ); ?></b>
			<br/>
			<span><?php esc_html_e( 'Save resources or add scale and performance to the WordPress API with W#TC Pro', 'w3-total-cache' ); ?></span>
		</p>
		<p>
			<b><?php esc_html_e( 'Fragment Caching', 'w3-total-cache' ); ?></b>
			<br/>
			<span><?php esc_html_e( 'Unlocking the fragment caching module delivers enhanced performance for plugins and themes that use the WordPress Transient API. StudioPress\' Genesis Framework is up to 60% faster with W3TC Pro.', 'w3-total-cache' ); ?></span>
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
