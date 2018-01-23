<?php
/*
Template Name: IT Admin
*/
?>

<!--THIS IS THE USER GUIDE MOSTLY FOR THE IT ADMIN WHO WILL CONTINUE MAKING THIS WEBSITE-->


<?php get_header('userguide'); ?>
<!--IND: get the unique userguide header -->

<div class="topban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/userguide1.jpeg'; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">

    
<div class="container">    
      
            
 <h1 style="color:white;font-family:avenirbold;position:absolute;bottom:0.5em;">ITU News Editor 2018</h1> 
   
  
    </div>
    
  </div>


<div class="container ITU_userguide_container">

<div class="row">
<div class="col l12">
     
            <p id="megatitle" class="flow-text4" style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 1.5%;    margin-bottom: -0.05em;"></p>



</div>

</div>

<div class="row first">
<div class="col l10">
     
           <h3 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 1em;    margin-bottom: -0.05em;">User Guide for Information Technology Professionals</h3> 

<h5 style="color:#0072BC;">This section of the guide will show you the main components of the ITU News system. You should be able to organize the front-end, back end and transfer files to server with this guide. See the actual markup for documentation of the code. </h5>

</div>

</div>

  <div class="row usertabrow">
    <div class="col s12">
      <ul class="tabs guidetabs">
        <li class="tab col s1"><a href="#cms">The CMS</a></li>
        <li class="tab col s2"><a href="#ui">User Interface</a></li>
        <li class="tab col s2"><a href="#fs">File System</a></li>
        <li class="tab col s2"><a href="#st">Server Transfer</a></li>
      <li class="tab col s2"><a href="#bp">Backup Protocol</a></li>
      <li class="tab col s2"><a href="#up">User Policy</a></li>

      </ul>
    </div>
    <div id="cms" class="col s12 l10">


<div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #0072BC;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">The Content Management System</h4> 

<h5 style="color:#000000;"><span style="font-family:avenirbold">Wordpress</span> is the CMS of choice for ITU News. This is not a self managed hosting. Please contact Yawyeh in IS for hosting concerns. The Wordpress installation is managed by WP Engine. The codebase for ITU News is kept on itu.int</h5>

</div>

</div>

<div class="row graphicrow">
<div class="col l4">
     
          
<h5 style="color:#000000;font-family:avenirlight;text-align:right;">Wordpress is the chosen CMS however our ITU News theme is custom developed so there are no UI modification options in the backend</h5>

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/wpgaph.png'; ?>" src="<?php echo get_template_directory_uri() . '/media/wpgaph.png'; ?>">

</div>

</div>

<div class="row graphicrow">


<div class="col l8">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/loginto.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/loginto.JPG'; ?>">

</div>

<div class="col l4">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Logging into the CMS</h5>
<h6 style="color:#000000;">Please request Admin to create an account. Wordpress will load correct backend automatically for any type of user after logging in. Paste this link into the browser to access the backend. <span style="font-family:avenirbold">https://news.itu.int/wp-login.php</span></h6>

</div>

</div>



<div class="row graphicrow">

<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">The ITU News backend</h5>
<h6 style="color:#000000;text-align:right;">The ITU News backend is an updated &amp; re-designed Wordpress backend. It features a light UI which is easier on the eyes, cleaner UX and modern interface elements to ensure the writing experience is as distraction free as possible.</h6>

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/backcust.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/backcust.JPG'; ?>">

</div>

</div>

<div class="row graphicrow">



<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/backnoplug.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/backnoplug.JPG'; ?>">

</div>

<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirbold;">The Plugin System</h5>
<h6 style="color:#000000;">The plugin ecosystem for Wordpress is diverse and can meet most business requirements. Despite this be mindful of plugin update issues. If you see site errors, disable plugins one by one to diagnose the curlprit. User Interface Plugins<span style="font-family:avenirbold"> are not permitted</span>. Do not modify the UI with the help of a drag&amp;drop plugin. Only use plugins that have business functions such as forms and notification email systems. This will help avoid 90% of reasons Wordpress sites deteroriate over time, reduce in speed due to unnecessary, complex PHP processing </h6>

</div>
</div>

<!--
<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Mobile Menu Items</h5>
<h6 style="color:#000000;">Further down the same header.php file you will find the mobile menu slider. The structure starts with CSS class of <span style="font-family:avenirbold">Unordered List</span>. Everything under the <span style="font-family:avenirbold">collapsible</span> class can be modified to update the mobile menu. Refer to the <span style="font-family:avenirbold">Customjava.js</span> file for seeing further options</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/header4th.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/header4th.JPG'; ?>">

</div>



</div>

-->
    </div>

<div id="ui" class="col s12 l10">



<div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">The User Interface</h4> 

