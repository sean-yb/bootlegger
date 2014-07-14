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
								<h2>Top </h2>
							</div>
							<div class="col-sm-3">
								<h2>Top </h2>
							</div>
							<div class="col-sm-3">
								<h2>Top </h2>
							</div>
							<div class="col-sm-3">
								<h2>Top </h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-sm-4">
								<h1>Featured Product</h1>
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
							<div class="col-sm-4">
								<h1>Sign Up For Savings</h1>
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
							<div class="col-sm-4">
								<h1>On Sale</h1>
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