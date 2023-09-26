<?php
/*
Template Name: Custom Gallery
*/
?> <!-- Hier den HTML-Code für die eigene Galerie einfügen -->
<div id="controls-carousel" class="relative w-full h-44 sm:h-72 !mt-0 md:h-80 lg:h-96 duration-700 mb-5" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-full rounded-lg !mt-0"> <?php foreach ($image_sources as $image_src) { ?>
            <!-- Item PIC -->
            <div class="hidden duration-700 ease-in-out !mt-0" data-carousel-item>
                <img src="<?php echo $image_src; ?>"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div> <?php } ?>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class=" animate-pulse absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                </path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="animate-pulse absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<!-- Ende des HTML-Codes für die eigene Galerie -->