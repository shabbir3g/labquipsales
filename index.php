<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package labquipsales
*/
get_header(); ?>
<div id="WebSiteContent" class="GC1">
	<div id="Content" class="GC24 ContentBody">
		<div class="GC6 Breadcrumbs" ID="Breadcrumbs-D319">
			<div class="BreadcrumbsTrail">
				<nobr>
				<a href="<?php echo home_url(); ?>" title="Home ">
					<span>Home </span>
					&nbsp;&gt;&nbsp;
				</a>
				</nobr>
				<nobr><span><span><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">'.get_the_title( get_option("page_for_posts", true) ).'</a>'; ?><?php  ?></span></span></nobr>



			</div>
		</div>
		<div class="PageHTMLCodeTop" ID="PageHTMLCodeTop-D319">
		</div>
		<div id="PageContainer11" class="EqualHeight_PageContainer1">
			<div id="PageContainer1" class="EqualHeight_PageContainer1">
				<h1 class="GC17 PageTitle" ID="PageTitle-D319"><span><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">'.get_the_title( get_option("page_for_posts", true) ).'</a>'; ?><?php  ?></span></h1>
			</div>
		</div>
		<div id="ProductLoopInner">



		<?php while(have_posts()): the_post(); ?>
			<div class="GC4 Product">
				<div id="ProductImageContainer-P3578" class=" ProductImageContainer">
					<div style="position:relative;z-index:1;" class="ImgLink">
						<div id="ProductImage-P3578" class="ProductImage">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
					</div>
				</div>
				<div class="GC20 ProductPrice" id="ProductPrice-P3578"><span><?php the_title(); ?></span></div>
				<div class="GC55 ProductPriceOtherInformation">
					<span> <?php echo wp_trim_words(get_the_content(), 30, '</span>
				</div>
				<div id="ProductContainer2" class="ProductContainer2">
					<div class="GC13 sf-corner ProductMoreDetails">
						<a href="'.get_the_permalink().'" >Read More</a>'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			
			
			
		</div>
	</div>
</div>

<?php get_footer();