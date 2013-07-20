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
                <h1 class="center">Level Up</h1>
                <p class="center" id="intro">In September 2013, we're running our first workshop on Phonegap. Learn
                  how to use your existing web development skills to build and deploy mobile
                  apps for multiple devices and stores. Get one-on-one time with local experts
                  with office hours. &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a class="btn btn-primary btn-large">Only $99 - Register Now</a>
                   <br /> <br /><a href="workshops">Learn More</a>
                </p>
              </div>
              <div id="talks" class='tab'>
                <h1 class="center">A Community of Developers</h1>
                <p class="center" id="intro">Talks features two or three local developers as they show off some of their code and tell the story behind it.
                Hosted at Big Viking Games, Talks is an opportunity to meet and learn from developers in the community. &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a class="btn btn-primary btn-large">Free event: September 12 - Register Now</a> 
                  <br /> <br /><a href="talks">Learn More</a>
                </p>
              </div>
              <div id="helloworld" class='tab'>
                <h1 class="center">Learn Something New</h1>
                <p class="center" id="intro">Hello, World! is an opportunity to learn something new. 
                  Pick a programming language or framework that you don't know and build something with it - anything!
                  Then, bring your work to this event, show it off like it's the next Facebook, and eat pizza!
                  This is an open event and everyone is invited to participate. &nbsp; &nbsp; &nbsp; &nbsp;
                  <br> &nbsp;
                  <br>
                  <a class="btn btn-primary disabled btn-large">Next event: November 2013 - Registration opening soon</a> 
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
          <a href="#" class="thumb align-center <?php if($c==1 || ($c-2)%3){ ?>offset25 <?php } ?> span3">
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