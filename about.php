<?php
/*
Template Name: aboout
*/
?>

<!--THIS IS THE ABOUT PAGE AND HASS SOME ABOUT US TEXT, A FORM TO GET FEEDBACK AND A SUBSCRIBE ADVERTISEMENT-->


<?php get_header(); ?>
<!--IND: get the header -->

<!--IND: create the top banner with blue linear gradient -->
<div class="topban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/aboutgif.gif'; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">


<div class="container">
      <!--IND: create a container 70% width of its parent class -->
            <!--IND: forced inline styles to H tag -->
 <h1 style="color:white;font-family:avenirbold;position:absolute;bottom:0.5em;"> About Us </h1>


    </div>

  </div>
<!--IND: start about page main section -->
<div class="aboutpage">
    <div class="container">

        <div class="row"> <!--IND: start row -->
    <div class="col l8"> <!--IND: create create column 8/12ths width of the screen -->
    <div class="aboutinfo"> <!--IND: create the main about info section -->
     <h5> ITU News is your source for how the latest information and communication technology (ICT) trends will impact sustainable development worldwide.
   <p>We are a service of ITU, the United Nations' specialized agency for ICT.</p>
<p>ITU News also brings you best practices from a diverse range of Thought Leaders - and keeps you current on key ITU events and initiatives.</p>
      </h5>  </div>


<!--IND: retrieve ninja form number 2 for feedback form -->









    </div>
    <div class="productitle"></div> <!--IND: start row -->
    <div class="col l3 push-l1"> <!--IND: create a column 3/12ths of the screen and move it to the right by 1 column -->

    <div class="row"> <!--IND: start row -->
              <div class="newslettersignup hoverable">
        <h5>Sign up to our ITU News Weekly</h5> <!--IND: force some style to the H tag -->
        <a href="http://news.itu.int/subscribe/" class="newsletbuttontwo waves-effect waves-light btn">Subscribe</a> <!--IND: refer to the newsletbuttontwo class to modify this button --></div>

        </div>






    </div>
        </div>





</div>
   </div>





<?php get_footer(); ?>
