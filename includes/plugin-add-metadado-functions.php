
<?php 
add_filter( 'manage_edit-shop_order_columns', 'custom_shop_order_column', 20 );
function custom_shop_order_column($columns)
{
    $reordered_columns = array();

  // Inserindo colunas num local especifico //depois do status
    foreach( $columns as $key => $column){
        $reordered_columns[$key] = $column;
        if( $key ==  'order_status' ){ //definindo o local especifico
           // Isentindo depois da coluna Status
			$reordered_columns['marketing_place_originario'] = __( 'MarketingPlace','theme_domain');
			//$reordered_columns['minha-coluna2'] = __( 'titulo','theme_domain'); Segunda coluna caso necessite

        }
    }
    return $reordered_columns; // retornando o array já configurado com o foreach
}

//Adicionando custom fields metadados foreach nova coluna
add_action( 'manage_shop_order_posts_custom_column' , 'custom_orders_list_column_content', 20, 2 ); // action para adicionar tanto a manipulação e listamento da coluna anteriormente adicionada
function custom_orders_list_column_content( $column, $post_id ) //$post_id pega a coluna / tabela
{
    switch ( $column )
    {
        case 'marketing_place_originario' :
          // Pegando custom post (advanced custom posts) metadados
            $my_var_one = get_post_meta( $post_id, 'marketing_place_originario', true );
            if(!empty($my_var_one))
                echo $my_var_one;

          //testando caso seja removido ou valor nulo(vazio)
            else
                echo '<small>(<em>no value</em>)</small>';

            break;
    }
}
