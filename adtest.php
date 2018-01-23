<?php
/*
Template Name: adtesting
*/
?><?php get_header(); ?>




<?php $query = new WP_Query( 'showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<a href="<?php the_permalink() ?>">
 <div id="megatop" class="parallax-container">
    <div class="parallax">

    <img src="<?php echo $image[0]; ?>">

    </div>

<div class="container">    
   <div class="homeartrowo"> 


<div class="row">
<div class="col m9 l9">
        <h6 class="" style="font-family:avenirlight;color: white;"> <?php the_time('F j, Y') ?></h6>    
       <p id="megatitle" class="flow-text4" style="letter-spacing: -0.1vw;color: white;font-family: avenirbold;margin-top: 1.5%;"> <?php the_title(); ?></p>
    </div>
    </div>

    </div>
    </div>
    
  </div>

      
</a>
<?php endif; ?> 
    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



<div class="container">
     <div class="row gridrow">
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l4">        
        <div class="card">
          
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="" src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                 <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                      
                     <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                                     
                            </a>

   <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   



            </div>
             </div>
        </div>
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         
         <?php $query = new WP_Query( 'offset=3& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l4">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>
                               <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
            </div>
             </div>
        </div>
    
    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
             <?php $query = new WP_Query( 'offset=4& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l4">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>
                                  <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
     <div class="row">
         
                 <?php $query = new WP_Query( 'offset=5& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l4">        
           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>
                                  <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>
                                  <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
        
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                            </a>
                                  <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
    
    <div class="sdgcontainer">
        
               <div class="row">
          
             <a href="http://news.itu.int/category/ict4sdg/">

                <img class="sdgrowlogo wow appear-from-bottom element-animated" src="<?php echo get_template_directory_uri() . '/media/sdglogosection.png'; ?>"></a>
                
                
                
            
            </div>
        
        <div class="container">
         <div class="row sdgrow">
             
              
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

         
    <div class="col l6">   
        <a href="<?php the_permalink() ?>"> 
         <div class="card sdgcard wow appear-from-bottom element-animated">
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url( 'medium' ); ?>">
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
               <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
         <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                    </a>
                          <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
            </div>
             </div>
        </a>
        </div>
         
             <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
         

    
      <div class="col l3"> 
          
                   <?php $query = new WP_Query( 'offset=2& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
       
   
           <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  

       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                         <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
             </a>
        </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
    
                       <?php $query = new WP_Query( 'offset=3& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
    <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                        <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;margin-top: 2.5em; color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text wow appear-from-bottom element-animated"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                         <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
                           <?php $query = new WP_Query( 'offset=4& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
    <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                       <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                         <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
    
    
        </div>
    

    
  
    
      <div class="col l3">        

                           <?php $query = new WP_Query( 'offset=5& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
       <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                     <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                          <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
                       <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                         <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                         <a class="addthis_button_compact" style=""><img class="socialicon" src="<?php echo get_template_directory_uri() . '/media/more-01.svg'; ?>" width="32" height="32" border="0" alt="Share" /></a>   
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
    

    

<?php get_footer(); ?>
