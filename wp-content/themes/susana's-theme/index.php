<?php get_header(); ?><!-- Call to header partial -->
			
			<section id="main-content">
                <article class="post resume">
					<header class="post-title">
						<h2><a href="">Ejemplo de un formuario de búsqueda con PDO.</a></h2>
					</header>
					<div class="post-content">
						<form id="form-search" action="mysql-select.php" method="get">
                            <label for="txt-usuario">Usuario:
                                <input id="txt-usuario" name="txt-usuario" type="text"
                                       placeholder="Usuario" class="">
                            </label>
                            <label for="txt-name">Nombre:
                                <input id="txt-name" name="txt-name" type="text"
                                       placeholder="Nombre" class="">
                            </label>
                            <label for="btn-search">
                                <input id="btn-search" name="btn-search" type="submit" value="Búscar">
                            </label>
                        </form>
					</div>
				</article>	<!-- article -->
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <!-- Si hay posts para mostrar, mientras los consiga, por cada post carga la información. Se cierra el while y el if al final de los article -->
				<article class="post resume">
					<header class="post-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <!-- the_permalink() enlaza el título al detalle del artículo. the_title() va cargando todos los títulos  -->
						<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <?php the_category(', '); ?></small>
					</header>
					<div class="post-content">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo &rarr;', 'apk'); ?></a>
					</div>
				</article>	<!-- article -->
                <?php endwhile; else: ?>
                <article class="post resume">
					<header class="post-title">
						<h2><?php _e('No hay comentarios para mostrar'); ?></h2>
					</header>
					<div class="post-content">
						<p><?php _e('No hay contenido que correspondan con esta página, por favor realizar una búsqueda para encontrar lo que desea ver:', 'apk'); ?></p>
                        <?php get_search_form(); ?>
					</div>
				</article>	<!-- article -->
                <?php endif; ?>
                <?php if( get_next_posts_link() || get_previous_posts_link() ) { ?>
                    <div class="posts-nav cf">
                        <?php next_posts_link( __('&larr; Previos', 'apk')); ?>
                        <?php previous_posts_link( __('Recientes &rarr;', 'apk')); ?>
                    </div>
                <?php } ?>
			</section><!-- /#main-content -->
			<?php get_sidebar(); ?><!-- Call to sidebar partial -->
			
<?php get_footer(); ?><!-- Call to footer partial -->