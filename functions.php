add_filter( 'woocommerce_loop_add_to_cart_link', 'replacing_add_to_cart_button', 10, 2 );
function replacing_add_to_cart_button( $button, $product  ) {
    $button_text = __("View product", "woocommerce");
    $button = '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';

    return $button;
}
