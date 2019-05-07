<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sr-blog
 */

?>


<?php get_sidebar(); ?>


<article class="posts__item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	<div class="">		
		<div class="posts__img">
			<?php sr_blog_post_thumbnail(); ?>
			<a class="posts__more" href="<?php the_permalink( $post ); ?>">Читать полностью</a>
		</div> 

		<div class="posts__block">
			<div>
				<span class="posts__info posts__info--mark"><?php the_tags(''); ?></span>
				<span class="posts__info posts__info--view"><?php echo getPostViews(get_the_ID()); ?></span>
			</div>
			<div>
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="posts__title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</div>

			<?php
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sr-blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );		
			?>
		</div>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
<?php wp_pagenavi(); ?>

