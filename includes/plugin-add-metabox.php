<?php
add_action( 'woocommerce_admin_order_data_after_order_details', 'misha_editable_order_meta_general' ); // adicionando junto aos metabox detalhes
 
function misha_editable_order_meta_general( $order ){  ?>
 
		<br class="clear" />
		<h4>Marketing Place <a href="#" class="edit_address">Adicionar</a></h4>
		<?php 
			/*
			 * // pegar todos os valores de meta dados necessarios 
			 */ 

			$marketing_place_originario = get_post_meta( $order->get_id(), 'marketing_place_originario', true ); //' id ' 
		?>
		<div class="address">
			
			<?php
				
				if( $is_marketing ) : 
				?>

					<p><strong>marketing_place_originario:</strong> <?php echo wpautop( $marketing_place_originario ) ?></p>
				<?php
				endif;
			?>
		</div>
		<div class="edit_address"><?php
 
 
			woocommerce_wp_text_input( array( //Adicionando a area de texto a ser adicionado
				'id' => 'marketing_place_originario',
				'label' => 'Marketing Place:',
				'value' => $marketing_place_originario,
				'wrapper_class' => 'form-field-wide'
			) );
 
		?></div>
 
 
<?php }
 
add_action( 'woocommerce_process_shop_order_meta', 'misha_save_general_details' );
 
function misha_save_general_details( $ord_id ){
	update_post_meta( $ord_id, 'marketing_place_originario', wc_sanitize_textarea( $_POST[ 'marketing_place_originario' ] ) );
	
}