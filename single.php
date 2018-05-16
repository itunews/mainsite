
<!--IND: get the header -->
<?php get_header(); ?>

<!--IND: start the wordpress loop to see if we have posts and if we do, identify the posts -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--IND: check if this post has a thumbnail -->
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> <!--IND: get the attached image URI and append to HTML markup -->


 <div class="parallax-container"> <!--IND: start the parallax container at the top -->
    <div class="parallax ITU_article_parallax">

    <img src="<?php echo $image[0]; ?>"> <!--IND: return the image with array 0 (above fetched image src) -->

    </div>

<div class="container">     <!--IND: create a container 70% the max width of parent -->
   <div class="homeartrow">  <!--IND: refer to CSS for modifying this div -->

<div class="row"> <!--IND: start row -->
<div class="col m9 l7"> <!--IND: create a column 9/12 columns on tablets and 10/12 columns on desktop -->
     <h5 style="font-family:avenirlight;color:white;"><?php the_category( ' | ' ); ?></h5>  <!--IND: query the database for the categories, separated by a bar and apply inline style to them -->
        <h6 style="font-family:avenirlight;color: white;"> <?php the_time('F j, Y') ?></h6>   <!--IND: query the database for the date, and apply inline style to them -->
       <p class="flow-text4" style="color: white;font-family: avenirbold;margin-top: 1.5%;"> <?php the_title(); ?>  </p>  <!--IND: get the title of post from database, force some inline styles and make the text continiously responsive- refer to flow-text classes in ITU News CSS -->
</div>
    </div>


    </div>
    </div>

  </div>




<div class="container maincontent"> <!--IND: start the contaianer for the main content -->
<div class="row">



    <div id="mainarticle" class="col l8 s12 flow-text"> <!--IND: create a column 8/12 columns the width the parent container AND APPLY CONTINIOUSLY responsive text class to anything inside this column -->

     <?the_content(); ?> <!--IND: request Wordpress to fetch the article main body text and display it inside this column -->


    </div>

    <div class="col l4 push-l1"> <!--IND: create a column 4/12th the width of the parent container -->

            <div class="newssignblok"> <!--IND: create the newsletter advert block -->

              <div class="newslettersignup wow appear-from-bottom element-animated hoverable">
        <h5>Sign up to our weekly Newsletter</h5> <!--IND: force some style to the H tag -->
        <a href="http://news.itu.int/subscribe/" class="newsletbuttontwo waves-effect waves-light btn">Subscribe</a> <!--IND: refer to the newsletbuttontwo class to modify this button --></div>

    <h5 style="padding-top:19%;font-family:avenirbold;color:#039be5;padding-bottom:2%;padding-top: 3em;">Popular Now</h5> <!--IND: insert the popular now title and forse some inline style -->

                    <?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 5,
'caller_get_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {

while( $my_query->have_posts() ) {
$my_query->the_post();?>

        <div class="row">
          <a href="<?php the_permalink() ?>"> <!--IND: link the entire block to the URI of the post -->
        <div class="col l4">

    <img class="popularthumbs hoverable responsive-img wow appear-from-left element-animated" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"> <!--IND: fetch the thumbnail from database and attach it to this img markuo -->
            </div>
            <div class="col s6 l8"> <!--IND: create column 50% width of mobile phones and 8/12th width of parent container on desktops -->
            <p class="poptiletext wow appear-from-right element-animated"><?php the_title(); ?></p> </a> <!--IND: get the title and apply animation to it -->




        </div>


        </div>
        <!--IND: ask database to repeat this output process till all 5 post vacancies are filled-->

<?
}
echo '</ul></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>

      <div class="row">
 <a href="https://www.itu.int/en/ITU-T/AI/2018/Pages/default.aspx"><img class="toweradv responsive-img hoverable wow appear-from-bottom element-animated" srcset="<?php echo get_template_directory_uri() . '/media/aiadvert.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/aiadvert.jpg'; ?>"></a>
        </div>


    </div>



    </div>





</div>

<!--IND: close the Wordpress query loop-->

<?php endif; ?>
    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>
