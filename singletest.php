<?php get_header(); ?>



 <script>   
      var options = [
    {selector: '#newslettertrigger', offset: 1000, callback: function(el)      
     {      
        jQuery(document).ready(function ($) {
     var $toastContent = $('<div>ITU Newsletter<a class="waves-effect blue waves-light btn">Sign Up</a></div>');
Materialize.toast($toastContent, 6000);
         });        
    } },
  ];
  Materialize.scrollFire(options);
    
 
      </script>





<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="articleintro">

<div class="container innercontainer">
    <div class="row">
    
                
    <div class="col l12 element-animated appear-from-bottom">
                         <div class="postcatdisp">
<span>see more in <?php exclude_post_categories("2,7,28,37,98"); ?> categories.</span>
</div>
    <p class="articleinttitle flow-text4"><?php the_title(); ?></p>


        </div>
        
          </div>  


</div>
                         

    </div>
<div class="container">
              <div class="row">
<div class="col l8 m12 s12">
<div class="fullarticletext flow-text2" id="newslettertrigger">
                <div class="row">    
    <div class="col l6 element-animated appear-from-top" style="margin-right: 4%;margin-bottom: 4%;">
        
        <div class="zoomcontainer">        
        <div class="zoom-me z-depth-5">
       <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_srcset( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<img class="" style="width:138%;" srcset="<?php echo $image[0]; ?>">
            <?php endif; ?>
            
                  </div>
            </div>

        </div>
            

                    
    </div>
   <div class="postdatedisp"> <?php the_time('F j, Y') ?></div>
  
           
 <?the_content(); ?>

 
    </div>


</div>
                  
        
                  
      <div class="col l4 push-l1 m12 s12">
   
          <div class="articleadvcard"></div>

    
 
                <div class="growcard youtubecard card-panel hoverable grey lighten-1 z-depth-1 wow element-animated appear-from-bottom">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <p class="white-text tiletext2">Youtube: Artificial Intelligence for SDGs. </p>
                                
                                 <p class="white-text tiletext">Watch Now</p>
                            </div>
                        </div>             
                
                    </div>
 
    
   
          
          
          
          

          
         
     <div class="card-panel hoverable blue z-depth-1 wow element-animated appear-from-bottom">
<div class="row">
         
               <div class="col l12">
           
           <p class="white-text tiletext">Popular Now:</p>
           
           </div>
         
         </div>
            
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
         
           
   <div class="card-content white-text">
       <a href="<?php the_permalink() ?>">
       <div class="row">
     
       
       <div class="col l4">
  <p><img class="responsive-img z-depth-3 wow element-animated appear-from-left" srcset="<?php the_post_thumbnail_url( 'thumbnail' ); ?>">   </p>  
           
           </div>
           
           <div class="col l8">
                 <p class="poptiletext wow element-animated appear-from-right"><?php the_title(); ?></p> 
           
           </div>
           
             </div>
           </a>
             </div>
                    
 <?
}
echo '</ul></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>
                
       
          </div>
                     


               
          
          
          
          
          
          
          
          
          
          
                  
    </div>            
        
        
                  
</div>
</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



<?php get_footer(story); ?>
