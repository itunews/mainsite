<?php $query = new WP_Query( 'showposts=1& category_name=Emerging Trends' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="topcontainer">
<a href="<?php the_permalink() ?>">
  <div class="snip1520">



      <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_srcset( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img class="bigboldimage" srcset="<?php echo $image[0]; ?>" alt="sample88" />
      <?php endif; ?>




<div class="container hometext">

<div class="row">
  <div class="col l12 m12 s12">
  <div class="bigheading flow-text3">  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
</div>
<div class="col l12 m12 s12">
 <div class="homeexcerpt"><?the_excerpt(); ?></div>
</div>

</div>

<?php endwhile;
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>



</div>
</a>

</div>
    
    <style>
    
    @media only screen and (device-width:1440px){
    .homesecond{
margin-top:-12rem;
        
    }   
    
}

@media only screen and (device-width:600px) and (device-height: 960px){
    .homesecond{
margin-top: -22%;
        
    }   
   
}

@media only screen and (min-width:1280px) and (min-height:720px){
    .homesecond{
margin-top: -9%;
        
    }   
   
}


.homesecond{position: relative;}


@media only screen and (min-height:601px) and (max-height:640px) and (min-width:1025px) and (max-width:1163px){
.homesecond{
    margin-top: -9%;
        
    }   
   
}


@media only screen and (min-height:600px) and (max-height:767px) and (min-width:1024px) and (max-width:1162px){
.homesecond{
    margin-top: -3%;
        
    }   
   
}

@media only screen and (min-height:1920px) and (max-height:2559px) and (min-width:1200px) and (max-width:1162px){
.homesecond{
    margin-top: -3%;
        
    }   
   
}

@media only screen and (min-height:750px) and (min-width:1334px){
    .homesecond{
margin-top: -7.5%;
        
    }   
   
}



@media only screen and (min-height:800px) and (min-width:1280px){
    .homesecond{
margin-top: -7%;
        
    }   
   
}

@media only screen and (min-width:2736px) and (max-width: 3840px){
    .homesecond{
margin-top: -6%;
        
    }   
   
}

@media only screen and (max-height:1024px) and (min-width:1366px){
    .homesecond{
    margin-top: -8%;
        
    }   
   
}





@media only screen and (min-width:760px) and (max-width:799px){
    .homesecond{
margin-top: -5%;
        
    }   
    
}

@media only screen and (min-width:800px) and (max-width:1000px){
    .homesecond{
margin-top: -5%;
        
    }   
    
}





@media only screen and (min-width:1920px) and (min-height:1025px) and (max-height:1080px) {
    .homesecond{
margin-top: -6%;
        
    }   
    
}



@media only screen and (device-width:1280px) and (min-height:1024px){
    .homesecond{
margin-top: -13%;
        
    }   
    
}

@media only screen and (device-width:1600px){
    .homesecond{
margin-top: -8%;
        
    }   
    
}


@media only screen and (max-height:480px){
    .homesecond{
    margin-top: -19%;
        
    }   
    
}

@media only screen and (width:2560px) and (min-height:1440px){
    .homesecond{
    margin-top: -10%;
        
    }   
    
}


@media only screen and (min-height:751px) and (max-height:768px) and (min-width:961px) and (max-width:1024px){
.homesecond{
    margin-top: -3%;
        
    }   
   
}


    
    
    </style>