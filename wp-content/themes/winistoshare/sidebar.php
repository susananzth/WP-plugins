            <aside id="sidebar">
				<?php 
                    if(is_active_sidebar('main_sidebar')){
                    /* if para verificar si el sidebar está activo */
                        dynamic_sidebar('main_sidebar');
                    } else { ?>
                    <div class="widget">
                        <h3 class="widget-title"><?php _e('Buscar', 'win'); ?></h3>
                        <?php get_search_form(); ?>
                    </div>
                  <?php  } ?>
			</aside><!-- /#sidebar -->