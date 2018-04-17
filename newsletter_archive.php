<?php
/*
Template Name: Newsletter Archive
*/
?>

<!--THIS IS THE ABOUT PAGE AND HASS SOME ABOUT US TEXT, A FORM TO GET FEEDBACK AND A SUBSCRIBE ADVERTISEMENT-->


<?php get_header(); ?>
<!--IND: get the header -->

<!--IND: create the top banner with blue linear gradient -->
<div class="topban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/newback.jpg'; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">

    
<div class="container">    
      <!--IND: create a container 70% width of its parent class -->
            <!--IND: forced inline styles to H tag -->
 <h1 style="color:white;font-family:avenirbold;position:absolute;bottom:0.5em;"> Our Newsletters </h1> 
    
  
    </div>
    
  </div>



<!--IND: start about page main section -->
<div class="aboutpage">
    <div class="container">
        
        <div class="row"> <!--IND: start row -->
    <div class="col l9"> <!--IND: create create column 8/12ths width of the screen -->
    <div class="aboutinfo"> <!--IND: create the main about info section -->
     <h5> ​​​​​​​​​​​​​​The ITU Newsletter keeps you informed with a weekly roundup of select information and communication technology (ICT) trends worldwide as well as insights from ICT Thought Leaders and the latest on key ITU events and initiatives. 
   </h5><br/><span class="latest_newsletter_desc"> <?php the_field('latest'); ?> </span>    </div>


<div class="row usertabrow">
    <div class="col s12">
      <ul class="tabs guidetabs">
        <li class="tab col s1"><a href="#2018">2018</a></li>
       <!-- <li class="tab col s2"><a href="#2019">2019</a></li> -->
  

      </ul>
    </div>
    <div id="2018" class="col s12">
 <ul class="collapsible ITU_newsletter_archive">
     <li style="list-style-type: none;">
      <div class="collapsible-header">April</div>
      <div class="collapsible-body"><span><?php the_field('april_newsletters'); ?></span></div>
    </li>
    <li style="list-style-type: none;">
      <div class="collapsible-header">March</div>
      <div class="collapsible-body"><span><?php the_field('march_newsletters'); ?></span></div>
    </li>
       <li style="list-style-type: none;">
      <div class="collapsible-header">Febuary</div>
      <div class="collapsible-body"><span><?php the_field('february_newsletters'); ?></span></div>
    </li>
  </ul>
</div>

   <!--  <div id="2019" class="col s12">
     Nothing here yet
</div>-->



</div>






        
   
        
    
    </div>




    <div class="productitle"></div> <!--IND: start row -->
    <div class="col l3 push-l1"> <!--IND: create a column 3/12ths of the screen and move it to the right by 1 column -->
     
    <div class="row"> <!--IND: start row -->
              <div class="newslettersignup hoverable">
        <h5>Sign up to our weekly Newsletter</h5> <!--IND: force some style to the H tag -->
        <a href="http://news.itu.int/subscribe/" class="newsletbuttontwo waves-effect waves-light btn">Subscribe</a> <!--IND: refer to the newsletbuttontwo class to modify this button --></div>
        
        </div>



    
    
    
    </div>
        </div>
                        




</div>
   </div> 

       <script>


          $(document).ready(function(){
    $('.collapsible').collapsible();
  });
       </script>   

   

<?php get_footer(); ?>