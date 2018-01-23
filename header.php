<!DOCTYPE html>

<!--ITU NEWS DOCUMENTATION (IND): this PHP language_attributes code displays the language attributes for the <html> tag. The possible language attributes are dir (text direction), lang and xml:lang. The choice of lang and xml:lang depends on the $doctype argument.  -->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!--ITU NEWS DOCUMENTATION (IND): set the site characterset-->
    <meta name="language" content="english"> <!--IND: set the site characterset-->
    <meta name="distribution" content="global"> <!--IND: set the visibility region-->
    <meta name="author" content="ITU"> <!--IND: set the site author data-->
    <meta name="robots" content="index, follow"> <!--IND: tell search engine robots to index and crawl the site-->
    <meta name="revisit-after" content="1 days"> <!--IND: tell search engine crawlers to come back after a few days and re-scan the site for changes-->
    <meta name="revisit-after" content="1 days"> <!--IND: tell search engine crawlers to come back after a few days and re-scan the site for changes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--IND: set the site characterset-->
    <meta name="theme-color" content="#1E88E5" /> <!--IND: sets the browser bar color on Android-->
    <meta name="msapplication-TileColor" content="#2196F3"> <!--IND: sets the Microsoft tile color when website is bookmarked-->
    <meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> <!--IND: sets global responsive features-->
    <meta name="HandheldFriendly" content="True"> <!--IND: indicate website is handheld device ready-->
    <meta name="apple-mobile-web-app-title" content="ITUNews"> <!--IND: Apple tile data-->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2196F3"> <!--IND: Apple status bar color-->
    <meta name="msapplication-navbutton-color" content="#2196F3"> <!--IND: Microsoft application navbar color-->

    <link rel="icon" href="<?php echo get_template_directory_uri() . '/media/logo-ITU.png'; ?>" sizes="32x32"> <!--IND: Apple Icons-->

    <link rel="icon" href="<?php echo get_template_directory_uri() . '/media/logo-ITU.png'; ?>" sizes="48x48"> <!--IND: Apple Icons-->

    <link rel="icon" href="<?php echo get_template_directory_uri() . '/media/logo-ITU.png'; ?>" sizes="96x96"> <!--IND: Apple Icons-->

    <link rel="icon" href="<?php echo get_template_directory_uri() . '/media/logo-ITU.png'; ?>" sizes="144x144"> <!--IND: Apple Icons-->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/media/logo-ITU.png'; ?>" type="image/x-icon"> <!--IND: use PHP to relay the sites root folder and add to ITU logo image file-->

    <meta name="description" content="Latest technology and telecommunications news for technology leaders"> <!--IND: Site description for Social Media and SEO-->
    <meta name="keywords" content="technology, news, telecommunications, ITU, 5G, technology latest"> <!--IND: Set SEO search keywords-->
   
    <meta property="og:fb:admins"><title><?php wp_title(''); ?></title><?php wp_head(); ?> <!--IND: automatically connect Facebook info to dynamically updated Wordpress site title-->
      

      <meta name="google-site-verification" content="G4CD8AzDYm5GOdkjfM61grx6yggtgAX-aQQ1M9mt8MA" /> <!--IND: Connect Google Analytics-->
      


            <div id="modalsearch" class="modal modalsearch"> <!--IND: initiate and apply modal classes to this DIV-->
  <div class="row"> <!--IND: indicate the start of a row-->
  <div class="col l12"> <!--IND: indicate this will be a column fitting 12/12 (full width) of current webpage width-->
    <div class="modal-content"> <!--IND: indicate the start of the modals content-->
      <form role="search" method="get" id="searchform" class="searchform" action="http://news.itu.int/" _lpchecked="1"> <!--IND: indicate and initiate the Wordpress form API-->
        <div>
        <input type="text" value="" name="s" id="s"> <!--IND: connect our markup to Wordpress markup values-->
          <input class="btn" type="submit" id="searchsubmit" value="Search"> <!--IND: connect our button to Wordpress form markup-->
                   <a style="position: absolute;right: 10em;top: 8em;" href="#!" class="modal-action modal-close">Cancel</a> <!--IND: allow users to close the search form-->
        </div>
      </form>

</div>
    </div>
