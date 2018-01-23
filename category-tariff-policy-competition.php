<?php get_header(); ?>
   


<div class="sectionmenu">
    <div class="container">
<div class="row">
    <div class="col l8">
        
                  <a href="http://news.itu.int/category/ict4sdg/"> <h4 style="font-family:avenirbold;color:#0063A7;">Regulation</h4> </a>
         <h4 style="font-family:avenirbold;font-size:1.2em;color:#00A4E6;padding-right: 5%;">Tariff Policy &amp; Competition</h2>

    
    </div>
    
    
    </div>

</div>

</div>


<div class="sectionfirst">
    
                         <?php $query = new WP_Query( 'showposts=1& cat=29' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
    
<div class="container">
    <div class="row wow appear-from-bottom element-animated">
    <div class="col l6">

        <a href="<?php the_permalink() ?>"> <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>"></a>
        
        </div>

         <div class="col l6">
         <p class="ITU_homecat" style="font-family:avenirlight;margin-bottom: -1em; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
             <a href="<?php the_permalink() ?>"> <h2 style="color:black;font-family:avenirbold;"> <?php the_title(); ?>  </h2> </a>
        
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
     <div class="row secgridrow wow appear-from-bottom element-animated">
         
                 <?php $query = new WP_Query( 'offset=2& showposts=1& cat=29' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l6">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="responsive-img" srcset="<?php the_post_thumbnail_url( 'large' ); ?>" src="<?php the_post_thumbnail_url( 'large' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5><?php the_title(); ?></h5></span>
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

