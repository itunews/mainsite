<?php
/*
Template Name: crm status
*/
?>

<!--THIS IS THE ABOUT PAGE AND HASS SOME ABOUT US TEXT, A FORM TO GET FEEDBACK AND A SUBSCRIBE ADVERTISEMENT-->


<?php get_header(); ?>
<!--IND: get the header -->

<!--IND: create the top banner with blue linear gradient -->
<div class="ITU_fullscreen_topban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/topicsback.jpeg'; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">

    
<div class="container fullscreen_top">    
      <!--IND: create a container 70% width of its parent class -->
            <!--IND: forced inline styles to H tag -->
            <div class=row>
              <div class="col l9">
 <h2 style="color:white;font-family:avenirbold;"> There are currently <?php the_field('total_subscribers'); ?> subscribers for ITU News. <?php the_field('total_subscribers_moved_to_crm'); ?> of them have been moved to our SAP CRM. <?php the_field('total_subscribers_moved_to_alerts'); ?> of them have been moved to the email alerts service. New details starting from number <?php the_field('new_start_number_for_crm'); ?> need to be moved to CRM. New details starting from number <?php the_field('new_start_number_for_alerts'); ?> need to be moved to email alerts.</h2> 
 </div>
    </div>
  
    </div>
    
  </div>

          

   

<?php get_footer(); ?>