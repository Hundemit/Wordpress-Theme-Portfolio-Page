<?php get_header(); ?>
<div id="firstPage"
    class=" mx-auto h-[90vh] sm:h-[98vh] max-w-screen-xl container justify-center lg:justify-between flex flex-col gap-5 lg:flex-row items-start lg:items-center duration-700 min-h-[590px] lg:min-h-[580px] sm:min-h-[890px] relative">
  <!-- einsTextContainer -->
    <div id="einsTextContainer" class="flex flex-col gap-5 sm:gap-7">
        <div data-animation="slide-in-up"
            class="fadeInAnimationJs dark:text-darkText text-lightText  flex flex-col gap-2 sm:gap-4 duration-200 text-[27px] sm:text-5xl 2xl:text-6xl">
            <span class="w-fit">
                <p class="titleFont einsText">Hey!</p>
                <div class="w-full bg-darkContainer rounded-sm einsTextUnderline"></div>
            </span>
            <span class="w-fit">
                <p class="titleFont einsText">Ich bin Jan, ein</p>
                <div class="w-full bg-darkContainer rounded-sm einsTextUnderline"></div>
            </span>
            <span class="w-fit">
                <div id="einsTextChanger" class="overflow-hidden h-[3rem] sm:h-[5rem]">
                    <div id="einsTextChangerContainer" class="flex gap-1">
                        <div id="sven" class="content__container__list flex flex-col">
                            <div class="w-fit content__container__list__item titleFont ">
                                <p class="titleFont text-color1 einsText text-[27px] sm:text-5xl 2xl:text-6xl"> UI/UX
                                    Designer.</p>
                                <div class="w-full bg-color1 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                            <div class="w-fit content__container__list__item ">
                                <p
                                    class="tanker tracking-widest text-color2 einsText text-[27px] sm:text-5xl 2xl:text-6xl">
                                    Teamplayer! </p>
                                <div class="w-full bg-color2 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                            <div class="w-fit content__container__list__item">
                                <p class="jetBrinsMono text-color4 einsText text-[27px] sm:text-5xl 2xl:text-6xl">
                                    Software Engineer;</p>
                                <div class="w-full bg-color4 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                            <div class="w-fit content__container__list__item">
                                <p class="generalSans text-[#E2BC98] font-black einsText text-[27px] sm:text-5xl 2xl:text-6xl"> Problemlöser.
                                </p>
                                <div class="w-full bg-[#E2BC98] opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                            <div class="w-fit content__container__list__item ">
                                <p class="longBeach text-color3 einsText text-[27px] sm:text-5xl 2xl:text-6xl">
                                    Freelancer!</p>
                                <div class="w-full bg-color3 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
        <p data-animation="slide-in-right"
            class="fadeInAnimationJs text-sm lg:text-lg font-medium max-w-[500px] duration-700"> Ich liebe es, kreative
            Ideen in coole, benutzerfreundliche Software zu verwandeln und arbeite dabei gerne im Team, um gemeinsam
            Großartiges zu schaffen. </p>
        
      <!-- Button -->
      <a href="#EmailMe"
            class="einsTextButton h-12 duration-700 w-full lg:w-fit absolute lg:static bottom-5 left-0 hover:scale-105 duration-700 md:px-0 lg:px-0">
            <div id="svenZwei"
                class="w-full h-full rounded-md   duration-700 flex justify-center items-center">
                <p class="text-dark font-medium px-10">Kontaktiere mich.</p>
            </div>
        </a>
      
     

    </div>
    <!-- IMG -->
    <div id="controls-carousel" data-animation="scale-in"
        class="fadeInAnimationJs relative lg:aspect-square aspect-auto w-full lg:w-auto h-48  sm:h-96 lg:max-w-[650px] duration-700 mx-auto lg:mx-0"
        data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-full rounded-xl lg:rounded-[52px]">
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://janhindemit.de/wp-content/uploads/2024/09/MEBLACK.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
               <img src="https://janhindemit.de/wp-content/uploads/2024/09/bester-balck.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div>
           
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="animate-pulse absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none	"
            data-carousel-prev>
            <span
                class="opacity-20	 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                class=" opacity-20	inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<div id="Projects" class=" mt-16 pt-32 sm:mt-54 sm:pt-24 duration-700">
    <div class="">
        <!-- Überschrift -->
        <div data-animation="slide-in-shrink" class="fadeInAnimationJs mx-auto w-fit mb-3 o">
            <span class="w-fit">
                <span class="titleFont  text-4xl sm:text-6xl underlineIndi">Meine Projekte.</span>
                <!-- <div class="w-full bg-darkContainer rounded-sm einsTextUnderline">
            </div> -->
            </span>
        </div>
        <!-- Grids --> <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );
        query_posts($args);
        ?>
        <div data-animation="slide-in-down"
            class="fadeInAnimationJs mx-auto w-fit grid mt-12 sm:mt-24 lg:grid-cols-2 xl:grid-cols-3  gap-y-5 gap-x-16 "> <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>         <?php get_template_part('template_parts/content'); ?>     <?php endwhile;
            else: ?>     <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?> </div>
        <div class="flex flex-col justify-center content-center sm:flex-row gap-8 mt-12 mx-auto w-fit">
            <a href="<?php echo get_permalink(get_page_by_path('myprojects')); ?>"
                class="h-12  w-fit bg-lightButton   hover:bg-darkLight flex gap-2 justify-center items-center duration-700 rounded-md px-4  ">
                <p class="text-lg font-medium"> Noch mehr Projekte. →</p>
            </a>
            <a href="https://hundemit.github.io/" target="_blank"
                class=" mx-auto w-fit duration-700 animate-rotate h-12 text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30  ">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-lg font-medium"> Github Page</p>
            </a>
        </div>
    </div>
