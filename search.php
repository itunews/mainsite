<?php
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>  <!--IND: get the header -->

    <div class="searchtopcont container"> <!--IND: start the top most contaainer -->
        

  <div class="row"> <!--IND: start row -->
      
      
      <div class="col m12 s12 l12"> <!--IND: create a column full width (12/12 columns) of parent on all devices -->
      
       <span class="grey-text text-darken-4">

       <h3 style="font-family:avenirbold;color:#039be5;letter-spacing:-0.035vw;">'<?php the_search_query(); ?>'</h3>

       </span> <!--IND: use Wordpress search API with some custom inline styles -->
            
    
      
      </div>
      
         </div>
        
               <div class="row">
            
          

        <div class="col l9 s12"> <!--IND: create a column 9/12 columns wide on desktops and full width on mobile -->
            
            
            
            
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!--IND: start the wordpress loop to see if we have posts and if we do, identify the posts -->
            
         <div class="card searchcard wow appear-from-bottom element-animated"> <!--IND: add animations -->
             
            <div class="card-image"> <!--IND: start card image -->
                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <!--IND: get the relative URI of post number 5 and the title from database and attach to a href markup -->
              <img class="" src="<?php the_post_thumbnail_url( 'full' ); ?>"> 

              <!--IND: get the relative URI of the current post being called, attach to img src markup and instruct the Wordpress database to serve the full size and quality of original image -->
              
                </a>
                      </div>
            <div class="card-content gridtitle"> <!--IND: start the title of the article -->

                 <p class="ITU_homecat" style="font-family:avenirlight;margin-top: -0.5%; color:#039be5;font-size: 1.5em;"> 

                 <!--IND: return all the categories attached to this post, separate with a bar and force inline style on the class, this section has white text -->  

        <?php the_category( ' | ' ); ?></p>  
                  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><!--IND: get the relative URI of post number 5 and the title from database and attach to a href markup -->
                      
                     <span class="grey-text text-darken-4"><h3 style="letter-spacing:-0.035vw;"><?php the_title(); ?></h3></span>
                                 <span class="grey-text text-darken-4"><h5 style="color:#039be5;letter-spacing:-0.035vw;"><?php the_time('F j, Y') ?></h5></span>     <!--IND: display the date of the post -->
                            </a>





            </div>
             </div>
            

            
      
            
            
            
            
            
            
    <!--IND: start row -->
              
      <?php endwhile; else : ?>
    <p><?php _e( 'Couldnt find anything whith that search!' ); ?></p>
<?php endif; ?>  
            
            
        </div> 
   
      <div class="col l4 s12">

      </div>
    
</div>
      

        
</div>
    
    <!--IND: start footer -->
<?php get_footer(); ?>