<h5 style="color:#000000;"><span style="font-family:avenirbold">MaterializeCSS</span> is the User Interface toolkit of choice. It is a library of Javascript and CSS that can be re-used in a component by component style as needed in the Wordpress backend or by hardcoding into the theme files. The UI however, has been heavily modified to align with ITU's new branding style. Full guide of all classes are available on their website.</h5>

</div>

</div>

<div class="row graphicrow">
<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirlight;text-align:right;"><span style="font-family:avenirbold">Do not invent</span> new fancy CSS features or Javascript features. Refer to the MaterializeCSS Library to see if you can find a feature and re-use it. To change visual styles, use ITU News's CSS file to <span style="font-family:avenirbold">overwrite</span> MaterializeCSS classes.</h5>

</div>

<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/matuser.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/matuser.JPG'; ?>">

</div>

</div>

<div class="row graphicrow">


<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/colmgui.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/colmgui.JPG'; ?>">

</div>

<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Inserting Columns</h5>
<h6 style="color:#000000;">Start creating columns with a row div. Altering the numbers will result in responsive behavior across devices. As an example, the code in the right says, make sure this column is full width on desktop, 10/12 columns on mobile and 50% or 6/12 columns on tablets. paste this address for full guide <span style="font-family:avenirbold">http://materializecss.com/grid.html</span></h6>

</div>

</div>



<div class="row graphicrow">

<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Using Cards</h5>
<h6 style="color:#000000;text-align:right;">The card is the default UI element used in the presentation of articles. The CSS is modified from the original class. Look for the 'card' class to see where they are used on the site.</h6>

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/cardexam.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/cardexam.JPG'; ?>">

</div>

</div>

<div class="row graphicrow">

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/respsam.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/respsam.JPG'; ?>">

</div>



<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Responsive Images</h5>
<h6 style="color:#000000;">Use <span style="font-family:avenirbold">responsive-img</span> class to make sure image automatically resize based on their surrounding. Paste this address for more information: <span style="font-family:avenirbold">http://materializecss.com/media-css.html</span></h6>

</div>
</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Continuous Responsive Text</h5>
<h6 style="color:#000000;">Continuous responsive text<span style="font-family:avenirbold"> resizes automatically</span>. Screen resolutions and corresponding font sizes are adjusted with media queries. This solution is used in the main body of article text and on large titles.</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/contitext.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/contitext.JPG'; ?>">

</div>



</div>



<div class="row graphicrow">

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/shadowdep.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/shadowdep.JPG'; ?>">

</div>



<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Element Depth</h5>
<h6 style="color:#000000;">Note the shadow under the blue bar on the left. Depth is used to convey tangibility and hierarchy in the UI with<span style="font-family:avenirbold"> z-depth-3 </span>class. It is used on the top menu and other places. Only use when there is 3D height necessary. Paste this address to learn more <span style="font-family:avenirbold">http://materializecss.com/shadow.html</span></h6> 

</div>



</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Animation</h5>
<h6 style="color:#000000;">Animation is used in many locations with<span style="font-family:avenirbold">CSS</span>. Animation is used to convey movement and presenting data only when needed on ITU News pages. This can be seen with the classes shown right.</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/anidemo.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/anidemo.JPG'; ?>">

</div>



</div>


<div class="row graphicrow">

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/morejs.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/morejs.JPG'; ?>">

</div>



<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">More Javascript</h5>
<h6 style="color:#000000;">See all the Javascript elements at <span style="font-family:avenirbold">http://materializecss.com/</span>.</h6> 

</div>



</div>

<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;">More CSS</h5>
<h6 style="color:#000000;">See all the Javascript elements at <span style="font-family:avenirbold">http://materializecss.com/</span>.</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/morecss.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/morecss.JPG'; ?>">

</div>



</div>


</div>
   <div id="fs" class="col s12 l10">

   <div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">The Folder System</h4> 

<h5 style="color:#000000;">ITU News has<span style="font-family:avenirbold"> 2 main folders</span> containing all the files for the website. These two folders have to be manually synced by hand. One folder is a staging folder and the other is the live site folder. </h5>

</div>

</div>


   <div class="row graphicrow">
<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirlight;text-align:right;">This is the file that wordpress loads as the <span style="font-family:avenirbold">homepage</span>. There are comments inside explaining all the parts. It is the most complicated page on this site.<span style="font-family:avenirbold"> Look at it</span>.</h5>

</div>

<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ughome.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ughome.JPG'; ?>">

</div>

</div>

<div class="row graphicrow">


<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugcss.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugcss.JPG'; ?>">

</div>

