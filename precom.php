<?php
/*
Template Name: precom
*/
?>
<?php get_header(); ?>

     <script>

     var options = [
    {selector: '#newslettertrigger', offset: 600, callback: function(el)
     {
        jQuery(document).ready(function ($) {
     var $toastContent = $('<div>ITU News Weekly<a class="waves-effect blue waves-light btn">Sign Up</a></div>');
Materialize.toast($toastContent, 10000);
         });
    } },
  ];
  Materialize.scrollFire(options);

</script>


    <div class="verytopcont container">

        <div class="row">


      <div class="col m12 s12 l12">

       <p class="pageheading flow-text3">

            ITU Media Releases
    </p>

      </div>

         </div>

          <div class="row">

        <div class="col m6 s12 l12">


    <p class="topicheadings">

       News from ITU, latest updates and more.
    </p>


      </div>

        </div>

    <div id="newslettertrigger" class="row">


         <div class="col l5">

<?php


$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 99 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable grey lighten-2 z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitleblue blue-text"><?php the_title(); ?></p>
          <p class="precomcardsub blue-text">General News</p>
            </div>
                   </a>

               <?php endforeach;
wp_reset_postdata();?>

             <?php


$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => 99 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

             <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable grey lighten-2 z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitleblue blue-text"><?php the_title(); ?></p>
      <p class="precomcardsub blue-text">General News</p>
        </div>
             </a>

               <?php endforeach;
wp_reset_postdata();?>

             <?php


$args = array( 'posts_per_page' => 1, 'offset'=> 2, 'category' => 99 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                         <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable grey lighten-2 z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitleblue blue-text"><?php the_title(); ?></p>
    <p class="precomcardsub blue-text">General News</p>
        </div>
               </a>

               <?php endforeach;
wp_reset_postdata();?>

             <?php


$args = array( 'posts_per_page' => 1, 'offset'=> 3, 'category' => 99 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable grey lighten-2 z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitleblue blue-text"><?php the_title(); ?></p>
   <p class="precomcardsub blue-text">General News</p>
        </div>
                </a>

               <?php endforeach;
wp_reset_postdata();?>


                  <a href="http://www.itu.int/en/mediacentre/Pages/default.aspx">
    <div class="card-panel hoverable grey lighten-2 z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitleblue blue-text">See more news on our Mediacenter</p>
        </div>
             </a>


    </div>

           <div class="col l4">

<?php
$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 100 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
           <p class="precomcardsub white-text">Press Release</p>
        </div>
               </a>
                   <?php endforeach;
wp_reset_postdata();?>


               <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => 100 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
           <p class="precomcardsub white-text">Press Release</p>
        </div>
               </a>
                   <?php endforeach;
wp_reset_postdata();?>

               <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 2, 'category' => 100 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
           <p class="precomcardsub white-text">Press Release</p>
        </div>
               </a>

<?php endforeach;
wp_reset_postdata();?>


<?php
$args = array( 'posts_per_page' => 1, 'offset'=> 3, 'category' => 100 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">


    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
           <p class="precomcardsub white-text">Press Release</p>
        </div>
               </a>

<?php endforeach;
wp_reset_postdata();?>

               <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 4, 'category' => 100 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">


    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
           <p class="precomcardsub white-text">Press Release</p>
        </div>
               </a>

<?php endforeach;
wp_reset_postdata();?>



               <a href="http://www.itu.int/en/mediacentre/Pages/default.aspx">

                 <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
          <p class="precomcardtitle">See more Press Releases on ITU.int</p>

        </div>
        </a>
    </div>



           <div class="col l3">

               <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 101 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="card-panel hoverable blue z-depth-1 element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
              <p class="precomcardsub white-text">Communique</p>
        </div>

<?php endforeach;
wp_reset_postdata();?>


    <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => 101 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                 <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
                           <p class="precomcardsub white-text">Communique</p>

        </div>

<?php endforeach;
wp_reset_postdata();?>

    <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 2, 'category' => 101 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

                <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
                          <p class="precomcardsub white-text">Communique</p>

        </div>

<?php endforeach;
wp_reset_postdata();?>


        <?php
$args = array( 'posts_per_page' => 1, 'offset'=> 3, 'category' => 101 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

                <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
          <p class="precomcardtitle"><?php the_title(); ?></p>
                          <p class="precomcardsub white-text">Communique</p>

        </div>

<?php endforeach;
wp_reset_postdata();?>

                              <a href="http://www.itu.int/en/mediacentre/Pages/default.aspx">
                <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
          <p class="precomcardtitle">See more Communiques on ITU.int</p>

        </div>
               </a>

    </div>


    </div>



    </div>
<?php get_footer(); ?>
