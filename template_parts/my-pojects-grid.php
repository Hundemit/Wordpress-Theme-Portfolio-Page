 <div id="Projects" class="pt-32 duration-700">
     <div class="fadeInAnimationJs">
         <!-- Überschrift -->
         <div class="mx-auto w-fit mb-3 o">
             <span class="w-fit">
                 <span class="titleFont text-4xl sm:text-6xl underlineIndi">Meine Projekte.</span>
                 <!-- <div class="w-full bg-darkContainer rounded-sm einsTextUnderline"></div> -->
             </span>
         </div> <?php
    $args = array(
      'post_type' => 'post',
      'order' => 'DESC',
      'orderby' => 'date'
    );

    $query = new WP_Query($args);
    ?> <?php if ($query->have_posts()) : ?> <div
             class="mx-auto w-fit grid mt-12 sm:mt-24 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-y-5 gap-x-16">
             <?php while ($query->have_posts()) : $query->the_post(); ?>
             <?php get_template_part('template_parts/content'); ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?>
         </div> <?php else : ?> <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?>
     </div>
 </div>