<?php get_header() ?>

<div class="front">
    <h1>DETAILS</h1>
</div>
<div class="container">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <?php if(is_singular("post")): ?>
        <div class="post__meta">
          <div class="blog_meta">
              <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
              <p>
                  Publié le <?php the_date(); ?>
                  par <?php the_author(); ?>
              </p>
              <p>
                  Dans la catégorie <?php the_category(); ?>
              </p>
              <p>
                  Avec les étiquettes <?php the_tags(); ?>
              </p>
          </div>
        </div>
      <?php endif; ?>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
</div>

<?php get_footer() ?>