
<?php
/*
Template Name: Homepage
*/
?>

<!--ITU NEWS DOCUMENTATION (IND): load header.php-->


<span>
<?php get_header(); ?>
<!--
<style>

@font-face {
  font-family: 'dfont_a';
  src: url("<?php echo get_template_directory_uri() . '/fonts/NeueEinstellung-ExtraBold.ttf'; ?>"); }

    @font-face {
  font-family: 'dfont_b';
  src: url("<?php echo get_template_directory_uri() . '/fonts/NeueEinstellung-Normal.ttf'; ?>"); }

        @font-face {
  font-family: 'dfont_c';
  src: url("<?php echo get_template_directory_uri() . '/fonts/NeueEinstellung-Thin.ttf'; ?>"); }

</style>
-->

<?php $query = new WP_Query( 'showposts=1' ); ?> <!--ITU NEWS DOCUMENTATION (IND): start a Wordpress database inquiry (loop) with only one latest item -->
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> <!--ITU NEWS DOCUMENTATION (IND): if there are posts in the database, get that 1 post-->



<a href="<?php the_permalink() ?>"> <!--ITU NEWS DOCUMENTATION (IND): get the relative URI of the current post being called and add to a href-->

 <div class="parallax-container"> <!--ITU NEWS DOCUMENTATION (IND): start the first container with special parallax effects, see secondary.css for the CSS -->

    <div id="megatop" class="parallax">

    <img src="<?php the_post_thumbnail_url( 'full' ); ?>"> <!--ITU NEWS DOCUMENTATION (IND): get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->


    </div>

<div class="container">
   <div class="homeartrowo"> <!--IND: start the div for the text inside the top banner, title of first post -->



<div class="row">  <!--IND: indicate the start of a row -->

<div class="col m9 l9">  <!--IND: indicate this div will occupy 8/12 columns on desktop and 9/12 columns on tablet -->


            <p id="megatitle" class="flow-text4" style="letter-spacing: -0.1vw;color: white;font-family: avenirbold;margin-top: 1.5%;    margin-bottom: -0.05em;"> <?php the_title(); ?></p>  <!--IND: instruct Wordpress database to relay the title of the current post -->


<h5 class="" style="color:white;"><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?></h5>
 <!--IND: instruct with PHP to retrieve the content typed in the SEO description of the current article and display it, use inline styles to force formatting on default H tags  -->


    </div>
    </div>

    </div>
    </div>

  </div>


</a>

 <!--IND: close the wordpress loop that was initiated at the beginning to terminate the database inquiry of the 1 latest article -->
    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



