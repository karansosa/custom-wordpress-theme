<?php

function product_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function product_add_meta_box() {
	add_meta_box(
		'product-product',
		__( 'Product', 'product' ),
		'product_html',
		'product',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'product_add_meta_box' );

function product_html( $post) {
	wp_nonce_field( '_product_nonce', 'product_nonce' ); ?>

	<p>
		<label for="product_price"><?php _e( 'price', 'product' ); ?></label><br>
		<input type="text" name="product_price" id="product_price" value="<?php echo product_get_meta( 'product_price' ); ?>">
	</p><?php
}

function product_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['product_nonce'] ) || ! wp_verify_nonce( $_POST['product_nonce'], '_product_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['product_price'] ) )
		update_post_meta( $post_id, 'product_price', esc_attr( $_POST['product_price'] ) );
}
add_action( 'save_post', 'product_save' );

/*
	Usage: product_get_meta( 'product_price' )
*/