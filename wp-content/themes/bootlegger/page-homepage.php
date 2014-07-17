<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
				<div id="main" role="main">
					<div class="row featured">
						<div class="container">
							<div class="col-sm-3">
								<h3>Top Bats</h3>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/bat_ex.jpg">
							</div>
							<div class="col-sm-3">
								<h3>Top Gloves</h3>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/glove_ex.jpg">
							</div>
							<div class="col-sm-3">
								<h3>Top Shoes</h3>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/shoes_ex.jpg">
							</div>
							<div class="col-sm-3">
								<h3>Catcher's Gear</h3>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/07/catcher_ex.jpg">
							</div>
						</div>
					</div>
					<div class="row cta">
						<div class="container">
							<div class="col-sm-4">
								<h2>Featured Product</h2>
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
							<div class="col-sm-4">
								<h2>Sign Up For Savings</h2>
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
							<div class="col-sm-4">
								<h2>On Sale</h2>
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php endwhile; ?>	
							
							<?php else : ?>
							
							<article id="post-not-found">
							    <header>
							    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
							    </header>
							    <section class="post_content">
							    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
							    </section>
							    <footer>
							    </footer>
							</article>
							
							<?php endif; ?>
						</div><!-- end .container -->
					</div><!-- end .row -->

				</div> <!-- end #main -->
    
				
    

<?php get_footer(); ?>