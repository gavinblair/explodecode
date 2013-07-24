<?php get_header(); ?>
            <img src="http://i.imgur.com/IyyXt6d.png">
            <div class="container"><br />
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row article">
                        <div class="span8 offset2">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php comments_template( '', true ); ?>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>
            