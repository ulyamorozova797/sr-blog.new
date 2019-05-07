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
									<?php the_post_thumbnail('full'); ?>
									<a class="posts__more" href="<?php the_permalink( $post ); ?>">Читать полностью</a>
								</div>              
								<div class="posts__block">
									<div>
										<span class="posts__info posts__info--mark"><?php the_tags(''); ?></span>
										<span class="posts__info posts__info--view"><?php echo getPostViews(get_the_ID()); ?></span>
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
					
					<?php wp_pagenavi(); ?>					
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