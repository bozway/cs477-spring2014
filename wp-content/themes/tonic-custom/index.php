<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
get_header(); ?>

	<?php if ( ( $bavotasan_theme_options['home_posts'] && is_front_page() ) || ! is_front_page() ) { ?>
	<div id="primary" class="c11 centered">
			<?php
			query_posts('category_name=home');
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
				<div class="row info">
					<div class="c6">
						<?php the_post_thumbnail(); ?>

					</div>

					<div class="c6">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>	
						<?php edit_post_link( __( '(edit)', 'tonic' ), '<p class="edit-link">', '</p>' );?>
					</div>
				</div>
				<?php endwhile;

				bavotasan_pagination();
			else :
				?>
				<article id="post-0" class="post no-results not-found">

				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
					?>
					<h1 class="entry-title"><?php _e( 'No posts to display', 'tonic' ); ?></h1>

					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'tonic' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
					</div><!-- .entry-content -->

					<?php
				else :
					get_template_part( 'content', 'none' );
				endif; // end current_user_can() check
				?>

				</article><!-- #post-0 -->
			    <?php
			endif;
			?>

			<div class="row" id="departments">
				<h3>Now hiring in:</h3>
				<?php foreach (get_categories() as $cat) : ?>
				<?php if ($cat->cat_name != 'Home' && $cat->cat_name != 'Uncategorized') { ?>
				<div class="c4 department">
					<a href="<?php echo get_category_link($cat->term_id); ?>">
						<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
						<div><?php echo $cat->cat_name; ?></div>
					</a>
				</div>
				<?php } endforeach;?>
			</div>
	</div><!-- #primary -->
	<?php } ?>
<?php get_footer(); ?>