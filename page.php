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
            