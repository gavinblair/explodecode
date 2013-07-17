<?php get_header(); ?>
            <img src="http://i.imgur.com/IyyXt6d.png">
            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row article">
                        <div class="span2 offset1">
                            <p>
                                <img src="http://i.imgur.com/byDYh6P.png">
                                <br>
                                <strong><?php the_author(); ?></strong>
                                <br>
                                <small>
                                  <em>Explode Code</em> 
                                </small>
                            </p>
                        </div>
                        <div class="span8">
                            <h2><?php the_title(); ?></h2>
                            <p class="lead"><?php the_excerpt(); ?></p>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>
            