</div>

   
  </div> <!--IND: close the modal markup-->

          <div class="mainnav"> <!--IND: begin main navication bar-->
              
              <div class="container"> <!--IND: begin a container (container class has default restricted width of 70% max-possible width-->
              
              
              
      <div class="row firstnavrow"> <!--IND: indicate this is a row element-->
          <div class="col l10"> <!--IND: indicate this is a column taking up 10/12 of the width of the screen-->
           <a href="http://news.itu.int">

           <img class="mainlogo left wow appear-from-left element-animated" srcset="<?php echo get_template_directory_uri() . '/media/ituenwslogo.png'; ?>" src="<?php echo get_template_directory_uri() . '/media/ituenwslogo.png'; ?>"> <!--IND: use PHP to relay root directory of website and join with URI of main logo graphic, srcset is the responsive version of src-->

           </a>
        </div>
                   <div class="col l1">
              <div class="right" id="translator">
              
              </div>
                  </div> 
                          <div class="col l1"> <!--IND: indicate this is a column taking up 1/12 of the width of the screen-->
      <a href="#modalsearch"> <!--IND: set the site characterset-->

      <img class="searchicon right" srcset="<?php echo get_template_directory_uri() . '/media/searchicon-01.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/searchicon-01.svg'; ?>"></a> <!--IND: set the site characterset-->
                  </div> 
              </div>
              </div>
      </div>

          <div class="z-depth-3 bluenavbar"> <!--IND: add drop shadow effect with z-depth class, this is the blue strip under navbar-->
                  <div class="menuitems container hide-on-large-only"> <!--IND: start mobile menu and hide the mobile menu on desktops with slass shown-->
                   <a href="#" data-activates="slide-out" class="button-collapse"><span class="right">Menu</span></a> <!--IND: anchor the text that loads the mobile menu-->
          </div>
       
              <div class="menuitems container hide-on-med-and-down"> <!--IND: hide the menu items that display on desktop; on mobile-->
                   <a href="http://news.itu.int/about-us/"><span class="right">About</span></a><!--IND: modify site page links directly here-->
             <a href="#topicsscroll"><span style="margin-right: 1em;" class="right">Topics</span></a>
         <a href="http://news.itu.int/subscribe/"><span style="margin-right: 1em;" class="right">Subscribe</span></a>

        
                 
              
              
              
          
          
          
          </div>
</div>


  <div id="modalnotify" class="modal">
  <div class="row">
  <div class="col l6">
    <div class="modal-content notifymodal">
       <?php ninja_forms_display_form(  $form_id = '4' );  ?>
<div class="notifydisclaimer">
  We are committed to keeping your e-mail address confidential. We do not sell, rent, or lease our subscription lists to third parties, and we will not provide your personal information to any third party individual, government agency, or company at any time unless compelled to do so by law. We will use your e-mail address solely to provide timely ITU News Updates. ITU will maintain the information you send via e-mail in accordance with applicable law. Our site provides users the opportunity to opt-out of receiving communications from us by reading the unsubscribe instructions located at the bottom of any e-mail they receive from us at anytime. Users who no longer wish to receive our newsletter or promotional materials may opt-out of receiving these communications by clicking on the unsubscribe link in the e-mail.

</div>
</div>
    </div>
</div>

   
  </div>
          
            <ul id="slide-out" class="side-nav">

    <li>
         <img class="navimage" src="<?php echo get_template_directory_uri() . '/media/ituenwslogo.png'; ?>">
    </li>

     <li><a href="http://news.itu.int/subscribe/">Subscribe</a></li>
    <li><a href="http://news.itu.int/about-us/">About</a></li>
    <div class="divider"></div>
 

   <ul class="collapsible collapsible-accordion">
          <li>
            <a style="padding-left:2em;" class="collapsible-header">Emerging Trends</a>
            <div class="collapsible-body">
              <ul>
              <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/">See All</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/5g/">5G</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/big-data/">Big Data</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/Cloud/">Cloud</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/content-apps/"">Multimedia, Content &amp; Apps</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/smesentrepreneurship/"">SMEs/Entrepreneurship</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/digital-finance/">Digital Finance</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/iot/">Iot</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/smart-cities/">Smart Cities</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/vrar/">VR/AR</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/connected-car/">Connected Car</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/artificial-intelligence/">Artificial Intelligence</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/et/open-source/">Open Source</a></li>
             
              </ul>
            </div>
          </li>
        </ul>

           <ul class="collapsible collapsible-accordion">
          <li>
            <a style="padding-left:2em;" class="collapsible-header">Regulation</a>
            <div class="collapsible-body">
              <ul>
              <li style="list-style-type:none;"><a href="http://news.itu.int/category/regulation/">See All</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/regulation/policy-regulatory-reform/">Policy/ Regulatory Reform</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/regulation/tariff-policy-competition/">Tariff Policy and Competition</a></li>
              </ul>
            </div>
          </li>
        </ul>

               <ul class="collapsible collapsible-accordion">
          <li>
            <a style="padding-left:2em;" class="collapsible-header">Infrastructure</a>
            <div class="collapsible-body">
              <ul>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/regulation/">See All</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/infrastructure/broadbandnetwork/">Broadband/ Network</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/infrastructure/emergency-comms/">Emergency Communications</a></li>
                  <li style="list-style-type:none;"><a href="http://news.itu.int/category/infrastructure/cybersecuritytrust/">Cybersecurity/ Trust</a></li>
                    <li style="list-style-type:none;"><a href="http://news.itu.int/category/infrastructure/network-management/">Network Management</a></li>
                      <li style="list-style-type:none;"><a href="http://news.itu.int/category/infrastructure/qualityperformance/">Quality/ Performance</a></li>
              </ul>
            </div>
          </li>
        </ul>


   <ul class="collapsible collapsible-accordion">
          <li>
            <a style="padding-left:2em;" class="collapsible-header">ICT for Sustainable Development</a>
            <div class="collapsible-body">
              <ul>
                 <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/">See All</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg1">No Poverty</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg2">Zero Hunger</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg3">Good Health and Well-being</a></li>
                  <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg4">Quality Education</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg5">Gender Equality</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg6">Clean Water and Sanitation</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg7">Affordable and Clean Energy</a></li>
                <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg8">Decent Work and Economic Growth</a></li>
                   <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg9">Industry, Innovation and Infrastructure</a></li>
                <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg10">Reduced Inequalities</a></li>
                <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg11">Sustainable Cities and Communities</a></li>
                 <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg12">Responsible Consumption and Production</a></li>
                  <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg13">Climate Action</a></li>
                   <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg14">Life Below Water</a></li>
                    <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg15">Life on Land</a></li>
                     <li style="list-style-type:none;"><a style="font-size:0.78em;" href="http://news.itu.int/category/ict4sdg/sdg16">Peace, Justice and Strong Institutions</a></li>
                      <li style="list-style-type:none;"><a href="http://news.itu.int/category/ict4sdg/sdg17">Partnerships for the Goals</a></li>
             
              </ul>
            </div>
          </li>
        </ul>


  </ul>
  
        

    
  
    
  
      
      
  </head>
    
  

    <body <?php body_class(); ?>>