<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirbold;">This is the main CSS file</h5>
<h6 style="color:#000000;">Change the number of the file with the date and time at the end of the day when you are finishing edits. This forces the client to load the latest CSS defined in the<span style="font-family:avenirbold"> functions.php </span>file. Some classes overwrite classes found in the<span style="font-family:avenirbold"> secondary.css</span></h6>

</div>

</div>



<div class="row graphicrow">

<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">This is the Wordpress Functions file</h5>
<h6 style="color:#000000;text-align:right;">This functions file serves as the place to use the Wordpress API to perform high-level administrative functions. There is lined documentation inside.</h6>

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugfunctions.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugfunctions.JPG'; ?>">

</div>

</div>

<div class="row graphicrow">

<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugsecondary.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugsecondary.JPG'; ?>">

</div>



<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirbold;">The MaterializeCSS UI framework</h5>
<h6 style="color:#000000;">Use <span style="font-family:avenirbold">secondary.css</span> in functions.php to apply the BASE UI framework. Use the ITU News stylesheet to overwrite any CSS. <span style="font-family:avenirbold"> Regularily update </span> this file with the latest available at http://materializecss.com/getting-started.html Use the Sass language version only if there are IT people at ITU who can compile in this language.</h6>

</div>
</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">This is a Section Page</h5>
<h6 style="color:#000000;text-align:right;">This, for example, is the<span style="font-family:avenirbold">  Emerging Trends</span> category page. Category pages are named 'category-xxx.php' where xx is the name of the category in the Wordpress backend. When moving old data into this new database, these pages have to be updated by hand to show historical posts. Read the detailed instructions inside the page to see how to edit.</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugcategory.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugcategory.JPG'; ?>">

</div>



</div>

<div class="row graphicrow">

<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ug404.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ug404.JPG'; ?>">

</div>



<div class="col l7">     
          
<h5 style="color:#000000;font-family:avenirbold;">This is the 404 page</h5>
<h6 style="color:#000000;">Insert some 404 information here</h6> 

</div>



</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">This is the media folder</h5>
<h6 style="color:#000000;text-align:right;">Put all media attachments in here that do not need to be dynamically managed with a Wordpress backend to reduce server pressure. Things like site-wide logos and repeatidly served media go here</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugmedia.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugmedia.JPG'; ?>">

</div>



</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">This is the Javascript folder</h5>
<h6 style="color:#000000;text-align:right;">Do not put lines and lines of external Javascript libraries inside any pages like an idiot. Refer to the functions.php file to see where Javascript is loaded. MINIMIZE javascript and restrict to that what is critically needed. The base library uses JQuery and comes with lots of re-usable Javascript elements. Refer to MaterializeCSS Javascript section for more info.</h6> 

</div>

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugjs.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugjs.JPG'; ?>">

</div>



</div>


   </div>

<div id="st" class="col s12 l10">
<div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">Transferring Code to Server</h4> 

<h5 style="color:#000000;">The<span style="font-family:avenirbold"> Filezilla</span> application will be used to demo the transfer process of code to server. Unlike a web based application, it is not necessary to have a compiler to compile this code such as an AngularJS or ReactUI framework. This website is dead simple HTML, CSS &amp; minimal Javascript.</h5>

</div>
</div>
<div class="row graphicrow">


<div class="col l6">
     
          
<h5 style="color:#000000;font-family:avenirbold;">This is the ITU News FileZilla setup file</h5>
<h6 style="color:#000000;">This contains encrypted details of server login info for both the live ITU News site and the staging site. Obtain it from an ITU Admin inorder to gain FTP access.</h6> 

</div>

<div class="col l6">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ftplog.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ftplog.JPG'; ?>">

</div>



</div>

<div class="row graphicrow">

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ftpimport.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ftpimport.JPG'; ?>">

</div>


<div class="col l5">
               
<h5 style="color:#000000;font-family:avenirbold;">Import the ftp xml Files</h5>
<h6 style="color:#000000;">You have to go<span style="font-family:avenirbold"> file>import</span> in Filezilla</h6> 

</div>







</div>


<div class="row graphicrow">




<div class="col l5">
               
<h5 style="color:#000000;font-family:avenirbold;">DOUBLE check the folder</h5>
<h6 style="color:#000000;">Make sure you have the correct <span style="font-family:avenirbold">live or staging folder</span> open on the left. Using the wrong source folder can lead to transfering the <span style="font-family:avenirbold">wrong staging or live code</span> to the server and can ruin your day. If this happens, please see backup section on how to revert the site. Transfer files from your local drive to the right into the server.</h6> 

</div>


<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ftpfold.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ftpfold.JPG'; ?>">

</div>


</div>





</div>

   <div id="bp" class="col s12 l10">
   <div class="row">

   <div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">Back Up System</h4> 

