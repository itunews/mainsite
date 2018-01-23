<?php get_header(); ?>
   


<div class="sectionmenu">
    <div class="container">
<div class="row">
    <div class="col l8">
        
       <a href="http://news.itu.int/category/ict4sdg/"> <h4 style="font-family:avenirbold;color:#0063A7;">ICT4SDG</h4> </a>
         <h4 style="font-family:avenirbold;font-size:1.2em;color:#00A4E6;padding-right: 5%;">SDG 16: Peace, Justice and Strong Institutions</h2>
     

    
    </div>
    
    
    </div>

</div>

</div>

<div class="sectionfirst"> <!--IND: start the first full width featured article section with gray background -->
    
                         <?php $query = new WP_Query( 'showposts=1& cat=78' ); ?><!--IND: start the Wordpress loop, inquire database and retrieve 1 latest post from cat-7 Emerging Trends-->
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> <!--IND: if such a post exists, please get it-->
    
    
<div class="container"><!--IND: put all the things for the above query in this container -->
    <div class="row wow appear-from-bottom element-animated"> <!--IND: make it animated -->
    <div class="col l6"> <!--IND: create another column inside occupying 50% or 6/12 columns on desktop screens -->

        <a href="<?php the_permalink() ?>"> <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>"></a> <!--IND: get the URI of the post and hyper link the image after getting a large version of the file from the database, make it responsive with class 'responsive-img' -->
        
        </div>

         <div class="col l6"> <!--IND: create another column inside occupying 50% or 6/12 columns on desktop screens -->
         <p style="font-family:avenirlight;margin-bottom: -1em; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class -->

             <a href="<?php the_permalink() ?>"> <h2 style="letter-spacing: -0.05vw;color:black;font-family:avenirbold;"> <?php the_title(); ?>  </h2> </a> <!--IND: start row -->
        
        </div>
    </div>
    
    </div>

    <!--IND: start row -->

                 <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

</div>

<div class="container ITU_sectionsecond"> <!--IND: use this for the next section after the featured article -->
     <div class="row wow appear-from-bottom element-animated"> <!--IND: add animation effects to this row -->
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1& cat=78' ); ?> <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the 1st post (or post number 2 done with 'offset=1&'), restrict to category-7 by finding the number of category in Wordpress category list in backend (hover over category and see link URI for cat number-->

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> <!--IND: if such a post exists, please get it-->
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">  <!--IND: ask database to get the URI of this post and apply it as a href to the title of the post -->
         
    <div class="col l6">   <!--IND: create another column inside occupying 50% or 6/12 columns on desktop screens -->     
        <div class="card"> <!--IND: create the standard card element -->
            <div class="card-image"> <!--IND: create the image section of the card -->
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <!--IND: ask database to get the URI of this post and apply it as a href to the title of the post -->
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>"> <!--IND: get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->
                </a>
                      </div>
            <div class="card-content gridtitle"> 
                <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;"> <!--IND: start row -->
        <?php the_category( ' | ' ); ?></p>  <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class, this section has white text -->  

                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span><!--IND: return the title of the post in question, attach pre-defined color styles and force inline white text style on H element -->
                            </a>
            </div>
             </div>
        </div>

        <!--IND: terminate the query of this post -->
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         
<!--IND: begin new query -->

         <?php $query = new WP_Query( 'offset=2& showposts=1& cat=78' ); ?> 
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                       <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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
    
    
    
    <div class="container"> <!--IND: TO UPDATE OLD POSTS: copy this entire container with 2 cards, change the offset to refect current number of posts and paste at the end of this page THIS IS DONE TO GAIN THE HIGHEST LEVEL OF ANIMATION CONTROL AND MAKE EVERYTHING FLUID AND COHESIVE-->
     <div class="row wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=3& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                     <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
                            </a>
            </div>
             </div>
        </div>
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         
         <?php $query = new WP_Query( 'offset=4& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                        <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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
    
    <div class="container">
     <div class="row wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=5& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                   <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
                            </a>
            </div>
             </div>
        </div>
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         
         <?php $query = new WP_Query( 'offset=6& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                     <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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

        <div class="container">
     <div class="row wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=7& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                   <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
                            </a>
            </div>
             </div>
        </div>
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         
         <?php $query = new WP_Query( 'offset=8& showposts=1& cat=78' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                     <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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
         


    

<?php get_footer(); ?>

