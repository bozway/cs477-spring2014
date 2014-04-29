<?php
/*
Template Name: User_Greet
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
get_header(); 

$user_email;

if ( is_user_logged_in() ) { 
$user_info = get_userdata(get_current_user_id());
        global $current_user;
        get_currentuserinfo();
} 
else 
{  

} 

?>

	<div id="primary" <?php bavotasan_primary_attr(); ?>>

		<?php
		while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>

			    <div class="entry-content">
				    <?php the_content( __( 'Read more &rarr;', 'tonic' ) ); ?>
					<div class="bs-example">

					    <div class="panel panel-default">
					        <!--

					         Default panel contents 

					        -->
					        <div class="panel-heading"></div>
					        <!--

					         Table 

					        -->
					        <br />
					        <table class="table">
					            <thead>
					                <tr>
					                    <th>Date</th>
					                    <th>Department</th>
					                    <th>Status</th>
					                </tr>
					            </thead>
					            <tbody>
								    <?php
								        $user_email = $user_info->user_email;
								        $myrows = $wpdb->get_results( "SELECT data, date_submitted, form_id 
								        								FROM  wp_visual_form_builder_entries"
								        							);
								        foreach($myrows as $value)
								        {
								        	$data = unserialize( $value->data );
								        	$name = $data[1][value];
								        	$email = $data[3][value];
								        	$position = $wpdb->get_results( "SELECT form_key 
								        									 FROM  wp_visual_form_builder_forms
								        									 WHERE wp_visual_form_builder_forms.form_id = " . $value->form_id
								        							);
								        	if($user_email == $email)
								        	{
								        		echo "<tr>
					                    				<td>" . $value->date_submitted . "</td>
					                    				<td>" . $position[0]->form_key . "</td>
					                    				<td></td>
					                			 	 </tr>";
					                		}
								        }
							        ?>
					            </tbody>
					        </table>
					    </div>

					</div>

			    </div><!-- .entry-content -->

			    <?php get_template_part( 'content', 'footer' ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
		endwhile; // end of the loop.
		?>

	</div><!-- #primary.c8 -->
<?php if ( $bavotasan_theme_options['home_posts'] && ! is_front_page())
			get_sidebar(); ?>
<?php get_footer(); ?>