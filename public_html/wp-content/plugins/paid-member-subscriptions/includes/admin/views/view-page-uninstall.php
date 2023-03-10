<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * HTML Output for the Uninstall page
 */
?>
<div class="wrap pms-wrap pms-uninstall-wrap">

	<h2><?php echo esc_html__( 'Uninstall Paid Member Subscriptions', 'paid-member-subscriptions' ); ?></h2>

	<p><?php echo esc_html__( 'We\'re sad to see you leave, but we understand that sometimes things don\'t work out as planned.', 'paid-member-subscriptions' ); ?></p>
	<p><?php echo esc_html__( 'Below you have information about what will be removed from your database. Please be advised that once this information is removed it cannot be recovered.', 'paid-member-subscriptions' ); ?></p>

	<br />

	<!-- Uninstall details table -->
	<table class="wp-list-table widefat striped">
		<tr>
			<td>
				<p><strong><?php echo esc_html__( 'Custom Options', 'paid-member-subscriptions' ); ?></strong></p>
				<span><?php echo esc_html__( 'Removes all custom options, used by Paid Member Subscriptions, from the <em>options</em> table of the database.', 'paid-member-subscriptions' ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<p><strong><?php echo esc_html__( 'Custom User Roles', 'paid-member-subscriptions' ); ?></strong></p>
				<span><?php echo esc_html__( 'Removes all custom user roles created by Paid Member Subscriptions. These user roles will be removed for all users that have them.', 'paid-member-subscriptions' ); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<p><strong><?php echo esc_html__( 'Custom Database Tables', 'paid-member-subscriptions' ); ?></strong></p>
				<span><?php echo esc_html__( 'Removes all information stored in our custom database tables and deletes these tables from your database.', 'paid-member-subscriptions' ); ?></span>
			</td>
		</tr>
	</table>

	<!-- Uninstall procedure admin notice -->
	<div class="pms-admin-notice pms-error"><p><strong>Warning: All information stored by Paid Member Subscriptions will be removed from your database in the Uninstall process and cannot be recovered. Please do a backup of your database before proceeding.</strong></p></div>

	<a class="button button-primary thickbox" href="#TB_inline?width=400&amp;height=210&amp;inlineId=pms-uninstall-confirmation"><?php echo esc_html__( 'Uninstall', 'paid-member-subscriptions' ); ?></a>
	<a class="button" href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>"><?php echo esc_html__( 'Cancel', 'paid-member-subscriptions' ); ?></a>


	<!-- Uninstall Confirmation thickbox -->
	<?php add_thickbox(); ?>
	<div id="pms-uninstall-confirmation" style="display: none;">
		<form action="" method="POST">
			<h3><?php echo esc_html__( 'Confirm Uninstall', 'paid-member-subscriptions' ); ?></h3>
			<p><?php echo wp_kses_post( __( 'To confirm the Uninstall process please type the word <strong>REMOVE</strong> in the field below and then click the Uninstall button.', 'paid-member-subscriptions' ) ); ?></p>

			<input type="text" autocomplete="off" name="pms-confirm-uninstall" />

			<div class="pms-uninstall-thickbox-footer">
				<input type="hidden" name="pmstkn" value="<?php echo esc_attr( wp_create_nonce( 'pms_uninstall_nonce', 'pmstkn' ) ) ?>" />

				<input type="submit" disabled name="pms-confirm-uninstall-submit" class="button button-primary" value="<?php echo esc_html__( 'Uninstall', 'paid-member-subscriptions' ); ?>" />
				<a id="pms-confirm-uninstall-cancel" class="button" href="#"><?php echo esc_html__( 'Cancel', 'paid-member-subscriptions' ); ?></a>
			</div>
		</form>
	</div>

</div>