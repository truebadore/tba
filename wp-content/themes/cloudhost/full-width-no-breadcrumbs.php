<?php
/**
 * Full Content Template
 *
   Template Name:  Full Width No Breadcrumbs
 *
 */
?>
<?php get_header(); ?>
		<div id="banner" class="secondary-page">
		<div class="container">
		<div class="row">
		<div class="col-lg-12 header-top">
		<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
    	
    	</header> <!-- end article header -->
		</div></div></div></div>	
		<div class="container">
		<div class="row">
		<div class="col-lg-12" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
							</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

</div>
			</div> <!-- end .container -->

<?php get_footer(); ?>
