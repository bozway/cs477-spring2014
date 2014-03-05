<?php
$format = get_post_format();
$bavotasan_theme_options = bavotasan_theme_options();
?>

	<div>
		<h3 class="open-position"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	</div>
	