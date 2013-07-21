<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>
            <img src="http://i.imgur.com/LXE265H.jpg">
            <div class="container">
                <p class="lead center">Events for Web, Mobile and Game Developers</p>
            </div>
            <div class="navbar second">
                <div class="navbar-inner">
                  <div class="container">
                    <div class="navbar-content">
                      <ul class="tabs nav rotator">
                        <li class="active">
                          <a href="#workshops">Workshops</a> 
                        </li>
                        <li>
                          <a href="#talks">Talks</a> 
                        </li>
                        <li>
                          <a href="#helloworld">Hello World!</a> 
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="page-header">
              <div id="workshops" class='tab'>
                <h1 class="center"><?php echo get_option('workshops_title'); ?></h1>
                <p class="center" id="intro"><?php echo get_option('workshops_description'); ?> &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a href='workshops#register' class="btn btn-primary btn-large"><?php echo get_option('workshops_action'); ?></a>
                   <br /> <br /><a href="workshops">Learn More</a>
                </p>
              </div>
              <div id="talks" class='tab'>
                <h1 class="center"><?php echo get_option('talks_title'); ?></h1>
                <p class="center" id="intro"><?php echo get_option('talks_description'); ?> &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a href='talks#register' class="btn btn-primary btn-large"><?php echo get_option('talks_action'); ?></a> 
                  <br /> <br /><a href="talks">Learn More</a>
                </p>
              </div>
              <div id="helloworld" class='tab'>
                <h1 class="center"><?php echo get_option('helloworld_title'); ?></h1>
                <p class="center" id="intro"><?php echo get_option('helloworld_description'); ?> &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a href='hello-world#register' class="btn btn-primary btn-large"><?php echo get_option('helloworld_action'); ?></a> 
                  <br /> <br /><a href="hello-world">Learn More</a>
                </p>
              </div>
            </div>
      <p class="center"><?php the_title(); ?></p>
      <?php query_posts(array('post_type' => 'post')); ?>
      <?php $c=-1; if ( have_posts() ) : while ( have_posts() ) : the_post(); $c++; ?>
        <?php if($c%3 || $c==0){?>
          <div class="hidden-phone row">
        <?php } ?>
          <a href="<?php the_permalink(); ?>" class="thumb align-center <?php if($c==1 || ($c-2)%3){ ?>offset25 <?php } ?> span3">
             <?php echo get_avatar( get_the_author_meta( 'ID' ), 420, 'http://i.imgur.com/9xIliL2.png', get_the_author_meta( 'user_nicename' ) ); ?>
             <br>
             <strong class="caption"><?php the_title(); ?></strong> 
          </a>
        <?php if(($c-1)%3 && $c>3){?>
          </div><br />
        <?php } ?>
    <?php endwhile; endif; ?>
    <?php if(($c-1)%3 || $c<=3){ ?>
      </div><br />
    <?php } ?>
<?php get_footer(); ?>