<div class="container">
     <div class="row gridrow">
          <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the latest (or post number 2 done with 'offset=1&'-->

                 <?php $query = new WP_Query( 'offset=1& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">  <!--IND: get the relative URI of post number 2 and the title from database and attach to a href markup -->


    <div class="col l4 m6">         <!--IND: indicate this is a column occupying 4/12th of the screen width -->

        <div id="cardhov" class="card">        <!--IND: attach the card class which is the standard class used for most news articles on homepage -->

            <div class="card-image">  <!--IND: indicate this is the image section of the card container -->

         <a href="<?php the_permalink() ?>"> <!--IND: get the relative URI of post number 2 and the title from database and attach to a href markup -->
              <img class="" src="<?php the_post_thumbnail_url( 'full' ); ?>"> <!--ITU NEWS DOCUMENTATION (IND): get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->

                </a>
                      </div>
            <div class="card-content gridtitle">   <!--IND: indicate this is the title area of the card-->

                 <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>    <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class -->

                  <a href="<?php the_permalink() ?>"> <!--IND: get the relative URI of post number 2 and the title from database and attach to a href markup -->

                     <span id="cardhovitem" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                                  <!--IND: return the title of the post in question, attach pre-defined color styles and force inline style on H element -->

                            </a>





            </div>
             </div>
        </div>

 <!--IND: close the wordpress loop that was initiated at the beginning to terminate the database inquiry of the 2nd article -->
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

          <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the 2nd post (or post number 3 done with 'offset=2&')-->
         <?php $query = new WP_Query( 'offset=2& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

      <div class="col l4 m6">
          <div id="cardhovb" class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                    <span id="cardhovitemb" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>
        </div>

    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

             <?php $query = new WP_Query( 'offset=3& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

      <div class="col l4">
        <div id="cardhovc" class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                     <span id="cardhovitemc" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>
        </div>

        <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

    </div>
    </div>


        <div class="sdgcontainer"> <!--IND: start the sdg container, refer to the latest stylesheet to modify properties -->




        <div class="container">

         <a href="http://news.itu.int/category/ict4sdg/"> <!--IND: link the title to the sdg section page -->

         <div class="whitesectionlabel wow appear-from-bottom element-animated"><span>ICT for Sustainable Development</span></div>
         <!--IND: add the whitesectionlabel class to product text with line next to it, wait for user to reach this position during scrolling the page, make title invisible first and add animation classes to make it appear from bottom, 'element-animated' initiates this effect -->

         </a>
         <div class="row sdgrow">
             <!--IND:  internal sdg row-->



          <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the 4th post (or post number 5 done with 'offset=4&'), restrict to category-2 by finding the number of category in Wordpress category list in backend (hover over category and see link URI for cat number-->
                 <?php $query = new WP_Query( 'offset=4& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


    <div class="col l6">  <!--IND: indicate this is a column taking up 50% of the screen or 6/12 columns-->
        <a href="<?php the_permalink() ?>">  <!--IND: get the relative URI of the current post in question -->
         <div class="card sdgcard wow appear-from-bottom element-animated">  <!--IND: indicate this is a card class, make the element invisible until the user scrolls to this position in the pge wit 'wow' class-->
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>"> <!--IND: get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
               <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
        <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class, this section has white text -->
         <a href="<?php the_permalink() ?>"> <!--IND: get the relative URI of post number 5 and the title from database and attach to a href markup -->
                    <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                    <!--IND: return the title of the post in question, attach pre-defined color styles and force inline white text style on H element -->
                    </a>

            </div>
             </div>
        </a>
        </div>

 <!--IND: close the wordpress loop that was initiated at the beginning to terminate the database inquiry of the 2nd article -->
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



      <div class="col l3">

                   <?php $query = new WP_Query( 'offset=5& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">



           <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>

       <a href="<?php the_permalink() ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
        </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>


                       <?php $query = new WP_Query( 'offset=6& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                        <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;margin-top: 2.5em; color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
       <a href="<?php the_permalink() ?>">
                   <span class="articletitle white-text wow appear-from-bottom element-animated"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

                           <?php $query = new WP_Query( 'offset=7& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                       <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p>
       <a href="<?php the_permalink() ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



        </div>





      <div class="col l3">

                           <?php $query = new WP_Query( 'offset=8& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

       <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                     <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
       <a href="<?php the_permalink() ?>">
                    <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>


                           <?php $query = new WP_Query( 'offset=9& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

            <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                       <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p>
       <a href="<?php the_permalink() ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

                               <?php $query = new WP_Query( 'offset=10& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

            <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
               <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p>
       <a href="<?php the_permalink() ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>

             </a>
    </div>

              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



        </div>



    </div>
    </div>


    </div>








          <div class="row">  <!--IND: start a new row -->
<div class="container">
<a href="http://news.itu.int/category/et/"><div class="sectionlabel wow appear-from-bottom element-animated"><span>Emerging Trends</span></div></a>

 <!--IND: display the emerging trends title -->

</div>
        </div>

    <div class="container">
     <div class="row ITU_secet">

          <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the 5th post (or post number 6 done with 'offset=5&'), restrict to category-7 (Emerging Trends) by finding the number of category in Wordpress category list in backend (hover over category and see link URI for cat number-->

                 <?php $query = new WP_Query( 'offset=5& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="col l4">   <!--IND: indicate this is a column taking up 4/12 columns of the parent container width-->
          <div id="cardhovd" class="card wow appear-from-bottom element-animated"> <!--IND: indicate this is a card class, make the element invisible until the user scrolls to this position in the pge wit 'wow' class-->
            <div class="card-image">
                   <a href="<?php the_permalink() ?>"> <!--IND: get the relative URI of post number 6 and the title from database and attach to a href markup -->
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">  <!--IND: get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
        <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class, this section has white text -->
                  <a href="<?php the_permalink() ?>"> <!--IND: get the relative URI of post number 5 and the title from database and attach to a href markup -->
                    <span id="cardhovitemd" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                           <!--IND: return the title of the post in question, attach pre-defined color styles and force inline dark text style on H element -->
                            </a>

            </div>
             </div>
        </div>

             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

         <?php $query = new WP_Query( 'offset=6& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

      <div class="col l4">
       <div id="cardhove" class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                   <span id="cardhoviteme" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>
        </div>

    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

             <?php $query = new WP_Query( 'offset=7& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


      <div class="col l4">

        <div id="cardhovf" class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                     <span id="cardhovitemf" class="ITU_arttext"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>

        </div>

        <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

    </div>
    </div>

        <div class="videosection"> <!--IND: start the videosection, refer to the latest stylesheet to modify -->



        <div class="container"> <!--IND: limit width of inner container to 70% of parent div -->

         <a href="http://news.itu.int/category/ict4sdg/"><div class="bluesectionlabel wow appear-from-bottom element-animated"><span>Featured Videos</span></div></a>
         <!--IND: display the Featured Videos title, add style class 'bluesectionlabel' and animation with remaining classes-->
         <div class="row videorow"> <!--IND: start the video row -->

              <div class="col l7"> <!--IND: indicate col is 7/12 width of page-->
                    <div class="card wow appear-from-bottom element-animated"> <!--IND: load the card element and apply animations -->
               <div class="card-image">
                   <a href="<?php the_field('first_video_link'); ?>"> <!--IND: the_field object is found in the backend plugin ACF Custom -->
              <img src="<?php the_field('first_video_image'); ?>"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->
                </a>
                      </div>

             </div>

              </div>

  <div class="col l4 wow appear-from-bottom element-animated"> <!--IND: indicate a column occupying 4/12th of the screen -->
  <a href="<?php the_field('first_video_link'); ?>" title=""> <!--IND: retrieve what the end user has typed in the video section form and dynamically insert into markup here -->
                  <span class="white-text"> <!--IND: add white-text class into the span found in secondary.CSS-->
                    <h5 style="letter-spacing:-0.035vw;font-size: 3em;"><?php the_field('first_video_title'); ?></h5></span> <!--IND: retrieve user data in the backend form, add to markup, apply forced inline style to H-->
                </a>
              </div>



    </div>




    </div>


    </div>
    <div class="container videosecsection"> <!--IND: the_field object is found in the backend plugin ACF Custom -->
<div class="row"> <!--IND: start row -->
  <div class="col l3"> <!--IND: indicate a column 3/12th of the width of parent div -->
           <div class="card wow appear-from-bottom element-animated"> <!--IND: add animation effect to card-->
            <div class="card-image">
                   <a href="<?php the_field('second_video_link'); ?>"> <!--IND: the_field object is found in the backend plugin ACF Custom Forms -->
              <img src="<?php the_field('second_video_image'); ?>"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->

                    <a href="<?php the_field('second_video_link'); ?>" title=""> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->

                    <span class="grey-text text-darken-4"> <!--IND: add animation effect & CSS to title-->
                    <h5 style="letter-spacing:-0.035vw;"><?php the_field('Second_video_title'); ?></h5></span> <!--IND: grab second video title from backend, apply H markup and force style -->
                            </a>

            </div>
             </div>
  </div>
  <div class="col l3"> <!--IND: indicate a column 3/12th of the width of parent div -->
              <div class="card wow appear-from-bottom element-animated"> <!--IND: add animation effect to card-->
            <div class="card-image">
                   <a href="<?php the_field('third_video_link'); ?>"> <!--IND: the_field object is found in the backend plugin ACF Custom Forms -->
              <img src="<?php the_field('third_video_image'); ?>"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">

                    <a href="<?php the_field('third_video_link'); ?>" title="">  <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->


                    <span class="grey-text text-darken-4"> <!--IND: add animation effect & CSS to title-->
                    <h5 style="letter-spacing:-0.035vw;"><?php the_field('Third_video_title'); ?></h5></span> <!--IND: grab second video title, apply H markup and force style -->
                            </a>

            </div>
             </div>
  </div>
  <div class="col l3">
             <div class="card wow appear-from-bottom element-animated"> <!--IND: add animation effect to card-->
            <div class="card-image">
               <a href="<?php the_field('fourth_video_link'); ?>"> <!--IND: the_field object is found in the backend plugin ACF Custom Forms -->
              <img src="<?php the_field('last_video_image'); ?>"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->
                </a>

                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated"> <!--IND: the_field allows user to dynamically update the markup here with a form in the backend -->


                    <a href="<?php the_field('fourth_video_link'); ?>" title="">  <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->


                    <span class="grey-text text-darken-4"> <!--IND: add animation effect & CSS to title-->
                    <h5 style="letter-spacing:-0.035vw;"><?php the_field('Fourth_video_title'); ?></h5></span>
                            </a>

            </div>
             </div>
  </div>
  <div class="col l3">

  </div>


</div>

</div>




             <a href="http://news.itu.int/subscribe/">  <!--IND: open the href for linking this section to the subscribe page -->

            <div class="ITU_newslettersignup">  <!--IND: this is the containing div -->


            <div class="container innernewsletter">  <!--IND: these are the inner contents of the advert -->


                <div class="row">  <!--IND: start a row -->

             <div class="col l2 hide-on-med-and-down">  <!--IND: create column 2/12th on desktop but hide on tablets and mobile  -->

                        <img id="advertimage" class="newsadadv wow appear-from-left element-animated" srcset="<?php echo get_template_directory_uri() . '/media/newsletphone.png'; ?>" src="<?php echo get_template_directory_uri() . '/media/newsletphone.png'; ?>">

                         <!--IND: use class 'newsadadv' to make modifications to the illustration of the phone, add animations to image fetched from address  -->


                </div>
                       <div  id="adverthometext" class="col l9 s12 m12">  <!--IND: make the advert text go 9/12th of desktop width, full width on mobile and tablet -->


                <span class="newlettertitle wow appear-from-right element-animated">

<!--IND: insert the advertisement text here -->
                    Stay up to speed. Subscribe to our ITU News Weekly!

                      </span>

                </div>







                    </div>

                </div>

            </div>
             </a>


    <div class="container lastarticlerow">

     <div class="sectionlabel"><span>More News</span></div>

     <div class="row ITU_lastrow">


                 <?php $query = new WP_Query( 'offset=9& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">


    <div class="col l4">

           <div class="card">

            <div class="card-image">
                   <a href="<?php the_permalink() ?>">

              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">

                </a>
                      </div>
            <div class="card-content gridtitle">

                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>

                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>


            </div>
             </div>
        </div>

             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

         <?php $query = new WP_Query( 'offset=10& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

      <div class="col l4">
         <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>
        </div>

    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

             <?php $query = new WP_Query( 'offset=11& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


      <div class="col l4">

         <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>

        </div>

        <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

    </div>
</div>



<div class="container ITU_lastarticler">

                         <div class="row">

                 <?php $query = new WP_Query( 'offset=12& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

    <div class="col l4">
           <div class="card">

            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>

                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>


            </div>
             </div>
        </div>

             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

         <?php $query = new WP_Query( 'offset=13& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

      <div class="col l4">
         <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>
        </div>

    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

             <?php $query = new WP_Query( 'offset=14& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


      <div class="col l4">

         <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>
                  <a href="<?php the_permalink() ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;font-family:avenirbold;"><?php the_title(); ?></h5></span>
                            </a>

            </div>
             </div>

        </div>

        <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

    </div>

        </div>




  <!--IND: get the footer and attach here -->


<?php get_footer(); ?>
</span>
