<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
<?php include('navigation.php'); ?>

<!-- Hero -->
<div class="wrapper">
   <div class="wrapper-content">
      <section>
         <div class="grid-2col">
            <div class="full"></div>

            <div class="full specials-container">
            <!-- Specials -->
               <div class="full">
                  <?php query_posts('category_name=specials,limit-1');?>
                  <?php if (have_posts()) : ?>
                  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                  <?php } ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <!-- Menu Item Archive -->
                  <div class="full"<?php post_class() ?>>
                     <div class="full">
                        <p class="full specials-item-dates mar10-bot"><?php the_title(); ?></p>
                     </div>
                     <div class="full specials-item-description"><?php the_content(); ?></div>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <h2>Nothing found</h2>
                  <?php endif; ?> 
               </div><!-- END: Specials -->
            </div>
      </section>
   </div>
</div><!-- END: Hero -->

<div class="wrapper">
   <div class="wrapper-content">
   <!-- Menu wrapper -->
      <section class="menu-wrapper mar30-bot">
         <section class=" grid-3col ggap-20">
            <div class="full">
            <!-- Appetizers -->
               <div class="menu-section mar20-bot">
                  <div class="full menu-header"><p>Appetizers</p></div>
                  <div class="full menu-item-list-container">
                     <?php query_posts('category_name=appetizers');?>
                     <?php if (have_posts()) : ?>
                     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                     <?php /* If this is a category archive */ if (is_category()) { ?>
                     <?php } ?>
                     <?php while (have_posts()) : the_post(); ?>
                     <!-- Menu Item Archive -->
                     <div class="full menu-item"<?php post_class() ?>>
                        <div class="menu-item-name-container">
                           <p class="full menu-item-name"><?php the_title(); ?></p>
                        </div>
                        <div class="menu-item-description-container">
                           <?php the_content(); ?>
                        </div>
                     </div><!-- END: Menu Item Archive -->
                     <?php endwhile; ?>
                     <?php else : ?>
                     <h2>Nothing found</h2>
                     <?php endif; ?> 
                  </div>
               </div><!-- END: Appetizers -->

            <!-- Salads -->
               <div class="menu-section mar20-bot">
                  <div class="full menu-header"><p>Salads</p></div>
                  <div class="full menu-item-list-container">
                     <?php query_posts('category_name=salads');?>
                     <?php if (have_posts()) : ?>
                     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                     <?php /* If this is a category archive */ if (is_category()) { ?>
                     <?php } ?>
                     <?php while (have_posts()) : the_post(); ?>
                     <!-- Menu Item Archive -->
                     <div class="full menu-item"<?php post_class() ?>>
                        <div class="menu-item-name-container">
                           <p class="full menu-item-name"><?php the_title(); ?></p>
                        </div>
                        <div class="menu-item-description-container">
                           <?php the_content(); ?>
                        </div>
                     </div><!-- END: Menu Item Archive -->
                     <?php endwhile; ?>
                     <?php else : ?>
                     <h2>Nothing found</h2>
                     <?php endif; ?> 
                  </div>
               </div><!-- END: Salads -->

            <!-- Soups -->
               <div class="menu-section">
                  <div class="full menu-header"><p>Soups</p></div>
                  <div class="full menu-item-list-container">
                     <?php query_posts('category_name=soups');?>
                     <?php if (have_posts()) : ?>
                     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                     <?php /* If this is a category archive */ if (is_category()) { ?>
                     <?php } ?>
                     <?php while (have_posts()) : the_post(); ?>
                     <!-- Menu Item Archive -->
                     <div class="full menu-item"<?php post_class() ?>>
                        <div class="menu-item-name-container">
                           <p class="full menu-item-name"><?php the_title(); ?></p>
                        </div>
                        <div class="menu-item-description-container">
                           <?php the_content(); ?>
                        </div>
                     </div><!-- END: Menu Item Archive -->
                     <?php endwhile; ?>
                     <?php else : ?>
                     <h2>Nothing found</h2>
                     <?php endif; ?> 
                  </div>
               </div><!-- END: Soups -->
            </div>
         
         <div class="full">
         <!-- Sandwiches -->
            <div class="menu-section mar20-bot">
               <div class="full menu-header"><p>Sandwiches</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                        Served with choice of Fries, Tots, or Asian Slaw.
                        <br/>
                        <span class="text-bold text-gold">Sub Side Salad or Cup of Soup for +$1.50</span>, <span class="text-bold text-gold">Cup of Vegan chili for +$2</span></p>
                  </div>
                  <?php query_posts('category_name=sandwiches');?>
                  <?php if (have_posts()) : ?>
                  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                  <?php } ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <!-- Menu Item Archive -->
                  <div class="full menu-item"<?php post_class() ?>>
                     <div class="menu-item-name-container">
                        <p class="full menu-item-name"><?php the_title(); ?></p>
                     </div>
                     <div class="menu-item-description-container">
                        <?php the_content(); ?>
                     </div>
                  </div><!-- END: Menu Item Archive -->
                  <?php endwhile; ?>
                  <?php else : ?>
                  <h2>Nothing found</h2>
                  <?php endif; ?> 
               </div>
            </div><!-- END: Sandwiches -->

         <!-- Pizza -->
            <div class="menu-section">
               <div class="full menu-header"><p>Pizza</p></div>
               <div class="full menu-item-list-container">
                  <?php query_posts('category_name=pizza');?>
                  <?php if (have_posts()) : ?>
                  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                  <?php } ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <!-- Menu Item Archive -->
                  <div class="full menu-item"<?php post_class() ?>>
                     <div class="menu-item-name-container">
                        <p class="full menu-item-name"><?php the_title(); ?></p>
                     </div>
                     <div class="menu-item-description-container">
                        <?php the_content(); ?>
                     </div>
                  </div><!-- END: Menu Item Archive -->
                  <?php endwhile; ?>
                  <?php else : ?>
                  <h2>Nothing found</h2>
                  <?php endif; ?> 
               </div>
            </div><!-- END: Pizza -->
         </div>
         
         <div class="full">
         <!-- Burgers -->
            <div class="menu-section mar20-bot">
               <div class="full menu-header"><p>Burgers</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                        Served with choice of Fries, Tots, or Asian Slaw.
                        <br/>
                        <span class="text-bold text-gold">Sub Side Salad or Cup of Soup for +$1.50</span>, <span class="text-bold text-gold">Cup of Vegan chili for +$2</span>
                     </p>
                  </div>
                  <?php query_posts('category_name=burgers');?>
                  <?php if (have_posts()) : ?>
                  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                  <?php } ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <!-- Menu Item Archive -->
                  <div class="full menu-item"<?php post_class() ?>>
                     <div class="menu-item-name-container">
                        <p class="full menu-item-name"><?php the_title(); ?></p>
                     </div>
                     <div class="menu-item-description-container">
                        <?php the_content(); ?>
                     </div>
                  </div><!-- END: Menu Item Archive -->
                  <?php endwhile; ?>
                  <?php else : ?>
                  <h2>Nothing found</h2>
                  <?php endif; ?> 
               </div>
            </div><!-- END: Burgers -->
         <!-- Kids -->
            <div class="menu-section mar20-bot">
               <div class="full menu-header"><p>Kids</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                        For ages 12 and under; choice of fries, mandarin oranges, steamed broccoli, or carrot sticks.</p>
                  </div>
                  <?php query_posts('category_name=kids');?>
                  <?php if (have_posts()) : ?>
                  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                  <?php /* If this is a category archive */ if (is_category()) { ?>
                  <?php } ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <!-- Menu Item Archive -->
                  <div class="full menu-item"<?php post_class() ?>>
                     <div class="menu-item-name-container">
                        <p class="full menu-item-name"><?php the_title(); ?></p>
                     </div>
                     <div class="menu-item-description-container">
                        <?php the_content(); ?>
                     </div>
                  </div><!-- END: Menu Item Archive -->
                  <?php endwhile; ?>
                  <?php else : ?>
                  <h2>Nothing found</h2>
                  <?php endif; ?> 
               </div>
            </div><!-- END: Kids -->
         </div>

         </section>

         <section>
         <!-- Disclaimer -->
            <div class="full pad20">
               <p class="text-disclaimer text-gold text small text-center">
               Animal foods that are ordered rare or medium rare may be undercooked and will be only served on consumer's request. Whether dining out or preparing food at home, consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness. Written information upon request.
               </p>
            </div>
         </section>
      </section><!-- END: Menu wrapper -->
   </div>
</div>



<?php get_footer(); ?>
