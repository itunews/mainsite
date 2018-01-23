<?php
/*
Template Name: UG for Writers
*/
?>

<!--THIS IS THE USER GUIDE MOSTLY FOR THE CURRENT AND FUTURE WRITERS-->

<style>
/*! Devices.css v0.1.14 | MIT License | github.com/picturepan2/devices.css */
.device,
.device::before,
.device::after,
.device *,
.device *::before,
.device *::after {
  box-sizing: border-box;
  display: block;
}

.device {
  position: relative;
  transform: scale(1);
  z-index: 1;
}

.device .device-frame {
  z-index: 1;
}

.device .device-content {
  background-color: #fff;
  background-position: center center;
  background-size: cover;
  position: relative;
}

.device-galaxy-s8 {
  height: 686px;
  width: 316px;
}

.device-galaxy-s8 .device-frame {
  background: #222;
  border: solid #cfcfcf;
  border-radius: 46px;
  border-width: 4px 0;
  box-shadow: inset 0 0 0 2px #9c9c9c;
  height: 686px;
  padding: 40px 8px 34px 8px;
  width: 316px;
}

.device-galaxy-s8 .device-content {
  background-image: url("../src/img/bg-04.jpg");
  border: 2px solid #222;
  border-radius: 28px;
  height: 617px;
  width: 300px;
}

.device-galaxy-s8 .device-stripe::after,
.device-galaxy-s8 .device-stripe::before {
  border: solid rgba(51, 51, 51, .15);
  border-width: 4px 0;
  content: "";
  height: 686px;
  position: absolute;
  top: 0;
  width: 5px;
  z-index: 9;
}

.device-galaxy-s8 .device-stripe::after {
  left: 40px;
}

.device-galaxy-s8 .device-stripe::before {
  right: 40px;
}

.device-galaxy-s8 .device-sensors {
  background: #666;
  border-radius: 2.5px;
  height: 4px;
  left: 50%;
  margin-left: -20px;
  margin-top: -2px;
  position: absolute;
  top: 26px;
  width: 40px;
}

.device-galaxy-s8 .device-sensors::after,
.device-galaxy-s8 .device-sensors::before {
  background: #666;
  border-radius: 50%;
  content: "";
  position: absolute;
  top: 50%;
}

.device-galaxy-s8 .device-sensors::after {
  box-shadow: -160px 0 #333, -145px 0 #333, -200px 0 #333;
  height: 6px;
  margin-top: -3px;
  right: -75px;
  width: 6px;
}

.device-galaxy-s8 .device-sensors::before {
  box-shadow: 155px 0 #666;
  height: 10px;
  left: -75px;
  margin-top: -5px;
  width: 10px;
}

.device-galaxy-s8 .device-btns {
  background: #9c9c9c;
  border-radius: 2px 0 0 2px;
  height: 98px;
  left: -2px;
  position: absolute;
  top: 120px;
  width: 3px;
}

.device-galaxy-s8 .device-btns::after {
  background: #9c9c9c;
  border-radius: 2px 0 0 2px;
  content: "";
  height: 45px;
  left: 0;
  position: absolute;
  top: 138px;
  width: 3px;
}

.device-galaxy-s8 .device-power {
  background: #9c9c9c;
  border-radius: 0 2px 2px 0;
  height: 46px;
  position: absolute;
  right: -2px;
  top: 218px;
  width: 3px;
}

.device-galaxy-s8.device-blue .device-frame {
  border-color: #a3c5e8;
  box-shadow: inset 0 0 0 2px #5192d4;
}

.device-galaxy-s8.device-blue .device-content {
  background-image: url("../src/img/bg-05.jpg");
}

.device-galaxy-s8.device-blue .device-stripe::after,
.device-galaxy-s8.device-blue .device-stripe::before {
  border-color: rgba(255, 255, 255, .35);
}

.device-galaxy-s8.device-blue .device-btns,
.device-galaxy-s8.device-blue .device-btns::after {
  background: #5192d4;
}

.device-galaxy-s8.device-blue .device-power {
  background: #5192d4;
}

.device-surface-pro {
  height: 394px;
  width: 561px;
}

