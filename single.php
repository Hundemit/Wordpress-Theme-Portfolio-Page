<?php get_header('page'); ?> <article id="post-<?php the_ID(); ?>" <?php post_class("container max-w-[768px] mx-auto pt-24 sm:pt-[15vh] "); ?>
    <!-- Title Screen -->
    <section>
        <!-- IMG -->
        <img src="<?php get_first_image(get_the_ID()) ?>" alt=""
            class="w-full h-full max-h-[200px] sm:max-h-[350px] rounded-lg mb-10 shadow-2xl shadow-darkLight object-cover" />
        <!-- Überschrift -->
        <div class="w-fit mb-5 sm:mt-12">
            <span
                class="sm:leading-[4rem] leading-[3.2rem] underlineIndi dark:text-darkText text-lightText text-4xl sm:text-6xl titleFont px-2">
                <?php the_title(); ?>
        </div>
        <!-- Text -->
        <p class="text-white font-medium opacity-80 text-xl mx-auto"> <?php get_first_text_paragraph(get_the_ID()); ?>
        </p>
        <!-- Author -->
        <div class="flex justify-between mt-5"> 
        	<div class="flex gap-4">
            <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/aboutMe/meCrop.png" alt=""
                class="w-[50px] rounded hover:rotate-12 duration-700" />
            <div>
                <p class="text-white text-base font-bold">Jan Hindemit</p>
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"
                    class="text-white text-sm opacity-80 font-medium"><?php echo get_the_date(); ?></time>
            </div>
        	</div>
         <?php
							if (is_exists_link_button(get_the_ID())) {
    					echo ' <a class="flex gap-2 bg-darkContainer rounded-xl px-10 items-center duration-200 hover:-translate-y-2" target="_blanket" href="' . get_link_from_button(get_the_ID()) . '" >
          		<p class="text-white text-base font-bold">Link</p>
          		<img class="h-[15px]" src="' . get_bloginfo('template_url') . '/Assests/picture/logo/ArrowUpRifght.png" alt="" />
          		</a>';
							}
							?>

         
          
          
         
          
          
        </div>
    </section>
    <!-- BLOG TEXT -->
    <section id="blogText" class="mt-[24vh] font-medium"> <?php

    get_blog_text(get_the_ID());

    ?> </section>
</article> <?php get_footer(); ?>