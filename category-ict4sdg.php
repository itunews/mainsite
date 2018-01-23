<?php get_header(); ?>
   


<div class="sectionmenu">
    <div class="container">
<div class="row">
    <div class="col l10">
         <h4 style="font-family:avenirbold;color:#0063A2;">ICT for Sustainable Development #ICT4SDG</h4>
          <h5 style="font-family:avenirbold;color:#0063A2;">How tech can speed progress on the UN's Sustainable Development Goals (SDGs)</h5>

   <span class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1.5em;">

            <a href="http://news.itu.int/category/ict4sdg/sdg1/">SDG 1: No Poverty</a>
             |   <a href="http://news.itu.int/category/ict4sdg/sdg2/">SDG 2: Zero Hunger</a>
              |   <a href="http://news.itu.int/category/ict4sdg/sdg3/">SDG 3: Good Health and Well-being</a>
               |   <a href="http://news.itu.int/category/ict4sdg/sdg4/">SDG 4: Quality Education</a>
                |   <a href="http://news.itu.int/category/ict4sdg/sdg5/">SDG 5: Gender Equality</a>
                 |   <a href="http://news.itu.int/category/ict4sdg/sdg6/">SDG 6: Clean Water and Sanitation</a>
                  |  <a href="http://news.itu.int/category/ict4sdg/sdg7/">SDG 7: Affordable and Clean Energy</a>
                   |   <a href="http://news.itu.int/category/ict4sdg/sdg8/">SDG 8: Decent Work and Economic Growth</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg9/">SDG 9: Industry, Innovation and Infrastructure</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg10/">SDG 10: Reduced Inequalities</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg11/">SDG 11: Sustainable Cities and Communities</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg12/">SDG 12: Responsible Consumption and Production</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg13/">SDG 13: Climate Action</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg14/">SDG 14: Life Below Water</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg15/">SDG 15: Life on Land</a>
                    |   <a href="http://news.itu.int/category/ict4sdg/sdg16/">SDG 16: Peace, Justice and Strong Institutions</a>
                     |   <a href="http://news.itu.int/category/ict4sdg/sdg17/">SDG 17: Partnerships for the Goals</a>




                    </span>



          
    </div>
    
    
    </div>

</div>

</div>


<div class="sectionfirst"> <!--IND: start the first full width featured article section with gray background -->
    
                         <?php $query = new WP_Query( 'showposts=1& cat=2' ); ?><!--IND: start the Wordpress loop, inquire database and retrieve 1 latest post from cat-7 Emerging Trends-->
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
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1& cat=2' ); ?> <!--IND: start the Wordpress loop, inquire and retrieve 1 post after the 1st post (or post number 2 done with 'offset=1&'), restrict to category-7 by finding the number of category in Wordpress category list in backend (hover over category and see link URI for cat number-->

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

         <?php $query = new WP_Query( 'offset=2& showposts=1& cat=2' ); ?> 
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
         
                 <?php $query = new WP_Query( 'offset=3& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=4& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=5& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=6& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=7& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=8& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=9& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=10& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=11& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=12& showposts=1& cat=2' ); ?>
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
    




    <div class="sectionsecond"> <!--IND: use this format for full width single post feature -->
    
                         <?php $query = new WP_Query( 'offset=13& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
    
<div class="container">
    <div class="row wow appear-from-bottom element-animated wow appear-from-bottom element-animated">
    <div class="col l6">


        <a href="<?php the_permalink() ?>"> <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>"></a>
        
        </div>
         <div class="col l6">
               <p class="ITU_homecat" style="font-family:avenirlight;margin-bottom: -1em; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p> 
               <a href="<?php the_permalink() ?>"> <h2 style="letter-spacing: -0.05vw;color:black;font-family:avenirbold;"> <?php the_title(); ?>  </h2> </a>
        
        </div>
    </div>
    
    </div>
                 <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>

</div>

             <div class="container">
     <div class="row wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=14& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=15& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=16& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=17& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=18& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=19& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=20& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=21& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=22& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=23& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=24& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=25& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=26& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=27& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=28& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=29& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=30& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=31& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=32& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=33& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=34& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=35& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=36& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=37& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=38& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=39& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=40& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=41& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=42& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=43& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=44& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=45& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=46& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=47& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=48& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=49& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=50& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=51& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=52& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=53& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=54& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=55& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=56& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=57& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=58& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=59& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=60& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=61& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=62& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=63& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=64& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=65& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=66& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=67& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=68& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=69& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=70& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=71& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=72& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=73& showposts=1& cat=2' ); ?>
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
         
                 <?php $query = new WP_Query( 'offset=74& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=75& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=76& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=77& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=78& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=79& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=80& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=81& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=82& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=83& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=84& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=85& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=86& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=87& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=88& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=89& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=90& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=91& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=92& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=93& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=94& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=95& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">


         
                 <?php $query = new WP_Query( 'offset=96& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=97& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

  
         
                 <?php $query = new WP_Query( 'offset=98& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=99& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=100& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=101& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=102& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=103& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=104& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=105& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=106& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=107& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=108& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=109& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=110& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=111& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=112& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=113& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=114& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=115& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=116& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=117& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=118& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=119& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=120& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=121& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=122& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=123& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=124& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=125& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=126& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=127& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=128& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=129& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=130& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=131& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=132& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=133& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=134& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=135& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=136& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=137& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=138& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=139& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=140& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=141& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=142& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=143& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=144& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=145& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=146& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=147& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=148& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=149& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=150& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=151& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=152& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=153& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=154& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=155& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=156& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=157& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=158& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=159& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=160& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=161& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=162& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=163& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=164& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=165& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=166& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=167& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=168& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=169& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

   
         
                 <?php $query = new WP_Query( 'offset=170& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=171& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=172& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=173& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=174& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=175& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=176& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=177& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=178& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=179& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=180& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=181& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=182& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=183& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=184& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=185& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=186& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=187& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=188& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=189& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=200& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=201& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=202& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=203& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=204& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=205& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=206& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=207& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=208& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=209& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=210& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=211& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=212& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=213& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=214& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=215& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=216& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=217& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=218& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=219& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=220& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=221& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=222& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=223& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=224& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=225& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=226& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=227& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=228& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=229& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=230& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=231& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=232& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=233& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=234& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=235& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=236& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=237& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=238& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=239& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=240& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=241& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=242& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=243& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=244& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=245& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=246& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=247& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=250& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=251& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=252& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=253& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=254& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=255& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=256& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=257& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=258& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=259& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=260& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=261& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=262& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=263& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=264& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=265& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=266& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=267& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=268& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=269& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=270& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=271& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=272& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=273& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=274& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=275& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=276& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=277& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=278& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=279& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=280& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=281& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=282& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=283& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=284& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=285& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=286& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=287& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=288& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=289& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=290& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=291& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=292& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=293& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=294& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=295& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=296& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=297& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=298& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=299& showposts=1& cat=2' ); ?>
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
     <div class="row wow appear-from-bottom element-animated secgridrow wow appear-from-bottom element-animated">

      <!--IND: the very last row must have the 'secgridrow' class and the container that had it before must have the class removed from it when adding new articles -->
         
                 <?php $query = new WP_Query( 'offset=300& showposts=1& cat=2' ); ?>
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
         
         <?php $query = new WP_Query( 'offset=301& showposts=1& cat=2' ); ?>
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

