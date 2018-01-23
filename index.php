
<?php get_header(); ?>  


<div class="sectionfirst">
    
                         <?php $query = new WP_Query( 'showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
    
<div class="container">
    <div class="row wow appear-from-bottom element-animated">
    <div class="col l6">

        <a href="<?php the_permalink() ?>"> <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>"></a>
        
        </div>

         <div class="col l6">
         <p style="font-family:avenirlight;margin-bottom: -1em; color:#039be5;font-size: 1em;">
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

<div class="container ITU_sectionsecond">
     <div class="row wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img srcset="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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
    
      <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img srcset="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                       <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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

