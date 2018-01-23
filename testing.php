<?php get_header(); ?>




<?php $query = new WP_Query( 'showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    


<a href="<?php the_permalink() ?>">
 <div id="megatop" class="parallax-container">
    <div class="parallax">

    <img src="<?php the_post_thumbnail_url( 'full' ); ?>">

    </div>

<div class="container">    
   <div class="homeartrowo"> 


<div class="row">
<div class="col m9 l9">
     
            <p id="megatitle" class="flow-text4" style="letter-spacing: -0.1vw;color: white;font-family: avenirbold;margin-top: 1.5%;    margin-bottom: -0.05em;"> <?php the_title(); ?></p>

<h5 style="color:white;"><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?></h5>


    </div>
    </div>

    </div>
    </div>
    
  </div>

      
</a>

    <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



<div class="container">
     <div class="row gridrow">
         
                 <?php $query = new WP_Query( 'offset=1& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l4">        
        <div class="card">
          
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img class="" src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                 <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                      
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
         
         <?php $query = new WP_Query( 'offset=2& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l4">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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
    
             <?php $query = new WP_Query( 'offset=3& showposts=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l4">        
        <div class="card">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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


        <div class="sdgcontainer">
      
               <div class="row">

            <div class="container">

             <a href="http://news.itu.int/category/ict4sdg/">

                <img class="responsive-img sdgrowlogo wow appear-from-bottom element-animated" src="<?php echo get_template_directory_uri() . '/media/ictsdglogo-01.svg'; ?>">


                </a>
                
            
            </div>

        </div>

        <div class="container">
         <div class="row sdgrow">
             
              
         
                 <?php $query = new WP_Query( 'offset=4& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

         
    <div class="col l6">   
        <a href="<?php the_permalink() ?>"> 
         <div class="card sdgcard wow appear-from-bottom element-animated">
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
               <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
         <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
                    </a>
                       
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
          
                   <?php $query = new WP_Query( 'offset=6& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
       
   
           <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  

       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                
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
                        <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;margin-top: 2.5em; color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text wow appear-from-bottom element-animated"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                  
             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
                           <?php $query = new WP_Query( 'offset=8& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
    <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                       <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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

                           <?php $query = new WP_Query( 'offset=9& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
       <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
                     <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                   <span class="articletitle white-text"><h5 style="letter-spacing:-0.035vw;" class="ITU_whtitle"><?php the_title(); ?></h5></span>
                    
             </a>
    </div>
              <?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>
    
                               <?php $query = new WP_Query( 'offset=11& showposts=1& cat=2' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          
            <div class="ITU_SDGarticles wow appear-from-bottom element-animated">
               <p class="gridcategoryb ITU_homecat" style="margin-bottom: -0.65em;font-family:avenirlight;color:white;font-size: 1em;margin-top: 2.5em;">
        <?php the_category( ' | ' ); ?></p> 
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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

    

          <div class="row">
<div class="container">
<p class="sectionlabel"><span>Emerging Trends</span></p>
          
                
</div>
        </div>

    <div class="container">
     <div class="row ITU_secet">
         
                 <?php $query = new WP_Query( 'offset=5& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l4">        
           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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
         
         <?php $query = new WP_Query( 'offset=6& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    
      <div class="col l4">        
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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
    
             <?php $query = new WP_Query( 'offset=7& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    
      <div class="col l4">   
        
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
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
    
             <div class="container">
                <img class="fvideologo wow appear-from-bottom element-animated" src="<?php echo get_template_directory_uri() . '/media/featuredvideo-01.svg'; ?>">
                
</div>
            
                <div class="container videorow">
    <div class="row">
       
       <div class="col l3">

         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="https://www.youtube.com/watch?v=Gs7Z1YudlWM">
              <img src="<?php echo get_template_directory_uri() . '/media/newsshot1.JPG'; ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
            
                    <a href="https://www.youtube.com/watch?v=Gs7Z1YudlWM" title="">

                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animated">
                    <h5 style="letter-spacing:-0.035vw;">Aadhaar: India’s route to financial inclusion</h5></span>
                            </a>
                          
            </div>
             </div>

       </div>

 <div class="col l3">

           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="https://www.youtube.com/watch?v=yn8YdJm5vgs">
              <img src="<?php echo get_template_directory_uri() . '/media/newsshot2.JPG'; ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
            
                    <a href="https://www.youtube.com/watch?v=yn8YdJm5vgs" title="">

                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animated">
                    <h5 style="letter-spacing:-0.035vw;">#ICT4SDG: Good local content is key to connectivity!</h5></span>
                            </a>
                          
            </div>
             </div>

       </div>

        <div class="col l3">

           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="https://www.youtube.com/watch?v=yWrBI2LEChk">
              <img src="<?php echo get_template_directory_uri() . '/media/newsshot3.JPG'; ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
            
                    <a href="https://www.youtube.com/watch?v=yWrBI2LEChk" title="">

                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animated">
                    <h5 style="letter-spacing:-0.035vw;">#ICT4SDG: Singapore’s Lab on Wheels teaches children the skills of tomorrow</h5></span>
                            </a>
                          
            </div>
             </div>

       </div>

        <div class="col l3">

         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="https://www.youtube.com/watch?v=Guj58JUcSJU">
              <img src="<?php echo get_template_directory_uri() . '/media/newsshot4.JPG'; ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
            
                    <a href="https://www.youtube.com/watch?v=Guj58JUcSJU" title="">

                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animated">
                    <h5 style="letter-spacing:-0.035vw;">#ICT4SDG: How technology is saving young lives in India</h5></span>
                            </a>
                          
            </div>
             </div>

       </div>
    
    </div>
                
        </div>
    
             <a href="http://news.itu.int/subscribe/">
            <div class="newslettersignup">
                
            <div class="container innernewsletter">
                
                <div class="row">
                    
                    <div class="col s12 m12">
                        
                <span class="newlettertitle">
                    
                    Stay up to speed subscribe to our newsletter!

                      </span>
                    
                </div>
                    
                    </div>

                </div>
            
            </div>
             </a>

             <div class="container">
                <img class="morenewslogo wow appear-from-bottom element-animated" src="<?php echo get_template_directory_uri() . '/media/morenewslogo-01.svg'; ?>">
                
</div>
    
    <div class="container lastarticlerow">
     <div class="row">
         
                 <?php $query = new WP_Query( 'offset=9& showposts=1& cat=7' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
         
    <div class="col l4">        
           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
        
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
           <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
        
         <div class="card wow appear-from-bottom element-animated">
            <div class="card-image">
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                </a>
                      </div>
            <div class="card-content gridtitle wow appear-from-bottom element-animated">
                <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1em;">
        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <span class="grey-text text-darken-4 wow appear-from-bottom element-animateder"><h5 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h5></span>
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
