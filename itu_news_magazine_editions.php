<?php
/*
Template Name: ITU News Magazine Editons
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
    <h1 style="color:white;font-family:avenirbold;position:absolute;bottom:0.5em;"> ITU News Magazine Editions </h1>
  </div>
</div>
<!--IND: start about page main section -->
<div class="aboutpage">
  <div class="container">
    <div class="row"> <!--IND: start row -->
      <div class="col l9"> <!--IND: create create column 8/12ths width of the screen -->
        <div class="magazineinfo"> <!--IND: create the main about info section -->
          <h5><span style="font-family: avenirbold;">Welcome to ITU News ​​Magazine Editions</span> – your source for insight on key ITU events and initiatives, as well as global information and communication technology (ICT) trends.
          </h5>
          <br>
          <h6 style="font-family: avenirbold;">Latest edition</h6>
          <fieldset>
            <div class="latest_newsletter_desc magazineitem"> <?php the_field('latest'); ?> </div>
          </fieldset>
          <hr>
          <br>
          <h6 style="font-family: avenirbold;">Previous issues</h6>
          <div class="row usertabrow">
            <div class="col s12">
              <ul class="tabs guidetabs">
                <li class="tab col s3 l2">
                <a href="#2018">2018</a>
              </li>
              <li class="tab col s3 l2">
                <a href="#2017">2017</a>
              </li>
              <li class="tab col s3 l2">
                <a href="#2016">2016</a>
              </li>
              <li class="tab col s3 l6">
                <a href="#historical">1869 - 2015</a>
              </li>
            </ul>
          </div>
          <div class="col s12" id="2018">
          <span class="magazineitem"><?php the_field('2018_magazines'); ?></span>
        </div>
        <div class="col s12" id="2017">
          <span class="magazineitem"><?php the_field('2017_magazines'); ?></span>
        </div>
        <div class="col s12" id="2016">
          <span class="magazineitem"><?php the_field('2016_magazines'); ?></span>
        </div>
        <div class="col s12" id="historical">
          <span class="magazineitem"><a href="http://historicjournals.itu.int/issues" target="_blank">See archives from 1869 to 2015</a></span>
        </div>
      </div>
    </div>
  </div>
  <div class="productitle"></div> <!--IND: start row -->
  <div class="col l3 push-l1"> <!--IND: create a column 3/12ths of the screen and move it to the right by 1 column -->
    <div class="row"> <!--IND: start row -->
      <div class="newslettersignup hoverable">
        <h5>Sign up to ITU News Weekly</h5>
        <!--IND: force some style to the H tag -->
        <a href="http://news.itu.int/subscribe/" class="waves-effect waves-light btn">Subscribe</a> <!--IND: refer to the newsletbuttontwo class to modify this button -->
      </div>
      <!--<a href=""><img class="responsive-img hoverable storyfirstadd wow appear-from-bottom element- animated" srcset="http://news.itu.int/wp-content/themes/itunews/media/wsis_advert.jpg" src="http://44qewv8ie16ohghf2s78zn7f.wpengine.netdna-cdn.com/wp-content/themes/itunews/media/wsis_advert.jpg" style="visibility: visible; animation-name: appear-from-bottom;"></a>-->
      <!-- IND: start LTelcom add -->
      <a href="http://www.lstelcom.com/" target="_blank">​​​​​​​​​​
        <div id="slideshow">
          <div>
           <img srcset="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom04-en.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom04-en.jpg'; ?>" >
          </div>
          <div>
           <img srcset="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom05-en.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom05-en.jpg'; ?>" >
          </div>
          <div>
           <img srcset="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom06-en.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ad/2017_Ad-LStelcom06-en.jpg'; ?>" >
          </div>
        </div>
      </a>
      <!-- IND: end LTelcom add -->
    <!-- IND: start ITU telecom add -->
    <div class="magazines_ad">
      <a class="target_blank" href="https://www.itu.int/en/itutelecom/Pages/default.aspx">​​​​​​​​​​
        <img srcset="<?php echo get_template_directory_uri() . '/media/ad/WT17_AD-BetterSooner.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ad/WT17_AD-BetterSooner.jpg'; ?>" >
      </a>
    </div>
  </div>
    <!-- IND: end ITU telecom add -->
  </div>
  </div>
</div>
</div>
<script>
    $(document).ready(function(){

    /*$('a').attr('target','_blank');*/

    $('.collapsible').collapsible();

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3000);
  });
</script>
<?php get_footer(); ?>
