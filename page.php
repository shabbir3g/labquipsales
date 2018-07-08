<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labquipsales
 */

get_header(); ?>

	<div id="WebSiteContent" class="GC1">
	<div id="Content" class="GC24 ContentBody">


		<?php if(!is_front_page()): ?>

		<div class="GC6 Breadcrumbs" ID="Breadcrumbs-D319">
			<div class="BreadcrumbsTrail">
				<nobr>
				<a href="<?php echo home_url(); ?>" title="Home ">
					<span>Home </span>
					&nbsp;&gt;&nbsp;
				</a>
				</nobr>

				<?php while(have_posts()): the_post(); ?>
					<nobr><span><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></span></nobr>
				<?php endwhile; ?>



			</div>
		</div>
		<div class="PageHTMLCodeTop" ID="PageHTMLCodeTop-D319">
		</div>
		<div id="PageContainer11" class="EqualHeight_PageContainer1">
			<div id="PageContainer1" class="EqualHeight_PageContainer1">
				<h1 class="GC17 PageTitle" ID="PageTitle-D319">
					<span>
						<?php while(have_posts()): the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php endwhile; ?>
						

					</span>
				</h1>
			</div>
		</div> 

		<?php else: ?>

			<div class="Banner" ID="Banner-D-2">
				<div class="gallery-box">

				<?php 

				$slideraaa = new WP_Query([
					'post_type'				=> 'home-slider',
					'posts_per_page'		=> -1,
					'order'					=> 'asc',
				]);



				while($slideraaa->have_posts()): $slideraaa->the_post(); ?>
					<div class="GC14 BannerBox">
						
						<a class="BannerImage">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
				<?php endwhile; ?>
					

				</div>
				<div class="gallery-buttons"></div>
			</div>


		<?php endif; ?>

		<div id="ProductLoopInner">



		<?php while(have_posts()): the_post(); ?>
			

			<?php the_content(); ?>


		<?php endwhile; ?>
			
			
			
		</div>
	</div>
</div>
	

<?php get_footer();
