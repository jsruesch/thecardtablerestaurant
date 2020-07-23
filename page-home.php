<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
<?php include('navigation.php'); ?>

<!-- Hero -->
<div class="wrapper hero-image-container hero-image-02 grid-vertical-align-content">
      <div class="wrapper-content">
         <section>
            <div class="grid-2col">
               <div class="full"></div>
               <div class="full pad60">
               <!-- Specials -->
                  <div class="full">
                     <?php
                     // the query
                     $the_query = new WP_Query(array(
                           'category_name' => 'specials',
                           'post_status' => 'publish',
                           'posts_per_page' => 1,
                     ));
                     ?>
                     <?php if ($the_query->have_posts()) : ?>
                           <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                           <div class="full"<?php post_class() ?>>
                        <div class="full">
                           <p class="full specials-item-dates mar10-bot"><?php the_title(); ?></p>
                        </div>
                        <div class="full specials-item-description"><?php the_content(); ?></div>
                           <?php endwhile; ?>
                     <?php else : ?>
                           <p><?php __('No News'); ?></p>
                     <?php endif; ?>
                     </div><!-- END: Appetizers -->
                  </div>
               </section>
               </div><!-- Close .wrapper-content -->
            </div><!-- END: Slide 01 -->
         </div>
      </div><!-- END: Hero -->

<!-- Alert -->
<section class="alert">
   <div class="wrapper bg-mred">
      <div class="wrapper-content pad10-top pad20-bot">
         <p class="text-white text-exbold text-center">The Card Table is excited to be open for business! We welcome customers to join us for dine-in and carry-out service</p>
         <p class="text-white text-center text-disclaimer">We value the health and well-being of our customers, staff, and community, and we are taking precautions to keep everyone safe.  Our inside seating is open at 25% capacity, and our beautiful outdoor patio is open with all tables at least 6 feet apart to encourage social distancing.  We are following the recommendations from the Wisconsin Economic Development Corporation and the Public Health Madison & Dane County related to social distancing, employee monitoring, and cleaning and sanitizing.  We want our customers to have an enjoyable and safe experience at The Card Table!</p>
      </div>
   </div>
</section>

<div class="wrapper">
   <div class="wrapper-content">
      <!-- Menu Links -->
      <div class="full mar20-bot">
            <p class="text-bold text-gold text-center">
            <span class="text-white">MENU </span>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#appetizers" class="text-bold text-gold mar5-right">Starters</a>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#salads" class="text-bold text-gold mar5-right">Salads</a>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#soups" class="text-bold text-gold mar5-right">Soups</a>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#sandwiches" class="text-bold text-gold mar5-right">Sandwiches</a>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#burgers" class="text-bold text-gold mar5-right">Burgers</a>
            <!-- <span class="text-bold text-mred">&#8226;</span>
            <a href="#pizza" class="text-bold text-gold mar5-right">Pizza</a> -->
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#drinks" class="text-bold text-gold mar5-right">Drinks</a>
            <span class="text-bold text-mred">&#8226;</span>
            <a href="#kids" class="text-bold text-gold mar5-right">Kids</a>
         </p>
      </div><!-- END: Menu Links -->
   <!-- Menu wrapper -->
      <section class="menu-wrapper mar30-bot">
         <section class=" grid-3col ggap-20">
            <div class="full">
            <!-- Appetizers -->
               <div id="appetizers" class="menu-section mar20-bot">
                  <div class="full menu-header"><p>Starters</p></div>
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
               <div id="salads" class="menu-section mar20-bot">
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
            </div>
         
         <div class="full">
         <!-- Sandwiches -->
            <div id="sandwiches" class="menu-section mar20-bot">
               <div class="full menu-header"><p>Sandwiches</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                        Served with choice of fries, tots, or Asian slaw.
                        <br/>
                        <span class="text-bold text-gold">Sub side salad or cup of soup for +$1.50. Sub onion rings or cheese curds for +$3. Sub a veggie patty on any burger (no additional charge).</span></p>
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


         <!-- Drinks -->
            <div id="drinks" class="menu-section mar20-bot">
                  <div class="full menu-header"><p>Drinks</p></div>
                  <div class="full menu-item-list-container">
                     <?php query_posts('category_name=drinks');?>
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
               </div><!-- END: Drinks -->
         </div>
         
         <div class="full">
         <!-- Burgers -->
            <div id="burgers" class="menu-section mar20-bot">
               <div class="full menu-header"><p>Burgers</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                     Served with choice of fries, tots, or Asian slaw.
                        <br/>
                        <span class="text-bold text-gold">Sub side salad or cup of soup for +$1.50. Sub onion rings or cheese curds for +$3. Sub a veggie patty on any burger (no additional charge).</span>
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
            <div id="kids" class="menu-section mar20-bot">
               <div class="full menu-header"><p>Kids</p></div>
               <div class="full menu-item-list-container">
                  <div class="full">
                     <p class="text-disclaimer text-white mar20-bot">
                        For ages 11 and under. <span class="text-bold text-gold">Choice of fries, tots, or carrot sticks.</span></p>
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

            <!-- Soups -->
            <div id="soups" class="menu-section">
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

         </section>

         <section>
         <!-- Disclaimer -->
            <div class="full pad20">
               <p class="text-disclaimer text-gold text small text-center">
               *Animal foods that are ordered rare or medium rare may be undercooked and will be only served on consumer's request. Whether dining out or preparing food at home, consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness. Written information upon request.
               </p>
            </div>
         </section>
      </section><!-- END: Menu wrapper -->
   </div>
</div>



<?php get_footer(); ?>