.device-surface-pro .device-frame {
  background: #0d0d0d;
  border-radius: 10px;
  box-shadow: inset 0 0 0 2px #c8c8c8;
  height: 394px;
  margin: 0 auto;
  padding: 26px 24px;
  width: 561px;
}

.device-surface-pro .device-content {
  background-image: url("https://news.itu.int/wp-content/themes/itunews/media/ersrdeb.JPG");
  border: 2px solid #121212;
  border-radius: 2px;
  height: 342px;
  width: 513px;
}

.device-surface-pro .device-btns::after,
.device-surface-pro .device-btns::before {
  background: #c8c8c8;
  content: "";
  height: 2px;
  position: absolute;
  top: -2px;
}

.device-surface-pro .device-btns::after {
  left: 48px;
  width: 26px;
}

.device-surface-pro .device-btns::before {
  left: 94px;
  width: 48px;
}

.device-surface-pro .device-sensors {
  background: #333;
  border-radius: 50%;
  height: 6px;
  left: 50%;
  margin-left: -3px;
  margin-top: -3px;
  position: absolute;
  top: 14px;
  width: 6px;
}

.device-surface-book {
  height: 424px;
  width: 728px;
}

.device-surface-book .device-frame {
  background: #0d0d0d;
  border-radius: 12px;
  box-shadow: inset 0 0 0 2px #c8c8c8;
  height: 408px;
  margin: 0 auto;
  padding: 24px 22px;
  position: relative;
  width: 584px;
}

.device-surface-book .device-content {
  background-image: url("../src/img/bg-09.jpg");
  border: 2px solid #121212;
  border-radius: 2px;
  height: 360px;
  width: 540px;
}

.device-surface-book .device-btns::after,
.device-surface-book .device-btns::before {
  background: #c8c8c8;
  content: "";
  height: 2px;
  position: absolute;
  top: -2px;
}

.device-surface-book .device-btns::after {
  left: 122px;
  width: 20px;
}

.device-surface-book .device-btns::before {
  left: 168px;
  width: 44px;
}

