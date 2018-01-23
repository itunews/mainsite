<?php
/*
Template Name: 2018Card
*/
?>

<?php get_header(); ?>
<style>

#snow{
	background: none;
	font-family: Androgyne;
	background-image: url('https://www.wearewebstars.dk/codepen/img/s1.png'), url('https://www.wearewebstars.dk/codepen/img//s2.png'), url('https://www.wearewebstars.dk/codepen/img//s3.png');
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index:-1;
	-webkit-animation: snow 10s linear infinite;
	-moz-animation: snow 10s linear infinite;
	-ms-animation: snow 10s linear infinite;
	animation: snow 10s linear infinite;
}
@keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-moz-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 400px 1000px, 200px 400px, 100px 300px;}
}
@-webkit-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-ms-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
    
    .greetingbig{
background-image: url(<?php the_field('background_image'); ?>);


}
    
</style>

<div class="greetingbig">
    <div id="snow">
</div>
  
    <div class="container">
        
            <div class="row">
    <div class="col l6">
    <h1 style="font-family:avenirlight;color:white"><?php the_field('first_text'); ?><?php the_field('second_text'); ?></h1>
        
    </div>
    </div>
        
<div class="row">
    <div class="col l8">
      <video class="responsive-video z-depth-5" controls poster="<?php the_field('greeting_pic'); ?>">
    <source src="<?php the_field('greeting_video'); ?>" type="video/mp4">
  </video>
        
          
        
    </div>


    
    </div>
    

        
        <div class="row">
             <div class="col l4">
    </div>
        </div>
    

    
    </div>
</div>

<?php get_footer(); ?>
