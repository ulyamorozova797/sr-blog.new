<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sr-blog
 */

get_header();
?>

<main class="page-main">
	<div class="container">

		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
      <!--<ul class="breadcrumbs">
        <li class="breadcrumbs__item"><a class="breadcrumbs__link breadcrumbs__link--home" href="index.php">Блог</a></li>
        <li class="breadcrumbs__item"><a class="breadcrumbs__link">Почему не стоит делать проводку самому</a></li>
    </ul> -->
</div> 


<?php setPostViews(get_the_ID()); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="article">
		<div class="container clearfix"> 
			<div class="article__wrapper">
				<h1 class="article__title"><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>         
			</div>  

			<?php get_sidebar( 'article' ); ?>			
		</div>
		<!-- .Container -->   
	</article>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<!-- no posts found -->
<?php endif; ?>   

<!--.article-->
</main>  
<?php
get_footer();


