<?php get_header() ?>
<div class="front">
    <h1><?php post_type_archive_title(); ?></h1>
</div>
<div class="container portfolio__container">
    <h1 class="site__heading">Projets</h1>

    <section class="site__portfolio">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="project">
                <h2 class="project__title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <span class="taxonomies">
                            <?php the_terms(get_the_ID() , 'project-type'); ?>
                        </span>
                    </a>
                </h2>
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endwhile; endif; ?>
    </section> 
</div>

<?php get_footer() ?>