<?php
if(! defined('ABSPATH')) exit;

/*
* Crea un Shortcode, uso: [quizbook]
*/
function quizbook_shortcode(){
    $args = array(
        'post_type' => 'quizes',
        'posts_per_page' => 20
    );
    $quizbook = new WP_Query($args); 
    ?>
    <form name="quizbook_enviar" id="quizbook_enviar">
        <div id="quizbook" class="quizbook">
            <ul>
                <?php while($quizbook->have_posts()): $quizbook->the_post(); ?>
                    <li data-pregunta="<?php echo get_the_ID(); ?>">
                        <?php the_title('<h2>', '</h2>'); ?>
                        <?php the_content(); ?>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </form><!-- form -->
<?php
}
add_shortcode('quizbook', 'quizbook_shortcode')
?>