.device-surface-book .device-power {
  background: linear-gradient(to bottom, #eee, #c8c8c8);
  border: solid #c8c8c8;
  border-radius: 2px;
  border-width: 0 2px;
  height: 12px;
  margin-top: 4px;
  position: relative;
  width: 728px;
}

.device-surface-book .device-power::after,
.device-surface-book .device-power::before {
  content: "";
  position: absolute;
}

.device-surface-book .device-power::after {
  background: radial-gradient(circle at center, #eee 0, #eee 95%, #a2a1a1 100%);
  border-radius: 0 0 6px 6px;
  height: 8px;
  left: 50%;
  margin-left: -125px;
  top: 0;
  width: 250px;
  z-index: 1;
}

.device-surface-book .device-power::before {
  background: linear-gradient(to bottom, #eee, #c8c8c8);
  border-radius: 2px 2px 0 0;
  bottom: 12px;
  height: 8px;
  left: 50%;
  margin-left: -292px;
  width: 584px;
}


.device-macbook {
  height: 432px;
  width: 740px;
}

.device-macbook .device-frame {
  background: #0d0d0d;
  border-radius: 20px;
  box-shadow: inset 0 0 0 2px #c8cacb;
  height: 428px;
  margin: 0 auto;
  padding: 29px 19px 39px 19px;
  position: relative;
  width: 614px;
}

.device-macbook .device-frame::after {
  background: #272626;
  border-radius: 0 0 20px 20px;
  bottom: 2px;
  content: "";
  height: 26px;
  left: 2px;
  position: absolute;
  width: 610px;
}

.device-macbook .device-frame::before {
  bottom: 10px;
  color: #c8cacb;
  content: "";
  font-size: 12px;
  height: 16px;
  left: 50%;
  line-height: 16px;
  margin-left: -100px;
  position: absolute;
  text-align: center;
  width: 200px;
  z-index: 1;
}

.device-macbook .device-content {
  background-image: url("https://news.itu.int/wp-content/themes/itunews/media/ugintins.JPG");
  border: 2px solid #121212;
  border-radius: 2px;
  height: 360px;
  width: 576px;
}

.device-macbook .device-power {
  background: #e2e3e4;
  border: solid #d5d6d8;
  border-radius: 2px 2px 0 0;
  border-width: 0 4px;
  height: 4px;
  margin-top: -10px;
  position: relative;
  width: 740px;
  z-index: 9;
}

.device-macbook .device-power::after,
.device-macbook .device-power::before {
  content: "";
  position: absolute;
}

.device-macbook .device-power::after {
  background: radial-gradient(circle at center, #e2e3e4 0, #e2e3e4 85%, #a0a3a7 100%);
  border: solid #adb0b3;
  border-width: 0 2px;
  height: 4px;
  left: 50%;
  margin-left: -60px;
  width: 120px;
}

.device-macbook .device-power::before {
  background: #a0a3a7;
  border-radius: 0 0 180px 180px/ 0 0 10px 10px;
  box-shadow: inset 0 -2px 6px 0 #474a4d;
  height: 10px;
  left: -4px;
  margin: 0 auto;
  top: 4px;
  width: 740px;
}

.device-macbook.device-gold .device-frame {
  box-shadow: inset 0 0 0 2px #edccb4;
}

.device-macbook.device-gold .device-power {
  background: #f7e8dd;
  border-color: #edccb4;
}

.device-macbook.device-gold .device-power::after {
  background: radial-gradient(circle at center, #f7e8dd 0, #f7e8dd 85%, #dfa276 100%);
  border-color: #e4b08a;
}

.device-macbook.device-gold .device-power::before {
  background: #edccb4;
  box-shadow: inset 0 -2px 6px 0 #83491f;
}

.device-macbook.device-rosegold .device-frame {
  box-shadow: inset 0 0 0 2px #f6a69a;
}

.device-macbook.device-rosegold .device-power {
  background: #facfc9;
  border-color: #f6a69a;
}

.device-macbook.device-rosegold .device-power::after {
  background: radial-gradient(circle at center, #facfc9 0, #facfc9 85%, #ef6754 100%);
  border-color: #f6a69a;
}

.device-macbook.device-rosegold .device-power::before {
  background: #f6a69a;
  box-shadow: inset 0 -2px 6px 0 #851b0c;
}

.device-macbook.device-spacegray .device-frame {
  box-shadow: inset 0 0 0 2px #767a7d;
}

.device-macbook.device-spacegray .device-power {
  background: #909496;
  border-color: #767a7d;
}

.device-macbook.device-spacegray .device-power::after {
  background: radial-gradient(circle at center, #909496 0, #909496 85%, #515456 100%);
  border-color: #5d6163;
}

.device-macbook.device-spacegray .device-power::before {
  background: #515456;
  box-shadow: inset 0 -2px 6px 0 black;
}

.device-surface-studio {
  height: 506px;
  width: 640px;
}

.device-surface-studio .device-frame {
  background: #0d0d0d;
  border-radius: 10px;
  box-shadow: inset 0 0 0 2px black;
  height: 440px;
  padding: 20px;
  width: 640px;
}

.device-surface-studio .device-content {
  background-image: url("https://news.itu.int/wp-content/themes/itunews/media/backnoplug.JPG");
  border: 2px solid #121212;
  border-radius: 2px;
  height: 400px;
  width: 600px;
}

.device-surface-studio .device-stripe {
  background: #444;
  border-radius: 0 0 2px 2px;
  bottom: 0;
  height: 4px;
  left: 50%;
  margin-left: -117px;
  position: absolute;
  width: 234px;
}

.device-surface-studio .device-stripe::after,
.device-surface-studio .device-stripe::before {
  content: "";
  left: 50%;
  position: absolute;
  top: -75px;
}

.device-surface-studio .device-stripe::after {
  border: 6px solid #d5d6d8;
  border-radius: 0 0 18px 18px;
  border-top: 0;
  box-shadow: inset 0 0 0 4px #c8cacb;
  height: 60px;
  margin-left: -140px;
  width: 280px;
  z-index: -1;
}

.device-surface-studio .device-stripe::before {
  border: 15px solid #e2e3e4;
  border-radius: 0 0 4px 4px;
  border-top: 0;
  height: 70px;
  margin-left: -150px;
  width: 300px;
  z-index: -2;
}

.device-surface-studio .device-power {
  background: #eff0f0;
  border: solid #e2e3e4;
  border-radius: 0 0 2px 2px;
  border-width: 0 4px 2px 4px;
  height: 32px;
  margin: 30px auto 0 auto;
  position: relative;
  width: 250px;
}

.device-surface-studio .device-power::after {
  background: #adb0b3;
  content: "";
  height: 2px;
  left: -4px;
  position: absolute;
  top: 4px;
  width: 250px;
}

.device-imac-pro {
  height: 484px;
  width: 624px;
}

.device-imac-pro .device-frame {
  background: #0d0d0d;
  border-radius: 18px;
  box-shadow: inset 0 0 0 2px #080808;
  height: 428px;
  padding: 24px 24px 80px 24px;
  position: relative;
  width: 624px;
}

.device-imac-pro .device-frame::after {
  background: #2f2e33;
  border-radius: 0 0 18px 18px;
  bottom: 2px;
  content: "";
  height: 54px;
  left: 2px;
  position: absolute;
  width: 620px;
}

.device-imac-pro .device-frame::before {
  bottom: 15px;
  color: #0d0d0d;
  content: "";
  font-size: 24px;
  height: 24px;
  left: 50%;
  line-height: 24px;
  margin-left: -100px;
  position: absolute;
  text-align: center;
  width: 200px;
  z-index: 9;
}

.device-imac-pro .device-content {
  background-image: url("https://news.itu.int/wp-content/themes/itunews/media/dtbtebedbe.JPG");
  border: 2px solid #121212;
  border-radius: 2px;
  height: 324px;
  width: 576px;
}

.device-imac-pro .device-power::after,
.device-imac-pro .device-power::before {
  content: "";
}

.device-imac-pro .device-power::after {
  background: #222225;
  border-radius: 2px;
  height: 6px;
  margin: 0 auto;
  position: relative;
  width: 180px;
}

.device-imac-pro .device-power::before {
  border: solid transparent;
  border-bottom-color: #333;
  border-width: 0 8px 50px 8px;
  height: 50px;
  margin: 0 auto;
  position: relative;
  width: 130px;
}

</style>

<?php get_header('userguide'); ?>
<!--IND: get the unique userguide header -->

<div class="topban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/ugwriterhead.jpg'; ?>');background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">

    
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
     
           <h3 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 1em;    margin-bottom: -0.05em;">User Guide Writers and Content Managers</h3> 

<h5 style="color:#0072BC;">The<span style="font-family:avenirbold"> International Telecommunication Union</span> is the United Nations specialized agency for information and communication technologies- ICTs. </br></br>

This website helps build <span style="font-family:avenirbold">brand awareness</span> for potential members and gives ITU writers the capability to help ensure ITU remains <span style="font-family:avenirbold">relevant and important</span> to our target audience in the ICT sector.
</h5>

</div>

</div>

  <div class="row usertabrow">
    <div class="col s12">
      <ul class="tabs guidetabs">
        <li class="tab col s2"><a href="#int">Introduction</a></li>
        <li class="tab col s2"><a href="#ga">Getting Access</a></li>
        <li class="tab col s2"><a href="#ia">Inserting the Article</a></li>
       
        <!--
      <li class="tab col s2"><a href="#bp">Backup Protocol</a></li>
      <li class="tab col s2"><a href="#up">User Policy</a></li>
-->
      </ul>
    </div>
    <div id="int" class="col s12 l10">


<div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #0072BC;font-family: avenirbold;margin-top: 2em;margin-bottom: -0.05em;">Hello there ITU News Writer!</h4> 

<h5 style="color:#000000;">Lets have a look at some basic things about the ITU News setup.</h5>

</div>

</div>

<div class="row graphicrow">
<div class="col l5">
     
          <h5 class="wow appear-from-left element-animated" style="color:#000000;font-family:avenirbold;text-align:right;">What system do we have?</h5>
    <h6 class="wow appear-from-left element-animatedlonger" style="color:#000000;font-family:avenirlight;text-align:right;">Wordpress is the chosen CMS for ITU News. It has a <span style="font-family:avenirbold">large support ecosystem</span> and you may even be already familiar with much of the backend. Most processes are standard Wordpress protocol like the media library and post editing. You will become a pro ITU News writer in no time. </h6>

</div>

<div class="col l7">
     
                  <div class="device device-surface-pro">
            <div class="z-depth-3 device-frame">
              <div class="device-content wow appear-from-bottom element-animatedlongest"></div>
            </div>
            <div class="device-stripe"></div>
            <div class="device-header"></div>
            <div class="device-sensors"></div>
            <div class="device-btns"></div>
            <div class="device-power"></div>
          </div>

</div>

</div>



<div class="row graphicrow">



<div class="col l8">
     
       <div class="device device-macbook wow">
              <div class="device-frame z-depth-3">
                <div class="device-content wow appear-from-bottom element-animatedlongest"></div>
              </div>
              <div class="device-stripe"></div>
              <div class="device-header"></div>
              <div class="device-sensors"></div>
              <div class="device-btns"></div>
              <div class="device-power"></div>
            </div>    


</div>

<div class="col l4">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:left;" class="wow appear-from-left element-animated">Understanding how to insert an article</h5>
<h6 style="color:#000000;text-align:left;" class="wow appear-from-left element-animatedlonger">This section will help you get acquainted with<span style="font-family:avenirbold"> inserting an article</span>. Step by step instructions and screenshots are available to make it as simple as possible.</h6>

</div>
</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;" class="wow appear-from-left element-animated">Some new learning</h5>
<h6 style="color:#000000;text-align:right;" class="wow appear-from-left element-animatedlonger">ITU News is a completely<span style="font-family:avenirbold"> custom made site</span>. The ITU News theme has been custom developed for <span style="font-family:avenirbold">maximum design control and site speed</span>. You may have to learn a thing or two that you didnt know before. We have a few pieces of custom code that can be deployed easily by <span style="font-family:avenirbold">pressing a button</span> in the backend. Don't worry, we will go through it!</h6> 

</div>

<div class="col l7">
     <div class="device device-imac-pro wow">
              <div class="device-frame z-depth-3">
                <div class="device-content wow appear-from-bottom element-animatedlongest"></div>
              </div>
              <div class="device-stripe"></div>
              <div class="device-header"></div>
              <div class="device-sensors"></div>
              <div class="device-btns"></div>
              <div class="device-power"></div>
            </div>
          

</div>



</div>


    </div>

<div id="ga" class="col s12 l10">



<div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">Gettting your Account</h4> 

<h5 style="color:#000000;">Your <span style="font-family:avenirbold"> ITU News Account</span> should be set up by the ITU News Admin. It may have to be approved by the Head of Corp Comms. It is not possible to 'sign up or register' </h5>

</div>

</div>
<div class="row graphicrow">


<div class="col l8">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/loginto.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/loginto.JPG'; ?>">

</div>

<div class="col l4">
     
          
<h5 style="color:#000000;font-family:avenirbold;">Logging into the CMS</h5>
<h6 style="color:#000000;">Please request the ITU News Admin to create an account. Paste this link into the browser to access the editor. <span style="font-family:avenirbold">https://news.itu.int/wp-login.php</span></h6>

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


</div>
   <div id="ia" class="col s12 l10">

   <div class="row">
<div class="col s12">
     
           <h4 style="letter-spacing: -0.1vw;color: #195DA9;font-family: avenirbold;margin-top: 2em;    margin-bottom: -0.05em;">Get an article into ITU News</h4> 

<h5 style="color:#000000;">ITU News has<span style="font-family:avenirbold"> a backend editor</span> which will help you make sure your content is ready for ITU News. This is a reference guide of the most important parts. You should have a few items handy to speed this process. Article drafts may typically be written as a Microsoft Word&trade;&reg; or a Google Doc&trade;&reg; format and will need to be entered into our CMS.</h5>

</div>

</div>


   <div class="row graphicrow">
<div class="col l7">
     
          
<h5 style="color:#000000;font-family:avenirlight;text-align:right;">To start, you should get something that looks like <span style="font-family:avenirbold"> a barebone document</span>. It may be tempting to simply copy and paste everything in one go at the beginning. <span style="font-family:avenirbold">Don't do this</span>. Start splitting up your doument into unique components in your mind.</h5>

</div>

<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw1.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw1.JPG'; ?>">

</div>

</div>
       
       <div class="row graphicrow">


<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw2.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw1.JPG'; ?>">
    <img style="margin-top:2.5em;" class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw3.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw3.JPG'; ?>">

</div>

<div class="col l7">
     
<h1 style="color:#000000;font-family:avenirbold;">1</h1>          
<h5 style="color:#000000;font-family:avenirbold;">The Components</h5>
<h6 style="color:#000000;">Separate the specific elements in your head for<span style="font-family:avenirbold"> for maximum efficiency </span> and then begin to insert your article piece by piece. This will prevent <span style="font-family:avenirbold"> unnecessary deletion and mess </span> that you may have to deal with afterwards.</h6>

</div>

</div>


<div class="row graphicrow">

<div class="col l4">
     
<h1 style="color:#000000;font-family:avenirbold;text-align:right;">2</h1>          
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Add a new Post</h5>
<h6 style="color:#000000;text-align:right;">Click posts on the <span style="font-family:avenirbold"> left sidebar </span> and click on <span style="font-family:avenirbold"> Add New </span> to load a new post entry screen.</h6>

</div>
    
<div class="col l8">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw4.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw4.jpg'; ?>">

</div>



</div>



<div class="row graphicrow">

<div class="col l5">
               
<img class="z-depth-3 wow appear-from-right element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw6.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw6.JPG'; ?>">


</div>

<div class="col l5">
       <h1 style="color:#000000;font-family:avenirbold;">3</h1>          
<h5 style="color:#000000;font-family:avenirbold;">The Title</h5>
<h6 style="color:#000000;">Lets copy and paste<span style="font-family:avenirbold"> the title </span>of the file. Make sure the title does not alrerady exist and is not already in <span style="font-family:avenirbold"> uppercase </span> or another unwanted format.</h6> 


</div>

</div>

<div class="row graphicrow">

<div class="col l5">
     
                <h1 style="color:#000000;font-family:avenirbold;text-align:right;">4</h1>      
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Insert the Featured Image</h5>
<h6 style="color:#000000;text-align:right;">Use <span style="font-family:avenirbold">the Wordpress media library</span> to upload a featured image. You have to crop it to <span style="font-family:avenirbold"> 16:9 </span> as this helps ensure consistent wideformat images across the website. Hold Shift while drawing the crop box.</h6>


</div>



<div class="col l7">
     
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw10.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw10.JPG'; ?>">
    
    <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw11.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw11.JPG'; ?>">
    
    <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw12.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw12.JPG'; ?>">

</div>
    
</div>


<div class="row graphicrow">


<div class="col l5">
                      
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw13.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw13.JPG'; ?>">       
          



</div>

<div class="col l7">
<h1 style="color:#000000;font-family:avenirbold;">5</h1>      
<h5 style="color:#000000;font-family:avenirbold;">Insert the main content</h5>
<h6 style="color:#000000;">Paste <span style="font-family:avenirbold">a few paragraphs of content</span> to begin moving the content. Use the <span style="font-family:avenirbold"> visual editor </span> instead of the text editor to preserve hyperlinks.</h6>

</div>



</div>

<div class="row graphicrow">

<div class="col l5">
     
    <h1 style="color:#000000;font-family:avenirbold;text-align:right;">6</h1>      
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Insert the Author Formatting</h5>
<h6 style="color:#000000;text-align:right;">To apply our ITU News <span style="font-family:avenirbold">custom style for the author</span> , ensure you have typed 'By xxxx xxx' at the start of the article. Then hit <span style="font-family:avenirbold"> the Author Name button </span> at the top of the text editor.</h6>
      

</div>



<div class="col l7">     
          <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw14.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw14.JPG'; ?>">



</div>



</div>


<div class="row graphicrow">


<div class="col l5">
     
          
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw16.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw16.JPG'; ?>">

</div>

<div class="col l7">
     
<h1 style="color:#000000;font-family:avenirbold;">7</h1>      
<h5 style="color:#000000;font-family:avenirbold;">Insert a Divvy</h5>
<h6 style="color:#000000;">A <span style="font-family:avenirbold">Divvy </span> is a bold heading with <span style="font-family:avenirbold"> linespace before and after </span> the text you select as a Divvy. This can be used as a sub-title and better organize your paragraphs and sections. Select your tet and hit the Divvy button to insert this function.</h6>

</div>



</div>


<div class="row graphicrow">

<div class="col l5">
     <h1 style="color:#000000;font-family:avenirbold;text-align:right;">8</h1>      
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Insert a Blockquote</h5>
<h6 style="color:#000000;text-align:right;">Inserting a <span style="font-family:avenirbold">Blockquote</span> to highlight <span style="font-family:avenirbold"> important content and speech </span> is easy and you can do it by simply selecting your text and clicking on the Blockquote button in the text editor.</h6>


</div>

<div class="col l7">
      <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw17.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw17.JPG'; ?>">    


          


</div>



</div>

       <div class="row graphicrow">


<div class="col l5">
        <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw18.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw18.JPG'; ?>">    



</div>

<div class="col l7">

       <h1 style="color:#000000;font-family:avenirbold;">9</h1>      
<h5 style="color:#000000;font-family:avenirbold;">Insert custom Image</h5>
<h6 style="color:#000000;">Inserting a <span style="font-family:avenirbold">lightbox image</span> will allow you to enable users <span style="font-family:avenirbold"> to create a pop out image </span> and helps users see images that have diagrams that need to be magnified. Click on the 'Image' button after you have selected your image URL. It is important to fill the 'alt' section as this helps visually impared people understand what the image is even if they cant see it.</h6>

          


</div>



</div>
       <div class="row graphicrow">


<div class="col l5">
     <h1 style="color:#000000;font-family:avenirbold;text-align:right;">10</h1>      
<h5 style="color:#000000;font-family:avenirbold;text-align:right;">Insert an Author Box</h5>
<h6 style="color:#000000;text-align:right;">The <span style="font-family:avenirbold">Author Box</span> is a custom format for the <span style="font-family:avenirbold"> author bio and details </span> which are seen at the end of every article. Hit the Authorbox button to insert the code and use the instructions inside the </h6>


</div>

<div class="col l7">
    
<img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw19.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw19.JPG'; ?>">    

</div>



</div>
       
       <div class="row graphicrow">


<div class="col l3">
    
         <img class="z-depth-3 wow appear-from-left element-animated responsive-img materialboxed tooltipped" data-position="top" data-delay="60" data-tooltip="Click to enlarge" srcset="<?php echo get_template_directory_uri() . '/media/ugw20.JPG'; ?>" src="<?php echo get_template_directory_uri() . '/media/ugw20.JPG'; ?>">    




</div>

<div class="col l9">

           <h1 style="color:#000000;font-family:avenirbold;">11</h1>      
<h5 style="color:#000000;font-family:avenirbold;">Use the Bold Font</h5>
<h6 style="color:#000000;">We do not allow <span style="font-family:avenirbold">traditional bolding</span> of the default font- AvenirRegular. The browser draws a thick line <span style="font-family:avenirbold"> around the edge of the font </span> to bold it. This method is inconsistent across browsers. Use the 'ITU News Bold' button to make your selected text SWITCH to the official bold font- AvenirBold. This does not add line space before and after your text like a Divvy. It will just change the font.</h6>

          


</div>



</div>
       


   </div>


<!--
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
               
<h5 style="color:#000000;font-family:avenirbold;">Move between BACKUP and Staging environments</h5>
<h6 style="color:#000000;">You can move entire mirror images of the entire ITU News site in the <span style="font-family:avenirbold">Wordpress Backend</span> by using the move and copy buttons.</h6> 

</div>





</div>









   </div>
-->
<!--
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
-->



</div>



   </div>








</div>


    </div>
    
  </div>


</div>


    <!--IND: start footer -->
<?php get_footer(); ?>

