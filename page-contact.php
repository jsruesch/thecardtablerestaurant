<?php
/*
 Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php include('navigation.php'); ?>

<!-- Hero -->
<div class="wrapper pad60-bot">
   <div class="wrapper-content">

      <section>
         <div class="full pad30 mar30-top bg-ddred">
         <!-- Specials -->
            <div class="full">
               <?php if (have_posts()) : ?>
               <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
               <?php /* If this is a category archive */ if (is_category()) { ?>
               <?php } ?>
               <?php while (have_posts()) : the_post(); ?>
               <!-- Menu Item Archive -->
               <div class="full"<?php post_class() ?>>
                  
                  <?php the_content(); ?>

               <?php endwhile; ?>
               <?php else : ?>
               <h2>Nothing found</h2>
               <?php endif; ?> 
            </div><!-- END: Appetizers -->
         </div>

      </section>
   </div>
</div><!-- END: Hero -->


<?php get_footer(); ?>
