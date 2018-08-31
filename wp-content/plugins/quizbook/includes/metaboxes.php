<?php
if(! defined('ABSPATH')) exit;

function quizbook_agregar_metaboxes(){
    
    // Agregar metabox a quizes
    add_meta_box('quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes', 'quizes', 'normal', 'high');
}
add_action('add_meta_boxes', 'quizbook_agregar_metaboxes');

/*
* Muestra el contenido HTML de los metaboxes
*/
function quizbook_metaboxes($post){ 
    wp_nonce_field(basename(__FILE__), 'quizbook_nonce');
?>
    <table class="fomr-table">
        <tr>
            <th class="row-title">
                <h2>Añade las respuestas aquí</h2>
            </th>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_1">a)</label>
            </th>
            <td>
                <!-- esc_attr es para libarar de cualquier atributo al momento de hacer la consulta al a bd y así
                    no haya ningun script oculto -->
                <input value="<?php echo esc_attr(get_post_meta($post->ID, 'qb_respuesta_1', true)); ?>" type="text" id="respuesta_1" name="qb_respuesta_1" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_2">b)</label>
            </th>
            <td>
                <input value="<?php echo esc_attr(get_post_meta($post->ID, 'qb_respuesta_2', true)); ?>" type="text" id="respuesta_2" name="qb_respuesta_2" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_3">c)</label>
            </th>
            <td>
                <input value="<?php echo esc_attr(get_post_meta($post->ID, 'qb_respuesta_3', true)); ?>" type="text" id="respuesta_3" name="qb_respuesta_3" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_4">d)</label>
            </th>
            <td>
                <input value="<?php echo esc_attr(get_post_meta($post->ID, 'qb_respuesta_4', true)); ?>" type="text" id="respuesta_4" name="qb_respuesta_4" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_5">e)</label>
            </th>
            <td>
                <input value="<?php echo esc_attr(get_post_meta($post->ID, 'qb_respuesta_5', true)); ?>" type="text" id="respuesta_5" name="qb_respuesta_5" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_correcta">Respuesta correcta</label>
            </th>
            <td>
                <?php $respuesta = esc_html(get_post_meta($post->ID, 'quizbook_correcta', true)); ?>
                <select id="respuesta_correcta" name="quizbook_correcta" class="postbox">
                    <option value="">Elige la respuesta correcta</option>
                    <option <?php selected($respuesta, 'qb_correcta:a') ?> value="qb_correcta:a">a</option>
                    <option <?php selected($respuesta, 'qb_correcta:b') ?> value="qb_correcta:b">b</option>
                    <option <?php selected($respuesta, 'qb_correcta:c') ?> value="qb_correcta:c">c</option>
                    <option <?php selected($respuesta, 'qb_correcta:d') ?> value="qb_correcta:d">d</option>
                    <option <?php selected($respuesta, 'qb_correcta:e') ?> value="qb_correcta:e">e</option>
                    
                </select>
            </td>
        </tr>
    </table>
<?php
}
function quizbook_guardar_metaboxes($post_id, $post, $update) {
    /* Validación del nonce para seguridad de la página antes de insertar los datos. */
    if(!isset ($_POST['quizbook_nonce']) || !wp_verify_nonce($_POST['quizbook_nonce'], basename(__FILE__))){
        return $post_id;
    }
    if(!current_user_can('edit_post', $post_id)){
        return $post_id;
    }
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return $post_id;
    }
    
    $respuesta_1 = $respuesta_2 = $respuesta_3 = $respuesta_4 = $respuesta_5 = $correnta = '';
    /* sanitize_text_field es para validar que los datos sean correctos */
    if(isset($_POST['qb_respuesta_1'])){
        $respuesta_1 = sanitize_text_field($_POST['qb_respuesta_1']);
    }
    update_post_meta($post_id, 'qb_respuesta_1', $respuesta_1);
    
    if(isset($_POST['qb_respuesta_2'])){
        $respuesta_2 = sanitize_text_field($_POST['qb_respuesta_2']);
    }
    update_post_meta($post_id, 'qb_respuesta_2', $respuesta_2);
    
    if(isset($_POST['qb_respuesta_3'])){
        $respuesta_3 = sanitize_text_field($_POST['qb_respuesta_3']);
    }
    update_post_meta($post_id, 'qb_respuesta_3', $respuesta_3);
    
    if(isset($_POST['qb_respuesta_4'])){
        $respuesta_4 = sanitize_text_field($_POST['qb_respuesta_4']);
    }
    update_post_meta($post_id, 'qb_respuesta_4', $respuesta_4);
    
    if(isset($_POST['qb_respuesta_5'])){
        $respuesta_5 = sanitize_text_field($_POST['qb_respuesta_5']);
    }
    update_post_meta($post_id, 'qb_respuesta_5', $respuesta_5);
    
    if(isset($_POST['quizbook_correcta'])){
        $correcta = sanitize_text_field($_POST['quizbook_correcta']);
    }
    update_post_meta($post_id, 'quizbook_correcta', $correcta);
}
/*Funcion que guarda todos los datos que se escribieron en el metaboxes*/
add_action('save_post', 'quizbook_guardar_metaboxes', 10, 3);
?>