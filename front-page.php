<?php get_header() ?>

<div class="front">
    <h1>FRONT PAGE</h1>
</div>
<div class="container">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

</div>

<?php get_footer() ?>