<h5 style="color:#000000;">There is one task of <span style="font-family:avenirbold">manual backup</span> which is to zip the folder of the code and use the date and time to name the file. Paste this address <span style="font-family:avenirbold">https://intranet.itu.int/gs/spmd/Webdevelopmentfiles/Forms/AllItems.aspx</span> to see where the code is kept.</h5>
</div>


</div>



<div class="row graphicrow">


<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugbacklive.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugbacklive.JPG'; ?>">

</div>



<div class="col l5">
               
<h5 style="color:#000000;font-family:avenirbold;">The LIVE site has Backup</h5>
<h6 style="color:#000000;">The LIVE site has one stream of back-up managed by <span style="font-family:avenirbold">WP Engine</span> it is an hourly backup. This process takes a <span style="font-family:avenirbold">mirror image</span> of the front-end code and of the database. </h6> 

</div>


</div>



<div class="row graphicrow">



<div class="col l5">
               
<h5 style="color:#000000;font-family:avenirbold;">The STAGING site has its own backup</h5>
<h6 style="color:#000000;">The STAGING site has itw OWN stream of back-up managed by <span style="font-family:avenirbold">WP Engine</span> it is an hourly backup. This process takes a <span style="font-family:avenirbold">mirror image</span> of the front-end code and of the database. </h6> 

</div>


<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugbackstag.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugbackstag.JPG'; ?>">

</div>



</div>


<div class="row graphicrow">

<div class="col l7">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugstagl.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugstagl.JPG'; ?>">

</div>


<div class="col l5">
               
<h5 style="color:#000000;font-family:avenirbold;">Move between LIVE and Staging environments</h5>
<h6 style="color:#000000;">You can move entire mirror images of the entire ITU News site in the <span style="font-family:avenirbold">Wordpress Backend</span> by using the move and copy buttons. You do not have to keep the LIVE and STAGING environments in sync. It is best practice to copy the LIVE site to STAGING environment when starting work on a new sub project to ensure you have the latest valid code.</h6> 

</div>





</div>









   </div>


<div id="up" class="col s12 l10">

   <div class="row">

   <div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">User account Policy</h4> 

<h5 style="color:#000000;margin-bottom: 1.5em;">This section will outline the <span style="font-family:avenirbold">requirements for requesting and maintaining</span> ITU News accounts. It may be helpful to further detail<span style="font-family:avenirbold"> more refined </span> User Policy if you are dealing with sensitive access.</h5>

<h5 style="color:#000000;font-family:avenirbold;">Authority &amp; account Approval</h5>
<h6 style="color:#000000;">The people who can set up and approve the creation of new accounts includes the <span style="font-family:avenirbold">IT person who manages the site the most WITH the approval of Head of Corporate Communications</span> This decision making is usually done within SPM-COMS.</h6> 

<h5 style="color:#000000;font-family:avenirbold;">Resource use and Account Sharing</h5>
<h6 style="color:#000000;">The ITU News site is supposed to be an owned resource of the<span style="font-family:avenirbold"> ITU Corporate Communications Division</span> The editing team has full privilege to this resource. The resource may be shared by others at ITU but must be approved by Head of Comms. Only share your account details if your ITU News password is not the one you use with personal logins. Only share your account details for legitimate work or under emergency situations.</h6> 

<h5 style="color:#000000;font-family:avenirbold;">Account Rights &amp; Responsibilities</h5>
<h6 style="color:#000000;">The <span style="font-family:avenirbold">Admin Account</span> offers the highest level of control and should only be given to trusted people. All other Editor, Contributor and Author accounts can be given to internal or external people. The Editor account should be restricted to those who have top most editorial power. If you are given an Admin account and you are typically not IT Admin it is your responsibility to confer whatever you do in the back-end with authorized IT Admin.</h6> 
       <h5 style="color:#000000;font-family:avenirbold;">Account Removal &amp; Inactive Accounts </h5>
<h6 style="color:#000000;">Damage or <span style="font-family:avenirbold">innappropriate</span> use of the ITU News system should result in the user's account being removed. Accounts for writers who no longer contribute should be removed. Remove accounts of temporary users such as voulnteers and use a permanent account to enter posts should the need arise in future.</h6> 

        
<h5 style="color:#000000;font-family:avenirbold;">Password Policy</h5>
<h6 style="color:#000000;">Do not use the same password<span style="font-family:avenirbold"> you use for personal logins</span>. Change your default password as soon as you get the opportunity to do so. You can always reset your password if you forget it.</h6> 


</div>


</div>


</div>




</div>



   </div>








</div>


    </div>
    
  </div>


</div>


    <!--IND: start footer -->
<?php get_footer(); ?>

