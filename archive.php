<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
<div class="container-fluid mar20-top mar20-bot pad30-left pad30-right">
  <div class="container pad10-left pad10-right">
	<div class="row pad20-top pad20-bot">

		<?php if (have_posts()) : ?>
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1 class="pagetitle text-green pad20-bot">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1 class="pagetitle text-green pad20-bot">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1 class="pagetitle text-green pad20-bot">Archive for <?php the_time('F jS, Y'); ?></h1>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1 class="pagetitle text-green pad20-bot">Archive for <?php the_time('F, Y'); ?></h1>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle text-green pad20-bot">Archive for <?php the_time('Y'); ?></h1>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle text-green pad20-bot"><span class="text-white">Author</span> Archive</h1>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle text-green pad20-bot"><span class="text-white">Blog</span> Archives</h1>
			<?php } ?>

			<div class="row pad20-left pad20-right bg-white">
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?>>
						<div  class="pad15-top pad15-bot">
							<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div class="entry">
								<?php the_content(); ?>
							</div>
						</div><!-- /.pad15 -->
					</div>
				<?php endwhile; ?>
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			<?php else : ?>
				<h2>Nothing found</h2>
			<?php endif; ?>
		</div><!-- /.bg-white -->
	</div>
</div>
</div>

<?php get_footer(); ?>
