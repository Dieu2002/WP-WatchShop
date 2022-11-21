<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Construction Shop 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-construction-shop' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Construction Shop. Powered by', 'bosa-construction-shop' ) );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-construction-shop' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-construction-shop' ) );
		?>
	</a>
</div><!-- .site-info -->