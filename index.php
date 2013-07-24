<?php get_header(); ?>
            <img src="<?php bloginfo('template_url'); ?>/img/header.jpg">
            <div class="container"><br />
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row article">
                        <div class="span2 offset1">
                            <p>
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 420, 'http://i.imgur.com/9xIliL2.png', get_the_author_meta( 'user_nicename' ) ); ?>
                                <br>
                                <strong><?php the_author_meta( 'user_nicename' ); ?></strong>
                                <br>
                                <small>
                                  <em><?php the_author_meta( 'user_description' ) ?></em>
                                </small>
                            </p>
                        </div>
                        <div class="span8">
                            <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                            <small><?php echo the_date(); ?></small>
                            <div class="lead"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>
            