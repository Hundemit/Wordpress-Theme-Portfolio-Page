<a <?php post_class(" projectCard hover:-translate-y-2 hover:scale-105 hover:last:text-dark duration-200 rounded-xl"); ?>
    href="<?php the_permalink(); ?>">
    <img src="<?php get_first_image(get_the_ID()) ?>" alt=""
        class="w-[340px] h-[180px] sm:h-[220px] rounded-xl object-cover duration-700" />
    <h1 class="text-white font-bold"><?php the_title(); ?></h1>
</a>