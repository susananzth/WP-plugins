<?php
//if(! define('ABSPATH')) exit;

function quizbook_agregar_metaboxes(){
    
    // Agregar metabox a quizes
    add_meta_box('quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes', 'quizes', 'normal', 'high');
}
add_action('add_meta_boxes', 'quizbook_agregar_metaboxes');

/*
* Muestra el contenido HTML de los metaboxes
*/
function quizbook_metaboxes(){ ?>
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
                <input type="text" id="respuesta_1" name="qb_respuesta_1" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_2">b)</label>
            </th>
            <td>
                <input type="text" id="respuesta_2" name="qb_respuesta_2" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_3">c)</label>
            </th>
            <td>
                <input type="text" id="respuesta_3" name="qb_respuesta_3" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_4">d)</label>
            </th>
            <td>
                <input type="text" id="respuesta_4" name="qb_respuesta_4" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_5">e)</label>
            </th>
            <td>
                <input type="text" id="respuesta_5" name="qb_respuesta_5" class="regular-text">
            </td>
        </tr>
        <tr>
            <th class="row-title">
                <label for="respuesta_correcta">Respuesta correcta</label>
            </th>
            <td>
                <select id="respuesta_correcta" name="quizbook_correcta" class="postbox">
                    <option value="">Elige la respuesta correcta</option>
                    <option value="qb_correcta:a">a</option>
                    <option value="qb_correcta:b">b</option>
                    <option value="qb_correcta:c">c</option>
                    <option value="qb_correcta:d">d</option>
                    <option value="qb_correcta:e">e</option>
                    
                </select>
            </td>
        </tr>
    </table>
<?php
}
?>