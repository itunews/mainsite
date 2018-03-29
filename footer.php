<!--THIS IS THE DEFAULT FOOTER THAT IS LOADED ON ALL PAGES IN ITU NEWS THE HARDCODE HERE IS EASY TO MANUPULATE AND UP TO 90% SMALLER IN SIZE WHEN COMPARED TO USING A PLUGIN TO MANAGE THE FOOTER. IT STARTS WITH THE MAGAZINE ADVERT SECTION AND ENDS WITH MULTI-COLUMN HYPERLINKED LIST TO THE SECTION PAGES OF EACH CATEGORY-->

<!--start footer container-->
<div class="footerband">  <!--IND: start the dark blue footer band with magazine covers-->
    <div class="innerfooter container"> <!--IND: crete the container inside and apply a 70% max-width with container class -->
   <div class="row"> <!--IND: initiate a row-->
    <div class="col l7"> <!--IND: create a column 7/12th the width of the parent container only on desktop (desktop is targeted by 'l' before the number 7 as in 'l7'-->
        <div class="row"> <!--IND: create another row -->
        <div class="col l4"> <!--IND: create another column that is 4/12th in width on desktop, the total columns must be equal to 12, here 'col l4'x3 -->
             <a href="http://www.itu.int/en/itunews/Pages/default.aspx"><img class="hide-on-med-and-down magimga z-depth-3" srcset="http://news.itu.int/wp-content/uploads/2018/02/mag3.jpg" src="http://news.itu.int/wp-content/uploads/2018/02/mag3.jpg"></a> <!--IND: insert hyperlink to itu magazine page, hide the magazine cover on medium size and below devices, add drop shadow effect with z-depth, retrieve theme root directory, refer to magimga class to modify magazine cover CSS and animation -->
        </div>
              <div class="col l4"><!--IND: create another column that is 4/12th in width on desktop -->
              <a href="http://www.itu.int/en/itunews/Pages/default.aspx"><img class="hide-on-med-and-down magimgb z-depth-3" srcset="http://news.itu.int/wp-content/uploads/2018/02/mag2.jpg" src="http://news.itu.int/wp-content/uploads/2018/02/mag2.jpg"></a><!--IND: insert hyperlink to itu magazine page, hide the magazine cover on medium size and below devices, add drop shadow effect with z-depth, retrieve theme root directory, refer to magimgb class to modify magazine cover CSS and animation -->
        </div>
              <div class="col l4"><!--IND: create another column that is 4/12th in width on desktop -->
             <a href="http://www.itu.int/en/itunews/Pages/default.aspx"><img class="hide-on-med-and-down magimgc z-depth-3" srcset="http://news.itu.int/wp-content/uploads/2018/02/mag1.jpg" src="http://news.itu.int/wp-content/uploads/2018/02/mag1.jpg"></a><!--IND: insert hyperlink to itu magazine page, hide the magazine cover on medium size and below devices, add drop shadow effect with z-depth, retrieve theme root directory, refer to magimgc class to modify magazine cover CSS and animation -->
        </div>
        
        </div>
     
       
       
       </div>
       <a href="http://www.itu.int/en/itunews/Pages/default.aspx"> <!--IND: link to the magazine page -->
       <div class="col l5 s12"> <!--IND: create a column occupying 5/12 columns on desktop and transform to full width (12/12 columns) on mobile devices -->
            <div class="footeradva">Go in-depth with</div> <!--IND: see class to modify text CSS-->
            <div>
            <img class="maglogo" srcset="<?php echo get_template_directory_uri() . '/media/magfoot.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/magfoot.svg'; ?>">
            </div>
            <!--IND: apply class maglogo, get root directory URI, add to relative path of the SVG, use src fallback if browser is unable to support newer responsive srcset --> 

            <div class="footeradvb">Available in six languages</div>
            <div id="topicsscroll"><!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
            <img class="langlogo hide-on-med-and-down" srcset="<?php echo get_template_directory_uri() . '/media/magfoot2.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/magfoot2.svg'; ?>">
            <!--IND: get root directory, add to relative link to languages SVG image and display it, hiding on medium and mobile devices -->
            </div>
       
       
       </div></a>
    
    </div>
</div>
</div>
<div id="" class="categoryfooter hide-on-med-and-down"> <!--IND: see categoryfooter class in CSS to modify -->
<div class="container"> <!--IND: create a 70% max width container -->
    <div class="row"> <!--IND: insert a row -->
    <div class="col l3"> <!--IND: insert a column which will take 3/12th space on large desktop-->
         <h4 style="font-family:avenirbold;!important;color:#fff;">Topics</h4> <!--IND: force styles on H tag title -->
       <div class="footcatbundile"> <!--IND: contain all footer items in one section -->

       <a href="http://news.itu.int/category/et/"> <h5 style="font-family:avenirbold;!important;color:#0173BC;padding-top:7%;">Emerging Trends</h5></a> <!--IND: link Emerging Trends section and force inline style on H tag-->

         <div class="footcatitems"> <!--IND: container for the actual items, change titles and link as needed & upload to server -->

         <a href="http://news.itu.int/category/et/5g/"><h6 style="font-family:avenirlight;!important;color:#fff;">5G</h6></a>

             <a href="http://news.itu.int/category/et/artificial-intelligence/"><h6 style="font-family:avenirlight;!important;color:#fff;">Artificial Intelligence</h6></a>

        <a href="http://news.itu.int/category/et/big-data/"><h6 style="font-family:avenirlight;!important;color:#fff;">Big Data</h6></a>

             <a href="http://news.itu.int/category/et/Cloud/"><h6 style="font-family:avenirlight;!important;color:#fff;">Cloud</h6></a>

                 <a href="http://news.itu.int/category/et/Youth/"><h6 style="font-family:avenirlight;!important;color:#fff;">Youth</h6></a>

                  <a href="http://news.itu.int/category/et/connected-car/"><h6 style="font-family:avenirlight;!important;color:#fff;">Connected Car</h6></a>

                <a href="http://news.itu.int/category/et/digital-finance/"><h6 style="font-family:avenirlight;!important;color:#fff;">Digital Finance</h6></a>
             
              <a href="http://news.itu.int/category/et/digital-tv/"><h6 style="font-family:avenirlight;!important;color:#fff;">Digital TV</h6></a>

                  <a href="http://news.itu.int/category/et/iot/"><h6 style="font-family:avenirlight;!important;color:#fff;">IoT</h6></a>

                         <a href="http://news.itu.int/category/et/content-apps/"><h6 style="font-family:avenirlight;!important;color:#fff;">Multimedia, Content &amp; Apps</h6></a>

                    <a href="http://news.itu.int/category/et/open-source/"><h6 style="font-family:avenirlight;!important;color:#fff;">Open Source</h6></a>

       <a href="http://news.itu.int/category/et/smart-cities/"><h6 style="font-family:avenirlight;!important;color:#fff;">Smart Cities</h6></a>

             <a href="http://news.itu.int/category/et/smesentrepreneurship/"><h6 style="font-family:avenirlight;!important;color:#fff;">SMEs/Entrepreneurship</h6></a>
           
         
             <a href="http://news.itu.int/category/et/vrar/"><h6 style="font-family:avenirlight;!important;color:#fff;">VR/AR</h6></a>
            
         

           
             
            </div>
        
        </div>
        

        
        
        
        
        </div>
        
            <div class="col l3"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
  
       <div class="footcatbundile"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
        <a href="http://news.itu.int/category/regulation/">  

        <h5 style="font-family:avenirbold;!important;color:#0173BC;padding-top:7%;">Regulation</h5></a> 
        <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
         <div class="footcatitems"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
       <a href="http://news.itu.int/category/regulation/policy-regulatory-reform/">  <h6 style="font-family:avenirlight;!important;color:#fff;">Policy/ Regulatory Reform</h6></a>
       <a href="http://news.itu.int/category/regulation/tariff-policy-competition/">  <h6 style="font-family:avenirlight;!important;color:#fff;">Tariff Policy and Competition</h6></a>

             
            </div>
        
        </div>
        
                  <div class="footcatbundile">
        <a href="http://news.itu.int/category/infrastructure/"><h5 style="font-family:avenirbold;!important;color:#0173BC;padding-top:7%;">Infrastructure</h5></a>
         <div class="footcatitems">
         <a href="http://news.itu.int/category/infrastructure/broadbandnetwork/"><h6 style="font-family:avenirlight;!important;color:#fff;">Broadband/ Network</h6></a>
       <a href="http://news.itu.int/category/infrastructure/cybersecuritytrust/"> <h6 style="font-family:avenirlight;!important;color:#fff;">Cybersecurity/ Trust</h6></a>
             <a href="http://news.itu.int/category/infrastructure/emergency-comms/"><h6 style="font-family:avenirlight;!important;color:#fff;">Emergency Communications</h6></a>
             <a href="http://news.itu.int/category/infrastructure/network-management/"><h6 style="font-family:avenirlight;!important;color:#fff;">Network Management</h6></a>
             <a href="http://news.itu.int/category/infrastructure/qualityperformance/"><h6 style="font-family:avenirlight;!important;color:#fff;">Quality/ Performance</h6></a>

             
            </div>
        
        </div>
        
        </div>
        
            <div class="col l5">

       <div class="footcatbundile">
        <a href="http://news.itu.int/category/ict4sdg/">  <h5 style="font-family:avenirbold;!important;color:#0173BC;padding-top:7%;">ICT for Sustainable Development</h5></a>
         <div class="footcatitems">
          <a href="http://news.itu.int/category/ict4sdg/sdg1"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 1: No Poverty</h6></a>
         <a href="http://news.itu.int/category/ict4sdg/sdg2"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 2: Zero Hunger</h6></a>
              <a href="http://news.itu.int/category/ict4sdg/sdg3"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 3: Good Health and Well-being</h6></a>
              <a href="http://news.itu.int/category/ict4sdg/sdg4"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 4: Quality Education</h6></a>
              <a href="http://news.itu.int/category/ict4sdg/sdg5"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 5: Gender Equality</h6></a>
              <a href="http://news.itu.int/category/ict4sdg/sdg6"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 6: Clean Water and Sanitation</h6></a>
              <a href="http://news.itu.int/category/ict4sdg/sdg7"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 7: Affordable and Clean Energy</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg8"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 8: Decent Work and Economic Growth</h6></a>
            <a href="http://news.itu.int/category/ict4sdg/sdg9"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 9: Industry, Innovation and Infrastructure</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg10"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 10: Reduced Inequalities</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg11"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 11: Sustainable Cities and Communities</h6></a>
         <a href="http://news.itu.int/category/ict4sdg/sdg12"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 12: Responsible Consumption and Production</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg13"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 13: Climate Action</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg14"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 14: Life Below Water</h6></a>
               <a href="http://news.itu.int/category/ict4sdg/sdg15"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 15: Life on Land</h6></a>
         <a href="http://news.itu.int/category/ict4sdg/sdg16"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 16: Peace, Justice and Strong Institutions</h6></a>
                <a href="http://news.itu.int/category/ict4sdg/sdg17"> <h6 style="font-family:avenirlight;!important;color:#fff;">SDG 17: Partnerships for the Goals</h6></a>
             
            </div>
        
        </div>
        

        
        
        
        
        </div>

        

        
        
    
    </div>
        <div class="row" style="margin-top: 16em;"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->

    <div class="col l1"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
      <a href="https://www.itu.int/en/about/Pages/default.aspx"> <img class="ITU_superlogo" srcset="<?php echo get_template_directory_uri() . '/media/ituverticl-01.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ituverticl-01.svg'; ?>"></a>
      <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
      
    </div>
        <div class="col l8"> <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
        <h6 style="font-family:avenirlight;!important;color:white;!important;">
            &copy; International Telecommunication Union 1865-2018 All Rights Reserved. </br>ITU is the United Nations' specialized agency for information and communication technology. Any opinions expressed and statistics presented by third parties do not necessarily reflect the views of ITU.
            
            </h6>
        <!--IND: the_field allows user to dynamically update the video href markup here with a form in the backend -->
        
        </div>
        
        
        
        </div>
    
    </div>

</div>
    



<!--end footer container-->
  <?php wp_footer(); ?>
 
<!--Linkedin Insights collection script-->
  <script type="text/javascript">
_linkedin_data_partner_id = "94195";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=94195&fmt=gif" />
</noscript>

</body>
</html>
