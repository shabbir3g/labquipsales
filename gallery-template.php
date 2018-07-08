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
* Template Name: Gallery Template
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
		<div id="PageContainer11" class="EqualHeight_PageContainer1">
			<!-- Page elements are kept in this div so the if statement above may
			make room for PageLinkBox -->
			<div id="PageContainer1" class="EqualHeight_PageContainer1">
				<div id="idxSubpageNavigation" style="width: auto;">
					<div class="idx2Submenu" data-toplevelid="d-33">
						<ul>
							
							<?php $gallery = get_field('gallery');

							if($gallery): 
							foreach($gallery as $gal):   ?>
								<li class="GC34 idx2Sub">
									<a id="idx2SubD273" class="idx2Sub SubPageNavigationBox" href="<?php echo  $gal['gallery_link']['url']; ?>" title="something">
										<div class="SubPageNavigationImageContainer">
											<img src="<?php echo  $gal['gallery_image']['url']; ?>" id="ID273" name="ID273" alt="" title=""  width="200" height="78" border="0" />
										</div>
										<div class="SubPageNavigationTitleContainer" style="height: 25px;">
											<span class="SubPageNavigationTitle"><?php echo  $gal['gallery_link']['title']; ?></span>
										</div>
									</a>
								</li>
							<?php endforeach; endif; ?>
					
							
						</ul>
					</div>
				</div>
			
			<?php 

			$page_id     = get_queried_object_id();

			$gallery_bottom_image = get_field('gallery_bottom_image', $page_id);

			if($gallery_bottom_image): ?>
			<table class="PageImage" width="1" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td>
							<div id="PageImage-D1">
								<img src="<?php echo $gallery_bottom_image['url']  ?>" class="DataEchoLoaded responsive" id="ID1" name="ID1" alt="filter logo" title="filter logo" onmouseover="window.status='filter logo';return true;" onmouseout="window.status='';return true" style="display: inline;" width="300" vspace="0" hspace="0" height="166" border="0" align="">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<?php endif; ?>




			<div class="GC19 PageDescription" id="PageDescription-D1" style="color: rgb(36, 36, 36);">

				<?php $bottom_content = get_field('bottom_content');

				if($bottom_content): 
				echo  $bottom_content;

				endif;  ?>


			



			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();