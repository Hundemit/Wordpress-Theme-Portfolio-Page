<?php get_header(); ?> 
<div id="firstPage"
    class=" mx-auto h-[90vh] sm:h-[100vh] container justify-center lg:justify-between flex flex-col gap-5 lg:flex-row items-start lg:items-center duration-700 ">
    <div id="einsTextContainer" class="flex flex-col gap-5 sm:gap-7">
        <div
            data-animation="slide-in-up"
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
                                <p class="longBeach text-color3 einsText text-[27px] sm:text-5xl 2xl:text-6xl">
                                    Freelancer!</p>
                                <div class="w-full bg-color3 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                            <div class="w-fit content__container__list__item">
                                <p class="jetBrinsMono text-color4 einsText text-[27px] sm:text-5xl 2xl:text-6xl">
                                    Software Engineer;</p>
                                <div class="w-full bg-color4 opacity-20 rounded-sm einsTextUnderline">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
        <p data-animation="slide-in-right"
                class="fadeInAnimationJs text-sm lg:text-lg font-medium max-w-[500px] duration-700"> Vom Aufbau ihrer Website bis hin zur
            Konzeption Ihres digitalen Medienauftritts, biete ich professionelle Design & Code Dienstleistungen an. </p>
        <!-- Button -->
        <a href="#EmailMe"
          
                class=" einsTextButton h-12 duration-700 w-full lg:w-fit absolute lg:static bottom-4 left-0 rounded lg:px-0 hover:translate-y-2 px-6 sm:px-0">
            <div id="svenZwei"
                class="w-full h-full rounded-md container mx-auto duration-700 flex justify-center items-center">
                <p class="text-dark font-bold px-10">Kontaktiere mich.</p>
            </div>
        </a>
    </div>
    <!-- IMG -->
    <div id="controls-carousel" data-animation="scale-in"
                class="fadeInAnimationJs relative w-full h-48 md:h-80 lg:h-96 lg:max-w-[650px] duration-700"
        data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-full rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/coming Soon.gif"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/aboutMe/me2.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?php echo get_bloginfo('template_url') ?>/Assests/coming Soon.gif"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                    alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="animate-pulse absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
        <div data-animation="slide-in-shrink"
         class="fadeInAnimationJs mx-auto w-fit mb-3 o">
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
        ?> <div data-animation="slide-in-down"
         class="fadeInAnimationJs mx-auto w-fit grid mt-12 sm:mt-24 lg:grid-cols-2 xl:grid-cols-3  gap-y-5 gap-x-16"> <?php if (have_posts()):
             while (have_posts()):
                 the_post(); ?>                 <?php get_template_part('template_parts/content'); ?>         <?php endwhile;
         else: ?> <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?> </div>
        <a href="<?php echo get_permalink(get_page_by_path('myprojects')); ?>"
            class="h-12 mx-auto  w-fit bg-lightButton   hover:bg-darkLight flex gap-2 justify-center items-center duration-700 rounded-md mt-12 px-4 animate-bounce ">
            <p class="text-lg font-medium"> Noch mehr Projekte. →</p>
        </a>
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
        <div data-animation="scale-in"
                class="fadeInAnimationJs lg:mx-auto w-fit ">
            <span
                class="sm:leading-[4rem] leading-[3.2rem] underlineIndi dark:text-darkText text-lightText text-4xl sm:text-6xl titleFont lg:text-center px-2 mx-auto">
                Einfach Ich. </span>
        <p class="mt-3 font-medium dark:text-darkTextLow text-lightTextLow text-xl sm:text-2xl mx-auto lg:text-center"> Eine
            kleine Vorstellung meinerseits. </p>
        </div>

        <!-- About ME -->
        <div class=" flex gap-8 flex-col xl:flex-row mx-auto mt-12 sm:mt-24">
            <!-- IMG -->
            <img src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/aboutMe/me.png" alt=""
                data-animation="slide-in-shrink"
                class="fadeInAnimationJs w-[512px] aspect-square rounded-xl sm:hover:-rotate-1 sm:hover:scale-[1.01] duration-200" />
            <div class="flex flex-col gap-5">
                <!-- ÜBERSCHRIFT -->
                <h1  data-animation="slide-in-up"
                class="fadeInAnimationJs dark:text-darkText text-lightText text-3xl sm:text-4xl titleFont break-words"> "Ich habe eine
                    Leidenschaft für effektive und benutzerfreundliche <span
                        class="text-color1 underline titleFont">Lösungen</span>." </h1>
                <div class="justify-between h-fullfont-medium">
                    <p  data-animation="slide-in-left"
                class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl mb-5"> Ich bin ein begeisterter
                        Programmierer aus Norddeutschland. Meine umfassende Kenntnis in diesem Bereich habe ich durch
                        mein fortwährendes Engagement, praktische Erfahrungen und mein Studium <span
                            class="text-color3 underline">"Medieninformatik"</span> erworben. 
                             <p data-animation="slide-in-left"
                class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl mb-5">
                            Ich habe
                        Erfahrung in der Entwicklung von <span class="text-color4 underline">"Webanwendungen"</span> und
                        bin besonders versiert im Bereich des <span
                            class="text-color2 underline">"Web-/Frontend-Designs"</span> und <span
                            class="text-color1 underline">"UI/UX Design"</span>. 
                          </p>

                          <p data-animation="slide-in-down"
                class="fadeInAnimationJs dark:text-darkText text-lightText font-medium text-lg  max-w-xl">
                            Ich habe eine Leidenschaft für effektive und benutzerfreundliche Lösungen, die das Leben der Nutzer verbessern. Ich bin
                        ständig bestrebt, meine Fähigkeiten und Kenntnisse auf dem neuesten Stand zu halten. Wenn Sie
                        einen kompetenten und erfahrenen Entwickler suchen, stehe ich Ihnen gerne zur Verfügung.
                          </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="EmailMe" class=" pt-24 mt-24  sm:pt-96 pb-48 sm:mt-0 duration-700">
    <div
        class="w-full mx-auto max-w-7xl lg:bg-contact rounded-xl duration-200 flex flex-col lg:flex-row lg:h-[334px] items-center justify-between p-0 xl:p-12 gap-10 lg:gap-7">
        <!-- BUTTONS -->
        <div
            class="w-full max-w-[650px] lg:max-w-[550px] flex flex-col   gap-6 sm:gap-12 bg-contactForm lg:bg-contact px-4 py-6 lg:p-0 rounded-xl">
            <!-- Überschrift -->
            <div data-animation="scale-in"
         class="fadeInAnimationJs flex flex-col items-center gap-2 ">
                <h1 class="dark:text-darkText text-lightText text-3xl lg:text-4xl titleFont duration-700 text-center"> Meine
                    Kontaktdaten. </h1>
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
                        src="<?php echo get_bloginfo('template_url') ?>/Assests/picture/logo/telegram-logo.svg" alt="" />
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
        <div
            data-animation="slide-in-down"
         class="fadeInAnimationJs bg-contactForm max-w-[650px] lg:max-w-[500px] w-full rounded-xl lg:border lg:border-[#dedede1e] px-4 py-5 sm:px-8 sm:py-9 lg:drop-shadow-md">
            <p id="formsHeader"
                class="dark:text-darkText text-lightText text-3xl lg:text-4xl titleFont duration-700 text-center ">
                Schreibe mir.</p>
            <!--  -->
            <!--  --> <?php echo do_shortcode('[wpforms id="78" title="false"]'); ?>
            <!--  -->
        </div>
    </div>
</div> <?php get_footer(); ?>