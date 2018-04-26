<?php
/* Template Name: About us */
get_header();
?>
<section id="it" class="container-fluid">
		<div class="container">
			<div class="row justify-content-center">
				<?php echo do_shortcode('[postCompetences]'); ?>
			</div>
		</div>
	</section>
	<section id="team" class="container-fluid">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
					<p class="toptitle"><?php if(get_field('1')): the_field('1'); endif; ?></p>
					<h2><?php if(get_field('2')): the_field('2'); endif; ?></h2>
					<p class="bottitle"><?php if(get_field('3')): the_field('3'); endif;?></p>
				</div>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="row justify-content-center">
				<?php echo do_shortcode('[postTeam]'); ?>
			</div>
		</div>
	</section>
	<section id="services" class="container-fluid">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
					<p class="toptitle"><?php if(get_field('4')): the_field('4'); endif; ?></p>
					<h2><?php if(get_field('5')): the_field('5'); endif; ?></h2>
					<p class="bottitle"><?php if(get_field('6')): the_field('6'); endif; ?></p>
				</div>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="row branding justify-content-center">
				<?php echo do_shortcode('[postServices]'); ?>
			</div>
		</div>
	</section>
	<section class="features">
 <div class="container">
   <div class="title">
     <p class="grey"><?php if(get_field('7')): the_field('7'); endif; ?></p>
     <h2 class="text-uppercase black"><?php if(get_field('8')): the_field('8'); endif; ?></h2>
   </div>
   <div class="more-details row justify-content-end">
    <hr />
       <a href="<?php if(get_field('12')): the_field('12'); endif; ?>"><button style="background-color: <?php if(get_field('10')): the_field('10'); endif; ?>" class="text-uppercase"><?php if(get_field('9')): the_field('9'); endif; ?></button></a>
  </div>
  <p class="grey"><?php if(get_field('11')): the_field('11'); endif; ?></p>
</div>
</section>
<?php
get_footer();
?>

