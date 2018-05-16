<?php
/*
Template Name: subscribe
*/
?>
<?php get_header(); ?>
<div class="subscribetopban" style="background:#1976D2;background:-moz-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,1));background:-webkit-linear-gradient(180deg, rgba(0,0,0,0.0), rgba(25,118,210,0));background:linear-gradient(180deg, rgba(0,0,0,0), rgba(25,118,210,1)), url('<?php echo get_template_directory_uri() . '/media/topicsback.jpeg'; ?>');background-repeat: no-repeat;background-size: cover;background-position: top;background-attachment: fixed;">
	<div class="container subscribebox">
		<div class="row">
			<div class="col l7 m12">
				<img class="responsive-img ITU_allmock appear-from-left element-animatedlonger" srcset="<?php echo get_template_directory_uri() . '/media/allmocks.png'; ?>" src="<?php echo get_template_directory_uri() . '/media/allmocks.png'; ?>">
			</div>
			<div class="col l5 m12">
				<h2 style="color:white;font-family:avenirbold;">Trends. Insight. Impact. <br>In your In-Box.</h2>
			</div>
		</div>
	</div>
</div>
<div class="container signupformcont">
	<div class="row">
		<div class="col l7">
			<h5 class="ITU_subscribesub" style="font-family:avenirlight;color:black;margin-bottom:3em;"><br> Stay current with ITU News Weekly. Sign up to receive our free roundup of how key tech and telecom industry trends impact policy and regulation – plus all the latest information on key ITU events and initiatives. <br><br>Subscribe today.</h5>
			<?php ninja_forms_display_form(  $form_id = '6' );  ?>
			<!--
			<div class="chip alertchip">
			Note: Alerts will not be sent during the month of January due to maintenance.
			<i class="close material-icons">X</i>
		</div>-->
		<div class="notifydisclaimer">
			We are committed to keeping your e-mail address confidential. We do not sell, rent, or lease our subscription lists to third parties, and we will not provide your personal information to any third party individual, government agency, or company at any time unless compelled to do so by law. We will use your e-mail address solely to provide timely ITU News Updates. ITU will maintain the information you send via e-mail in accordance with applicable law. Our site provides users the opportunity to opt-out of receiving communications from us by reading the unsubscribe instructions located at the bottom of any e-mail they receive from us at anytime. Users who no longer wish to receive our newsletter or promotional materials may opt-out of receiving these communications by clicking on the unsubscribe link in the e-mail.
		</div>
	</div>
	<div class="col l4 push-l1">
		<div class="ITU_notifempty">
		</div>
		<div class="ITU_notifyalerts z-depth-2">
			<div class="row">
				<div class="col l3">
					<img class="ITU_notifyads wow" srcset="<?php echo get_template_directory_uri() . '/media/notifyicon-01.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/notifyicon-01.svg'; ?>">
				</div>
				<div class="col l9">
					<p class="ITU_adverttitle"><span style="font-family:avenirbold;">Stay up to speed with ITU News Alerts – </span><br>Get notified by email each time ITU News publishes a new article.</p>
				</div>
			</div>
		</div>
		<div class="ITU_notifymag z-depth-2">
			<div class="row">
				<div class="col l3">
					<img class="ITU_notifyads wow" srcset="<?php echo get_template_directory_uri() . '/media/magazineicon-01.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/magazineicon-01.svg'; ?>">
				</div>
				<div class="col l9">
					<p class="ITU_adverttitle"><span style="font-family:avenirbold;">Go in-depth with ITU News Magazine - </span><br>6 editions per year, each edition giving you multiple perspectives on one key topic or event. <a href="https://www.itu.int/en/itunews/Pages/default.aspx">Learn More</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
