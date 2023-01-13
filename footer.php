    <section class="search__container">
        <div class="search__icon">
            <span class="dashicons dashicons-search"></span>
        </div>
        <form action="<?php echo home_url( '/' ); ?>" method="get">
            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        </form>
    </section>
    <?php wp_footer(); ?>
</body>
</html>