</div>
<!-- <div id="Consulting" class="mt-16 pt-32 sm:mt-64 sm:pt-32 duration-700">
    <div class="">
       
        <div
            data-animation="slide-in-shrink"
         class="fadeInAnimationJs mx-auto w-fit mb-3">
            <span
                class="sm:leading-[4rem] leading-[3.2rem] underlineIndi dark:text-darkText text-lightText text-4xl sm:text-6xl titleFont lg:text-center px-2 mx-auto">
                Dein Projekt zum Erfolg führen. </span>
        </div>
        <div class="container flex flex-col xl:flex-row gap-8 mx-auto mt-12 sm:mt-24">
            <div
            data-animation="scale-in"
                class="fadeInAnimationJs rounded-xl dark:bg-darkContainer bg-lightContainer w-full flex gap-1 flex-col p-5 sm:p-8 max-w-[700px] mx-auto">
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/mainPage/Emoji/Key.png" alt=""
                    class="max-w-[108px] ml-auto " />
                <div class="flex flex-col gap-4">
                    <span class="w-fit">
                        <h1 class="titleFont text-2xl leading-4  sm:text-4xl sm:leading-7">Zuverlässigkeit.</h1>
                        <div class="w-full bg-light opacity-20 rounded-sm h-2 sm:h-[14px]"></div>
                    </span>
                    <p class="dark:text-darkText text-lightText text-base font-medium"> Zuverlässigkeit und
                        termingerechtes Arbeiten sind entscheidend für eine erfolgreiche Zusammenarbeit. Mein Ziel ist
                        es, meine Kunden zufrieden zu stellen und ihre Ziele zu erreichen, indem ich meine Versprechen
                        halte. </p>
                </div>
            </div>
            <div
                data-animation="scale-in"
                class="fadeInAnimationJs rounded-xl dark:bg-darkContainer bg-lightContainer w-full flex gap-1 flex-col p-5 sm:p-8 max-w-[700px] mx-auto">
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/mainPage/Emoji/Smile.png" alt=""
                    class="max-w-[108px] ml-auto " />
                <div class="flex flex-col gap-4">
                    <span class="w-fit">
                        <h1 class="titleFont text-2xl leading-4  sm:text-4xl sm:leading-7">Fair.</h1>
                        <div class="w-full bg-light opacity-20 rounded-sm h-2 sm:h-[14px]"></div>
                    </span>
                    <p class="dark:text-darkText text-lightText text-base font-medium">Fairness ist ein wichtiger Wert,
                        den ich bei meiner Arbeit als Webentwickler hochhalte. Ich bin davon überzeugt, dass eine faire
                        und transparente Arbeitsweise dazu beiträgt, langfristige und erfolgreiche Beziehungen mit
                        meinen Kunden aufzubauen. Auf diese Weise können meine Kunden sicher sein, dass sie eine faire
                        und transparente Zusammenarbeit mit mir haben.</p>
                </div>
            </div>
            <div
                data-animation="scale-in"
                class="fadeInAnimationJs rounded-xl dark:bg-darkContainer bg-lightContainer w-full flex gap-1 flex-col p-5 sm:p-8 max-w-[700px] mx-auto">
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/mainPage/Emoji/ThumbsUp.png" alt=""
                    class="max-w-[108px] ml-auto " />
                <div class="flex flex-col gap-4">
                    <span class="w-fit">
                        <h1 class="titleFont text-2xl leading-4  sm:text-4xl sm:leading-7">Einfach.</h1>
                        <div class="w-full bg-light opacity-20 rounded-sm h-2 sm:h-[14px]"></div>
                    </span>
                    <p class="dark:text-darkText text-lightText text-base font-medium"> Ich glaube daran, dass eine
                        klare und einfache Herangehensweise oft die beste Lösung ist. Einfachheit bedeutet für mich,
                        dass ich meine Kunden in den Entwicklungsprozess gegebenenfalls einbeziehe und bei Bedarf
                        erklärende Schritte gebe, um sicherzustellen, dass wir auf einer gemeinsamen Basis arbeiten.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div id="AboutMe" class="mt-16 pt-32 sm:mt-64 sm:pt-32 duration-700 container max-w-[512px] xl:max-w-[1280px] mx-auto">
    <div class="fadeInAnimationJs">
        <!-- Überschrift -->
        <div data-animation="scale-in" class="fadeInAnimationJs lg:mx-auto w-fit ">
            <span
                class="sm:leading-[4rem] leading-[3.2rem] underlineIndi dark:text-darkText text-lightText text-4xl sm:text-6xl titleFont lg:text-center px-2 mx-auto">
                Einfach Ich. </span>
            
        </div>
        <!-- About ME -->
        <div class=" flex gap-8 flex-col xl:flex-row mx-auto mt-12 sm:mt-24">
            <!-- IMG -->
            <img src="https://janhindemit.de/wp-content/uploads/2024/09/bester-balck.png" alt=""
                data-animation="slide-in-shrink"
                class=" object-cover fadeInAnimationJs w-[512px] aspect-square rounded-2xl md:rounded-[52px] sm:hover:-rotate-1 sm:hover:scale-[1.01] duration-200" />
            <div class="flex flex-col gap-5">
                <!-- ÜBERSCHRIFT -->
                <h1 data-animation="slide-in-up"
                    class="fadeInAnimationJs dark:text-darkText text-lightText text-2xl sm:text-4xl titleFont break-words">
                    Ich habe eine Leidenschaft für effektive und benutzerfreundliche <span
                        class="text-color1 underline titleFont">Lösungen</span>.</h1>
                <div class="justify-between h-fullfont-medium">
                    <p data-animation="slide-in-left"
                        class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl mb-5">
                        Ich bin ein begeisterter Programmierer aus Norddeutschland. Meine umfassenden Kenntnisse in
                        diesem Bereich habe ich durch mein fortwährendes Engagement, praktische Erfahrungen und in
                        meinem Studium <span class="text-color3 underline">"Medieninformatik"</span> erworben.
                    <p data-animation="slide-in-left"
                        class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl mb-5">
                        Ich habe Erfahrung in der Entwicklung von <span
                            class="text-color4 underline">"Webanwendungen"</span> und bin besonders versiert im Bereich
                        des <span class="text-color2 underline">"Web-/Frontend-Designs"</span> und <span
                            class="text-color1 underline">"UI/UX Design"</span>. </p>
                    <p data-animation="slide-in-down"
                        class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl"> Ich
                        habe eine Leidenschaft für effektive und benutzerfreundliche Lösungen, die das Leben der Nutzer
                        verbessern. Ich bin ständig bestrebt, meine Fähigkeiten und Kenntnisse auf dem neuesten Stand zu
                        halten. Wenn du einen kompetenten und engagierten Entwickler suchen, dann bist du hier genau
                        richtig. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="EmailMe" class=" pt-24 mt-24  sm:pt-96 pb-48 sm:mt-0 duration-700">
    <div
        class="w-full mx-auto max-w-7xl lg:bg-contact rounded-xl duration-200 flex flex-col lg:flex-row lg:h-[334px] items-center justify-between sm:p-7 xl:p-12 gap-10 lg:gap-7">
        <!-- BUTTONS -->
        <div
            class="w-full max-w-[650px] lg:max-w-[550px] flex flex-col   gap-6 sm:gap-12 bg-contactForm lg:bg-contact px-4 py-6 lg:p-0 rounded-xl">
            <!-- Überschrift -->
            <div data-animation="scale-in" class="fadeInAnimationJs flex flex-col items-center gap-2 ">
                <h1 class="dark:text-darkText text-lightText text-3xl lg:text-4xl titleFont duration-700 text-center">
                    Meine Kontaktdaten. </h1>
                <p class="text-[#605F5D] text-lg sm:text-2xl font-medium duration-700 text-center"> Hier kannst du mich
                    jederzeit erreichen. </p>
            </div>
            <!--Buttons -->
            <div data-animation="slide-in-shrink"
                class="fadeInAnimationJs m-0 grid w-full grid-cols-2 sm:grid-cols-3  gap-5   mx-auto">
                <a href="https://www.instagram.com/hindemit.ui/" target="_blank"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Instagram.svg" alt="" />
                    <p class="text-base sm:text-lg font-medium">Instagram</p>
                </a>
                <a href="https://www.facebook.com/hindemitjan/" target="_blank"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Facebook.svg" alt="" />
                    <p class="text-base sm:text-lg font-medium">Facebook</p>
                </a>
                <a href="https://t.me/hundemit" target="_blank"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/telegram-logo.svg"
                        alt="" />
                    <p class="text-base sm:text-lg font-medium">Telegram</p>
                </a>
                <button id="mailButton"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/Mail.svg" alt="" />
                    <p id='mailButtonText' class="text-base sm:text-lg font-medium">Mail</p>
                </button>
                <a href="https://www.linkedin.com/in/jan-hindemit-637104250/" target="_blank"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/linkedin-logo.svg"
                        alt="" />
                    <p class="text-base sm:text-lg font-medium">LinkedIn</p>
                </a>
                <a href="https://dribbble.com/Hundemit" target="_blank"
                    class="h-12 w-full  bg-lightButton hover:bg-contactButtonHover flex gap-2 justify-center items-center duration-200 rounded-md">
                    <img class="h-[20px] duration-700 hover:rotate-12 hover:scale-110"
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/dribbble-logo.svg"
                        alt="" />
                    <p class="text-base sm:text-lg font-medium">Dribbble</p>
                </a>
            </div>
        </div>
        <!-- FORM -->
        <div data-animation="slide-in-down"
            class="fadeInAnimationJs bg-contactForm max-w-[650px] lg:max-w-[500px] w-full rounded-xl lg:border lg:border-[#dedede1e] px-4 py-5 sm:px-8 sm:py-9 lg:drop-shadow-md">
            <p id="formsHeader"
                class="dark:text-darkText text-lightText text-3xl lg:text-4xl titleFont duration-700 text-center ">
                Schreibe mir.</p>
            <!--  -->
            <!--  --> <?php echo do_shortcode('[wpforms id="78" title="false"]'); ?> <!--  -->
        </div>
    </div>
</div> <?php get_footer(); ?>