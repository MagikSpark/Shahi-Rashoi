<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Styled Lite
 */

get_header(); ?>
<div id="wrapper">
<h1 class="entry-title">
		<?php printf( esc_html__( 'Search Results for: %s', 'styled-lite' ), '<span>' . get_search_query() . '</span>' ); ?>
  </h1>
<div id="contentwrapper" class="animated fadeIn">
  

  <div id="searchresult">
    	<?php if (have_posts()) : ?>
    		<?php while ( have_posts() ) : the_post(); ?>
    		<div <?php post_class(); ?>>
      			<div class="entry">
        			<h2 class="entry-title" id="post-<?php the_ID(); ?>">
                   		<a href="<?php the_permalink(); ?>" rel="bookmark">
          					<?php the_title(); ?>
          				</a>
                    </h2>
        			<div class="postdata">
          				<?php esc_html_e( 'Posted on', 'styled-lite' ); ?>
          				<?php echo get_the_date(); ?>
                    </div>
        			<?php the_excerpt(); ?>
      			</div>
    		</div>

			<?php endwhile; ?>
    		<?php the_posts_pagination(); ?>
    	<?php else : ?>
    		<p class="center">
      			<?php esc_html_e( 'No results.', 'styled-lite' ); ?>
    		</p>
    	<?php endif; ?>
  	</div>
  	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
