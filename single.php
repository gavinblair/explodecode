<?php get_header(); ?>
            <?php 
                $img = '<img src="'.get_bloginfo('template_url').'/img/header.jpg" />';
                $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                foreach ( $attachments as $attachment_id => $attachment ) {
                    $img = wp_get_attachment_image($attachment_id, array(1170, 1170));
                    break;
                }
            ?>
            <?php if($img){ ?>
            <div class="topimg">
                <?php echo $img; ?>
            </div>
            <?php } ?>
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
                            <h2><?php the_title(); ?></h2>
                            <small><?php echo the_date(); ?></small>
                            <?php if(get_the_excerpt() !== get_the_content()){ ?>
                                <div class="lead"><?php the_excerpt(); ?></div>
                            <?php } ?>
                            <?php the_content(); ?>
                            <br />
                            <?php comments_template( '', true ); ?>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>