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
				<article class="post resume">
					<header class="post-title">
						<h2><a href="">El título de un post</a></h2>
						<small class="meta">Marzo 22, 2014 &bull; <a href="">Categoría</a></small>
					</header>
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="" class="readmore">Seguir leyendo &rarr;</a>
					</div>
				</article>	<!-- article -->
				<article class="post resume">
					<header class="post-title">
						<h2><a href="">El título de un post</a></h2>
						<small class="meta">Marzo 22, 2014 &bull; <a href="">Categoría</a></small>
					</header>
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="" class="readmore">Seguir leyendo &rarr;</a>
					</div>
				</article>	<!-- article -->
				<article class="post resume">
					<header class="post-title">
						<h2><a href="">El título de un post</a></h2>
						<small class="meta">Marzo 22, 2014 &bull; <a href="">Categoría</a></small>
					</header>
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="" class="readmore">Seguir leyendo &rarr;</a>
					</div>
				</article>	<!-- article -->
				<article class="post resume">
					<header class="post-title">
						<h2><a href="">El título de un post</a></h2>
						<small class="meta">Marzo 22, 2014 &bull; <a href="">Categoría</a></small>
					</header>
					<div class="post-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="" class="readmore">Seguir leyendo &rarr;</a>
					</div>
				</article>	<!-- article -->
				<div class="posts-nav cf">
					<a href="" >&larr; Previos</a>
					<a href="" >Recientes &rarr;</a>
				</div>
			</section><!-- /#main-content -->
			<?php get_sidebar(); ?><!-- Call to sidebar partial -->
			
<?php get_footer(); ?><!-- Call to footer partial -->