<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package sr-blog
 */
?>

<?php get_header(); ?>

<main>    
	<section class="posts">      
		<div class="posts__name">
			<div class="container">
				<h1 class="posts__title"><?php bloginfo('name'); ?></h1>
				<p class="posts__ad"><?php bloginfo('description'); ?></p> 
			</div>
		</div>      
		<div class="posts__content">
			<div class="container clearfix"> 
				<div class="posts__wrapper">
					<div class="posts__list">

						<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article class="posts__item">
							<div class="posts__img">
								<img src="<? bloginfo('template_directory') ?>/img/slide1-min.jpg" alt="Почему не стоит делать проводку самому">
								<a class="posts__more" href="<?php the_permalink( $post ); ?>">Читать полностью</a>
							</div>              
							<div class="posts__block">
								<div>
									<span class="posts__info posts__info--mark"><?php the_tags(); ?></span>
									<span class="posts__info posts__info--view">350</span>
								</div>
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
							</div>
						</article>
						<!-- post -->
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>						
					</div>


					<ul class="posts__pagination pagination">
						<li class="pagination__item"><a class="pagination__link active">1</a></li>
						<li class="pagination__item"><a class="pagination__link" href="#2" aria-label="Перейти на страницу">2</a></li>
						<li class="pagination__item pagination__item--hidden"><a class="pagination__link" href="#3" aria-label="Перейти на страницу">3</a></li>
						<li class="pagination__item pagination__item--hidden"><a class="pagination__link" href="#4" aria-label="Перейти на страницу">4</a></li>
						<li class="pagination__item pagination__item--hidden"><a class="pagination__link" href="#5" aria-label="Перейти на страницу">5</a></li>
						<li class="pagination__item"><a class="pagination__link" href="#" aria-label="Перейти на страницу">...</a></li>
						<li class="pagination__item"><a class="pagination__link" href="#45" aria-label="Перейти на страницу">45</a></li>
						<li class="pagination__item"><a class="pagination__link pagination__link--forward" href="#" aria-label="Перейти на страницу">Вперед&#187;</a></li>
					</ul>          
				</div>
				<!-- .Posts__wrapper -->

<?php get_sidebar(); ?>

			</div>
			<!-- .Container -->
		</div> 
		<!-- .posts__content -->
	</section>
	<!-- .Section "posts" -->
</main>  

<?php get_footer(); ?>        
  <!--<script id="__bs_script__">
//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.17.5'><\/script>".replace("HOST", location.hostname));
//]]>
</script>-->
<script src="<? bloginfo('template_directory') ?>/js/jquery-1.11.1.min.js"></script>
<script src="<? bloginfo('template_directory') ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<? bloginfo('template_directory') ?>/js/custom.js"></script>
</body>
</html>